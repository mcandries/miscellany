<?php

return [
    'create'        => [
        'description'   => 'Créer un nouvel événement',
        'success'       => 'Événement \':name\' créé.',
        'title'         => 'Nouvel Evénement',
    ],
    'destroy'       => [
        'success'   => 'Événement \':name\' supprimé.',
    ],
    'edit'          => [
        'success'   => 'Événement \':name\' modifier.',
        'title'     => 'Modifier l\'événement :name',
    ],
    'fields'        => [
        'date'      => 'Date',
        'image'     => 'Image',
        'location'  => 'Lieu',
        'name'      => 'Nom',
        'type'      => 'Type',
    ],
    'index'         => [
        'add'           => 'Nouvel Événement',
        'description'   => 'Gestion des événements de :name.',
        'header'        => 'Événements de :name',
        'title'         => 'Événements',
    ],
    'placeholders'  => [
        'date'      => 'La date de l\'événement',
        'location'  => 'Choix d\'un lieu',
        'name'      => 'Nom de l\'événement',
        'type'      => 'Cérémonie, Festival, Désastre, Bataille, Naissance',
    ],
    'show'          => [
        'description'   => 'Détail d\'un événement',
        'tabs'          => [
            'information'   => 'Information',
        ],
        'title'         => 'Événement :name',
    ],
    'tabs'          => [
        'calendars' => 'Entrées calendrier',
    ],
];
