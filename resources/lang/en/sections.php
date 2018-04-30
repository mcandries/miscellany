<?php

return [
    'create'        => [
        'description'   => 'Create a new category',
        'success'       => 'Category \':name\' created.',
        'title'         => 'New Category',
    ],
    'destroy'       => [
        'success'   => 'Category \':name\' removed.',
    ],
    'edit'          => [
        'description'   => '',
        'success'       => 'Category \':name\' updated.',
        'title'         => 'Edit Category :name',
    ],
    'fields'        => [
        'characters'    => 'Characters',
        'section'      => 'Category',
        'sections'     => 'Subcategories',
        'children'      => 'Children',
        'name'          => 'Name',
        'type'          => 'Type',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Exploration View',
        ],
        'add'           => 'New Category',
        'description'   => 'Manage the category of :name.',
        'header'        => 'Categories in :name',
        'title'         => 'Categories',
    ],
    'placeholders'  => [
        'section'  => 'Choose a parent category',
        'name'      => 'Name of the category',
        'type'      => 'Lore, Wars, History, Religion, Vexology',
    ],
    'show'          => [
        'description'   => 'A detailed view of a category',
        'tabs'          => [
            'children'    => 'Children',
            'information'   => 'Information',
            'sections'     => 'Categories',
        ],
        'title'         => 'Category :name',
    ],
];
