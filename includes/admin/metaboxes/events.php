<?php
namespace ATU\Theme\Metaboxes;

use ATU\Theme\IA;
use OMG\Fields;

/**
 * Sets up all metaboxes for the events Post Type.
 *
 * @uses add_action()
 */
function events_setup() {
	add_action( 'add_meta_boxes', __NAMESPACE__ . '\register_events_metabox' );
	add_action( 'save_post_' . IA\get_type_events(), __NAMESPACE__ . '\events_metabox_validation' );
}
/**
 * Function registers the Team Member Info Metabox.
 *
 * @return void
 */
function register_events_metabox() {
	add_meta_box(
		'events-meta-box',
		esc_html__( 'events Info', 'ATU' ),
		__NAMESPACE__ . '\events_meta_box_display',
		IA\get_type_events()
	);
}
/**
 * Function handles displaying the HTML markup for the Team Member Info metabox.
 *
 * @param [object] $post WordPress Post Object.
 * @return void
 */
function events_meta_box_display( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'events_info_nonce' );

	$model = IA\get_events_model_keys();

	echo Fields\register_text_field(
		$post,
		$model['location']['key'],
		$model['location']['label']
	);

	echo Fields\register_text_field(
		$post,
		$model['date']['key'],
		$model['date']['label']
	);
}
/**
 * Function handles saving the meta fields in the Company Info Metabox.
 *
 * @param [int] $post_id WordPress Post Object ID.
 * @return void
 */
function events_metabox_validation( $post_id ) {
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['events_info_nonce'] )
	&& wp_verify_nonce( $_POST['events_info_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	$model = IA\get_events_model_keys();

	if ( isset( $_POST[ $model['location']['key'] ] ) ) {
		update_post_meta(
			$post_id,
			$model['location']['key'],
			sanitize_text_field( wp_unslash( $_POST[ $model['location']['key'] ] ) )
		);
	}

	if ( isset( $_POST[ $model['date']['key'] ] ) ) {
		update_post_meta(
			$post_id,
			$model['date']['key'],
			sanitize_text_field( wp_unslash( $_POST[ $model['date']['key'] ] ) )
		);
	}
}
