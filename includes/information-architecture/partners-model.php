<?php
namespace ATU\Theme\IA;

/**
 * Defines model data for the Team Members Post Type.
 *
 * @param boolean $key Allows you to pas a key name to get a specific model key.
 * @return mixed Return an array if no $key is passed, otherwise
 * it returns a model key string name
 */
function get_partners_model_keys( $key = false ) {
	$prefix = 'atu_partners';
	$keys   = [
		'url'   => [
			'key'   => sprintf( '%s_url', $prefix ),
			'label' => esc_html__( 'Url', 'atu' ),
		],
	];

	return get_meta_key_value( $keys, $key );
}
