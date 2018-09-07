<?php
namespace ATU\Theme\IA;

require_once 'partners-model.php';
require_once 'videos-model.php';
/**
 * Helper function which makes it easy to get a post meta key by its short
 * name defined in the model.
 *
 * @param [array]  $keys An array of all model keys.
 * @param [string] $key An model key you want.
 * @return array|string array if no $key is passed, or the model key if a $key is passed.
 */
function get_meta_key_value( $keys, $key ) {
	return ( $key ) ? $keys[ $key ]['key'] : $keys;
}
