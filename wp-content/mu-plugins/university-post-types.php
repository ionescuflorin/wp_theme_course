<?php 
// REGISTER A NEW CUSTOM POST TYPE (EVENTS)
// Better practice to treat CPT as a plugin (Must Use Plugin) - you can't dezactivate it
function university_post_types() {
    register_post_type('event', [
        // it will make visible for the users
        'rewrite' => [
            'slug' => 'events'
        ],
        'has_archive' => true,
        'public' => true,
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ],
        'menu_icon' => 'dashicons-calendar'
    ]);
}

add_action('init', 'university_post_types');