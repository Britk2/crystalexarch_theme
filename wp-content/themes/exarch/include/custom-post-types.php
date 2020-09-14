<?php

/**
 * 
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 * 
 */

function register_event_custom_post_type(){
    $arg = [
        'label'                 => 'Events',
        'labels'                => [
            'name'                  => 'Events',
            'singular_name'         => 'Event'
        ],
        'supports' => [
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats'
        ],

        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
        // Dash Icons https://developer.wordpress.org/resource/dashicons/#media-audio
        'menu_icon'             => 'dashicons-megaphone'
        ];

    register_post_type('events',$arg);
}

add_action('init', 'register_event_custom_post_type');