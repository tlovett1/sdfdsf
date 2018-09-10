<?php
/**
 * File contains logic to fetch events.
 *
 * @package ATU\Theme\Cache
 */

namespace ATU\Theme\Cache;

use ATU\Theme\IA;

/**
 * Gets all of the posts for the events post type
 *
 * @return array of events custom post type
 */
function get_events_query()
{
    $args = [
        'post_type'              => IA\get_type_events(),
        'no_found_rows'          => true,
        'update_post_meta_cache' => false,
        'posts_per_page'         => 100,
        'update_post_term_cache' => false,
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
    ];

    $events = new \WP_Query($args);

    if (is_wp_error($events) || ! $events->have_posts()) {
        return false;
    }

    return $events->posts;
}


/**
 * The post id gets passed in and retrieves all of the custom post meta.
 *
 * @param [int] $events_id is the WP post id.
 * @return array Returns an array of company post types and their post meta.
 */
function get_events_meta($events_id)
{
    $post_meta  = get_post_meta($events_id);


    return [
        'ID'        => $events_id,
        'title'     => get_the_title($events_id),
        'location'  => get_post_meta($events_id, IA\get_events_model_keys('location'), true),
        'date'       => get_post_meta($events_id, IA\get_events_model_keys('date'), true),
    ];
}

/**
 * Pulls in the company posts from the query get_events_query() and then
 * returns an array with their post meta.
 *
 * @return array If company posts do exist then it will return an array of the posts with their post meta, otherwise it will return false.
 */
function get_events()
{
    $events = get_events_query();

    if (empty($events)) {
        return false;
    }

    return array_map(function ($event) {
        return get_events_meta($event->ID);
    }, $events);
}
