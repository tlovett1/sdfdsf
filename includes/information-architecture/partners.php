<?php
namespace ATU\Theme\IA;

/**
 * Registers the Partner Members Custom Post Type
 */
add_action(
    'init',
    function () {
        $partner_labels = array(
            'name'               => esc_html__('Partners', 'atu'),
            'singular_name'      => esc_html__('Partners', 'atu'),
            'add_new'            => esc_html__('Add Partner', 'atu'),
            'add_new_item'       => esc_html__('Add New Partner', 'atu'),
            'edit_item'          => esc_html__('Edit Partner', 'atu'),
            'new_item'           => esc_html__('New Partner', 'atu'),
            'all_items'          => esc_html__('All Partners', 'atu'),
            'view_item'          => esc_html__('View Partners', 'atu'),
            'search_items'       => esc_html__('Search Partners', 'atu'),
            'not_found'          => esc_html__('No Partner found.', 'atu'),
            'menu_name'          => esc_html__('Partners', 'atu'),
            'not_found_in_trash' => esc_html__('No Partner found in Trash', 'atu'),
        );

        $partners_args = array(
            'labels'        => $partner_labels,
            'description'   => esc_html__('Partners', 'atu'),
            'public'        => true,
            'menu_icon'     => 'dashicons-businessman',
            'hierarchical'  => false,
            'show_in_rest'  => false,
            'has_archive'   => false,
            'menu_position' => 4,
            'rewrite'       => array(
                'slug' => 'partners',
            ),
            'supports'      => array(
                'title',
                'thumbnail',
            ),
        );

        register_post_type(get_type_partners(), $partners_args);
    }
);
