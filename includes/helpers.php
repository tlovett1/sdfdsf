<?php

namespace ATU\Theme\Helpers;

function inline_svg( $name, $force = false ) {

	$stored_name = 'stored_svg_' . $name;

	$svg = get_transient( $stored_name );

	if ( false === $svg || true === $force ) {

		$svg_path = get_template_directory() . '/svg/' . $name . '.svg';

		if ( ! file_exists( $svg_path ) ) {
			return false;
		}

		$svg = file_get_contents( $svg_path );

		set_transient( $stored_name, $svg, HOUR_IN_SECONDS * 24 );
	}

	return $svg;
}


/**
 * Output the markup for an image.
 *
 * @param [int]  $image_id is the id of the image.
 * @param string $id is the id you want to add for you image tag.
 * @param string $class the class you want to add for you image tag.
 * @param string $size is the size you want to use for your image.
 * @return HTML returns the markup for the image element with the id, class and size you passed in.
 */
function get_image_element( $image_id, $id = '', $class = '', $size = 'medium' ) {

	if ( empty( $image_id ) ) {
		return false;
	}

	$image_attributes = wp_get_attachment_image_src( $image_id, $size );

	ob_start(); ?>

	<img <?php echo ( $id ) ? sprintf( 'id="%s"', esc_attr( $id ) ) : false; ?> <?php echo ( $class ) ? sprintf( 'class="%s"', esc_attr( $class ) ) : false; ?> src="<?php echo esc_url( $image_attributes[0] ); ?>" alt="<?php echo esc_attr( $image_attributes[3] ); ?>" >

	<?php
	return ob_get_clean();
}

/**
 * Function checks to see if a value in an array exists and has been set.
 *
 * @param [array]  $values is the array you want to check.
 * @param [string] $key is the name of the value you want to check if it exists.
 * @return String Returns the value of the key name if it has been set and exists.
 */
function value_exists( $values, $key = '' ) {

	if ( is_array( $values ) ) {
		return ( isset( $values[ $key ] ) && ! empty( $values[ $key ] ) );
	}

	return ! empty( $values );

}
