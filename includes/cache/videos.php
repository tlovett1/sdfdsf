<?php
namespace ATU\Theme\Cache;

use ATU\Theme\IA;

function get_videos_query( $postsPerPage,  $excludeThesePosts = '', $pagination = '' ) {

	$args = [
		'post_type'              => IA\get_type_videos(),
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
		'posts_per_page'         => $postsPerPage,
		'orderby'                => 'post_date',
		'post__not_in'           =>  $excludeThesePosts
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

function get_videos() {

	if ( empty( $videos ) ) {
		$videos = get_videos_query( 3 );

		if ( empty( $videos ) ) {
			return false;
		}

		return array_map(
			function( $video ) {
					return get_videos_meta( $video->ID );
			}, $videos->posts
		);
	}

	return $videos;
}

function get_videos_meta( $postID ) {

	if ( empty( $meta ) ) {
		$meta = [
			'ID'      => $postID,
			'title'   => get_the_title( $postID ),
			'image' => get_post_thumbnail_id( $postID ),
			'url'     => get_post_meta( $postID, IA\get_video_model_keys( 'url' ), true ),
			'date'    => get_the_date( 'F Y',  $postID ),
		];

	}

	return $meta;
}
