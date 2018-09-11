<?php
/**
 * File contains code for the endpoint which loads more videos.
 *
 * @package atu-theme.
 */

namespace ATU\Theme\Endpoints;

use ATU\Theme\Views;
use ATU\Theme\Cache;

function get_videos( $request ) {
	$args = $request->get_params();
	$html = '';

	$posts = Cache\get_videos_query( $args['per_page'], '', $args['page'] );

	$videos = array_map(
		function( $video ) {
			return Cache\get_videos_meta( $video->ID );
		},
		$posts->posts
	);

	foreach ( $videos as $post ) :
		$html .= Views\build_video( $post );
	endforeach;

	return [
		'post'        => $html,
		'posts-found' => $posts->found_posts,
		'more'        => $posts->max_num_pages,
	];
}
