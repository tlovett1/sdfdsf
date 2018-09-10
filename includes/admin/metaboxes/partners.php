<?php
/**
 * File contains code the register metaboxes on the partners post type edit screen.
 *
 * @package atu-theme.
 */

namespace ATU\Theme\Metaboxes;

use ATU\Theme\IA;
use OMG\Fields;

/**
 * Sets up all metaboxes for the Partners Post Type.
 *
 * @uses add_action()
 */
function partners_setup() {
	add_action( 'add_meta_boxes', __NAMESPACE__ . '\register_partners_metabox' );
	add_action( 'save_post_' . IA\get_type_partners(), __NAMESPACE__ . '\partners_metabox_validation' );
}
/**
 * Function registers the Team Member Info Metabox.
 *
 * @return void
 */
function register_partners_metabox() {
	add_meta_box(
		'partners-meta-box',
		esc_html__( 'Partners Info', 'ATU' ),
		__NAMESPACE__ . '\partners_meta_box_display',
		IA\get_type_partners()
	);
}

/**
 * Function handles displaying the HTML markup for the Team Member Info metabox.
 *
 * @param [object] $post WordPress Post Object.
 * @return void
 */
function partners_meta_box_display( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'partners_info_nonce' );

	$model = IA\get_partners_model_keys();

	echo Fields\register_text_field(
		$post,
		$model['url']['key'],
		$model['url']['label']
	);
}

/**
 * Function handles saving the meta fields in the Company Info Metabox.
 *
 * @param [int] $post_id WordPress Post Object ID.
 * @return void
 */
function partners_metabox_validation( $post_id ) {
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['partners_info_nonce'] )
	&& wp_verify_nonce( $_POST['partners_info_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	$model = IA\get_partners_model_keys();

	if ( isset( $_POST[ $model['url']['key'] ] ) ) {
		update_post_meta(
			$post_id,
			$model['url']['key'],
			sanitize_text_field( wp_unslash( $_POST[ $model['url']['key'] ] ) )
		);
	}
}
