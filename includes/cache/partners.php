<?php
/**
 * File contains logic to fetch partners.
 *
 * @package ATU\Theme\Cache
 */

namespace ATU\Theme\Cache;

use ATU\Theme\IA;

/**
 * Gets all of the posts for the partners post type
 *
 * @return array of partners custom post type
 */
function get_partners_query() {
	$args = [
		'post_type'              => IA\get_type_partners(),
		'no_found_rows'          => true,
		'update_post_meta_cache' => false,
		'posts_per_page'         => 100,
		'update_post_term_cache' => false,
		'order'                  => 'ASC',
		'orderby'                => 'menu_order',
	];

	$partners = new \WP_Query( $args );

	if ( is_wp_error( $partners ) || ! $partners->have_posts() ) {
		return false;
	}

	return $partners->posts;
}


/**
 * The post id gets passed in and retrieves all of the custom post meta.
 *
 * @param [int] $partners_id is the WP post id.
 * @return array Returns an array of company post types and their post meta.
 */
function get_partners_meta( $partners_id ) {
	$post_meta  = get_post_meta( $partners_id );


	return [
		'ID'        => $partners_id,
		'title'     => get_the_title( $partners_id ),
		'image'     => get_the_post_thumbnail_url( $partners_id, 'full' ),
		'url'       => get_post_meta( $partners_id, IA\get_partners_model_keys( 'url' ), true ),
	];
}

/**
 * Pulls in the company posts from the query get_partners_query() and then
 * returns an array with their post meta.
 *
 * @return array If company posts do exist then it will return an array of the posts with their post meta, otherwise it will return false.
 */
function get_partners() {
	$partners = get_partners_query();

	if ( empty( $partners ) ) {
		return false;
	}

	return array_map( function( $partner ) {

		return get_companies_meta( $partner->ID );

	}, $partners );
}
