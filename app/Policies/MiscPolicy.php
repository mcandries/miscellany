<?php

namespace App\Policies;

use App\Models\Campaign;
use App\Facades\EntityPermission;
use App\Models\Entity;
use App\Traits\EnvTrait;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class MiscPolicy
{
    use HandlesAuthorization, EnvTrait;

    protected static $cached = [];

    protected static $roles = false;

    protected $model = '';

    /**
     * @param User $user
     * @return bool
     */
    public function browse(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the entity.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Entity  $entity
     * @return mixed
     */
    public function view(User $user, $entity)
    {
        return
            // The entity's campaign must be the same as the current user campaign
            $user->campaign->id == $entity->campaign_id
            &&
            // The user must have access.
            // isAdmin could be cached for performance, but needs to trigger a release when changing permissions
            // other permissions should albo be cachable with a release trigger
            $this->checkPermission('read', $user, $entity);
    }

    /**
     * Determine whether the user can create entities.
     * @param User $user
     * @param null $model
     * @param Campaign|null $campaign
     * @return bool
     */
    public function create(User $user, $entity = null, Campaign $campaign = null)
    {
        return Auth::check() && !$this->shadow() && $this->checkPermission('add', $user, null, $campaign);
    }

    /**
     * Determine whether the user can update the entity.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Entity  $entity
     * @return mixed
     */
    public function update(User $user, $entity)
    {
        return Auth::check() && (!empty($entity->campaign_id) ? $user->campaign->id == $entity->campaign_id : true)
            && $this->checkPermission('edit', $user, $entity);
    }

    /**
     * Determine whether the user can delete the entity.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Entity  $entity
     * @return mixed
     */
    public function delete(User $user, $entity)
    {
        return Auth::check() && !$this->shadow() &&  (!empty($entity->campaign_id) ? $user->campaign->id == $entity->campaign_id : true)
            && $this->checkPermission('delete', $user, $entity);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function attribute(User $user, $entity, $subAction = 'browse')
    {
        return $this->relatedElement($user, $entity, $subAction);
    }

    /**
     * @param User $user
     * @param $entity
     * @param string $subAction
     * @return bool
     */
    public function relatedElement(User $user, $entity, $subAction = 'browse')
    {
        if ($subAction == 'browse') {
            return Auth::check() && $this->view($user, $entity);
        } else {
            return Auth::check() && $this->update($user, $entity) && !$this->shadow();
        }
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function relation(User $user, $entity, $subAction = 'browse')
    {
        return $this->relatedElement($user, $entity, $subAction);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function entityNote(User $user, $entity)
    {
        return Auth::check() && (
            $this->update($user, $entity) ||
            $this->checkPermission('entity-note', $user, $entity)
        ) && !$this->shadow();
    }

    /**
     * Determine whether the user can update the entity.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Entity  $entity
     * @return mixed
     */
    public function permission(User $user, $entity)
    {
        if ($entity->exists === false) {
            return $this->checkPermission('permission', $user, null);
        }
        return $user->campaign->id == $entity->campaign_id &&
            ($user->campaign->roles()->count() > 1 || $user->campaign->members()->count() > 1) &&
            $this->checkPermission('permission', $user, $entity);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function move(User $user, $entity)
    {
        return !$this->shadow() && $this->update($user, $entity);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function events(User $user, $entity)
    {
        return !$this->shadow() && $this->update($user, $entity);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function inventory(User $user, $entity)
    {
        return !$this->shadow() && $this->update($user, $entity);
    }

    /**
     * @param string $action
     * @param User $user
     * @param Entity|null $entity
     * @param Campaign|null $campaign
     * @return bool
     */
    protected function checkPermission($action, User $user, $entity = null, Campaign $campaign = null)
    {
        return EntityPermission::hasPermission($this->model, $action, $user, $entity, $campaign);
    }
}
