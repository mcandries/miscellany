@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box">
                <div class="box-body box-profile">
                    @if ($model->image)
                    <a href="/storage/{{ $model->image }}">
                        <img class="profile-user-img img-responsive img-circle" src="/storage/{{ $model->image }}" alt="{{ $model->name }} picture">
                    </a>
                    @endif

                    <h3 class="profile-username text-center">{{ $model->name }}
                        @if ($model->is_private)
                             <i class="fa fa-lock" title="{{ trans('crud.is_private') }}"></i>
                        @endif
                    </h3>

                    <ul class="list-group list-group-unbordered">
                        @if ($model->type)
                        <li class="list-group-item">
                            <b>{{ trans('quests.fields.type') }}</b> <span class="pull-right">{{ $model->type }}</span>
                            <br class="clear" />
                        </li>
                        @endif
                    </ul>

                    @if (Auth::user()->can('update', $model))
                    <a href="{{ route('quests.edit', $model->id) }}" class="btn btn-primary btn-block">
                        <i class="fa fa-pencil" aria-hidden="true"></i> {{ trans('crud.update') }}
                    </a>
                    @endif

                    @if (Auth::user()->can('delete', $model))
                    <button class="btn btn-block btn-danger delete-confirm" data-name="{{ $model->name }}" data-toggle="modal" data-target="#delete-confirm">
                        <i class="fa fa-trash" aria-hidden="true"></i> {{ trans('crud.remove') }}
                    </button>
                    {!! Form::open(['method' => 'DELETE','route' => ['quests.destroy', $model->id], 'style'=>'display:inline', 'id' => 'delete-confirm-form']) !!}
                    {!! Form::close() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="{{ (request()->get('tab') == null ? ' active' : '') }}"><a href="#information" data-toggle="tab" aria-expanded="false">{{ trans('quests.show.tabs.information') }}</a></li>
                    @if ($campaign->enabled('characters'))
                        <li class="{{ (request()->get('tab') == 'character' ? ' active' : '') }}"><a href="#character" data-toggle="tab" aria-expanded="false">{{ trans('quests.show.tabs.characters') }}</a></li>
                    @endif
                    @if ($campaign->enabled('locations'))
                        <li class="{{ (request()->get('tab') == 'location' ? ' active' : '') }}"><a href="#location" data-toggle="tab" aria-expanded="false">{{ trans('quests.show.tabs.locations') }}</a></li>
                    @endif
                    <!--<li><a href="#character" data-toggle="tab" aria-expanded="false">Characters</a></li>-->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane {{ (request()->get('tab') == null ? ' active' : '') }}" id="information">
                        <div class="post">
                            <h3>{{ trans('quests.fields.description') }}</h3>
                            <p>{!! $model->description !!}</p>
                        </div>
                    </div>
                    @if ($campaign->enabled('characters'))
                        <div class="tab-pane {{ (request()->get('tab') == 'character' ? ' active' : '') }}" id="character">
                            @include('quests._characters')
                        </div>
                    @endif
                    @if ($campaign->enabled('locations'))
                        <div class="tab-pane {{ (request()->get('tab') == 'location' ? ' active' : '') }}" id="location">
                            @include('quests._locations')
                        </div>
                    @endif
                </div>
            </div>
            </div>

            <!-- actions -->
        </div>
    </div>
@endsection