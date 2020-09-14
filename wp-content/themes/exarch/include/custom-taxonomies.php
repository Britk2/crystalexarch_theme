<?php

// hook into the init action and call register_taxonomy_for_projects when it fires

add_action('init', 'register_taxonomy_for_events');

function register_taxonomy_for_events() {

    $labels = [
        'name'              => _x('Event Type', 'taxonomy general name'),
        'singular_name'     => _x('Event Type', 'taxonomy singular name'),
        'search_items'      => __('Search Event Type'),
        'all_items'         => __('All Event Type'),
        'parent_item'       => __('Parent Event Type'),
        'parent_item_colon' => __('Parent Event Type:'),
        'edit_item'         => __('Edit Event Type'),
        'update_item'       => __('Update Event Type'),
        'add_new_item'      => __('Add New Event Type'),
        'new_item_name'     => __('New Event Type Name'),
        'menu_name'         => __('Event'),
      ];
    
        // Now register the taxonomy
        register_taxonomy('eventType', ['events'], [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'events'],
      ]);

}
