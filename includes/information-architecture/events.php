<?php
namespace ATU\Theme\IA;

/**
 * Registers the Event Members Custom Post Type
 */
add_action(
    'init',
    function () {
        $event_labels = array(
            'name'               => esc_html__('Events', 'atu'),
            'singular_name'      => esc_html__('Events', 'atu'),
            'add_new'            => esc_html__('Add Event', 'atu'),
            'add_new_item'       => esc_html__('Add New Event', 'atu'),
            'edit_item'          => esc_html__('Edit Event', 'atu'),
            'new_item'           => esc_html__('New Event', 'atu'),
            'all_items'          => esc_html__('All Events', 'atu'),
            'view_item'          => esc_html__('View Events', 'atu'),
            'search_items'       => esc_html__('Search Events', 'atu'),
            'not_found'          => esc_html__('No Event found.', 'atu'),
            'menu_name'          => esc_html__('Events', 'atu'),
            'not_found_in_trash' => esc_html__('No Event found in Trash', 'atu'),
        );

        $events_args = array(
            'labels'        => $event_labels,
            'description'   => esc_html__('Events', 'atu'),
            'public'        => true,
            'menu_icon'     => 'dashicons-calendar-alt',
            'hierarchical'  => false,
            'show_in_rest'  => false,
            'has_archive'   => false,
            'menu_position' => 4,
            'rewrite'       => array(
                'slug' => 'events',
            ),
            'supports'      => array(
                'title',
            ),
        );

        register_post_type(get_type_events(), $events_args);
    }
);
