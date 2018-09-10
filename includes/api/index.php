<?php
/**
 * File bootstraps the api endpoints for the site.
 *
 * @packageatu-theme.
 */

namespace ATU\Theme\Endpoints;

function endpoint_setup() {
	require_once 'get-videos.php';
	add_action( 'rest_api_init', __NAMESPACE__ . '\atu_register_video_endpoint' );
}

/**
 * This function is where we register our routes for our video endpoint.
 */
function atu_register_video_endpoint() {
	register_rest_route(
		'atu/v1',
		'/videos',
		array(
			'methods'  => \WP_REST_Server::READABLE,
			'callback' => __NAMESPACE__ . '\get_videos',
			'args'     => [
				'page' => [
					'required' => true,
				],
				'per_page' => [
					'required' => true,
				],
			],
		)
	);
}
