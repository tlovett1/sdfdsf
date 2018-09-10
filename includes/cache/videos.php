<?php
/**
 * File contains logic to fetch videos cpt.
 *
 * @package ATU\Theme\Cache
 */

namespace ATU\Theme\Cache;

use ATU\Theme\IA;

/**
 * Gets all of the posts for the videos post type
 *
 * @return array of videos custom post type
 */
function get_videos_query( $posts_per_page, $exclude_these_posts = '', $pagination = '' ) {
	$args = [
		'post_type'              => IA\get_type_videos(),
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
		'posts_per_page'         => $posts_per_page,
		'orderby'                => 'post_date',
		'post__not_in'           => $exclude_these_posts,
	];

	if ( $pagination ) {
		$args = wp_parse_args( [ 'paged' => $pagination ], $args );
	}

	$videos = new \WP_Query( $args );

	if ( is_wp_error( $videos ) || ! $videos->have_posts() ) {
		return false;
	}

	return $videos;
}


/**
 * The post id gets passed in and retrieves all of the custom post meta.
 *
 * @param [int] $post_id is the WP post id.
 * @return array Returns an array of videos post types and their post meta.
 */
function get_videos_meta( $post_id ) {

	return [
		'ID'    => $post_id,
		'title' => get_the_title( $post_id ),
		'image' => get_post_thumbnail_id( $post_id ),
		'url'   => get_post_meta( $post_id, IA\get_video_model_keys( 'url' ), true ),
		'date'  => get_the_date( 'F Y', $post_id ),
	];
}



/**
 * Pulls in the videos posts using the query, pull in the first tree videos.
 *
 * @return array Returns an array of the first three videos and their their post meta.
 */
function get_videos() {
	$videos = get_videos_query( 3 );

	if ( empty( $videos ) ) {
		return false;
	}

	return array_map(
		function ( $video ) {
			return get_videos_meta( $video->ID );
		},
		$videos->posts
	);
}
