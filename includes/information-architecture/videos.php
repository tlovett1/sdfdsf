<?php
namespace ATU\Theme\IA;

/**
 * Registers the Videos Custom Post Type
 */
add_action( 'init', function() {
    $video_labels = array(
        'name'               => esc_html__( 'Videos', 'atu' ),
        'singular_name'      => esc_html__( 'Video', 'atu' ),
        'add_new'            => esc_html__( 'Add Video', 'atu' ),
        'add_new_item'       => esc_html__( 'Add New Video', 'atu' ),
        'edit_item'          => esc_html__( 'Edit Video', 'atu' ),
        'new_item'           => esc_html__( 'New Video', 'atu' ),
        'all_items'          => esc_html__( 'All Videos', 'atu' ),
        'view_item'          => esc_html__( 'View Videos', 'atu' ),
        'search_items'       => esc_html__( 'Search Videos', 'atu' ),
        'not_found'          => esc_html__( 'No Videos found.', 'atu' ),
        'menu_name'          => esc_html__( 'Videos', 'atu' ),
        'not_found_in_trash' => esc_html__( 'No Videos found in Trash', 'atu' ),
    );

    $video_args = array(
        'labels'                => $video_labels,
        'description'           => esc_html__( 'Video', 'atu' ),
        'public'                => true,
        'menu_icon'             => 'dashicons-video-alt3',
        'hierarchical'          => false,
        'show_in_rest'          => true,
        'has_archive'           => false,
        'menu_position'         => 4,
        'rewrite'               => array(
            'slug'              => 'videos'
        ),
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'rest_controller_class' => 'WP_REST_Posts_Controller'
    );

    register_post_type( get_type_videos(), $video_args );
} );