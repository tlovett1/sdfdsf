<?php
/**
 * Partial file for the testimonial slider.
 *
 * @package atu-theme
 */

namespace ATU\Theme\Helpers;

use GFAPI;

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
function get_image_element( $image_id, $id = '', $class = '', $size = 'full' ) {
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
		return ( isset( $values[$key] ) && ! empty( $values[$key] ) );
	}

	return ! empty( $values );
}

/**
 * Function checks to see if a value in an array exists and has been set.
 *
 * @param [array]  $sub_heading is the customizer settings array.
 * @param [array] $heading is the customizer settings array.
 * @param [string] $sub_heading_id is the id of the element.
 * @param [string] $heading_id  is the id of the element.
 * @param [string] $class is the class of the element.
 * @param [string] $image  is the size of the image.
 * @return HTML returns the markup for the Heading Section.
 */
function heading( $sub_heading, $heading, $sub_heading_id, $heading_id, $class = '', $image = false ) {
	ob_start();
	?>
		<?php
		if ( value_exists( $sub_heading, 'subheading' ) ) :
		?>
			<span id="<?php echo esc_attr( $sub_heading_id ); ?>" class="subheading <?php echo esc_attr( $class ); ?>" >
				<?php echo esc_html( $sub_heading ); ?>
			</span>
		<?php endif; ?>
		<?php
		if ( value_exists( $heading, 'heading' ) ) :
			?>
			<h3 id="<?php echo esc_attr( $heading_id ); ?>" class="heading  <?php echo esc_attr( $class ); ?>">
				<?php echo esc_html( $heading ); ?>
			</h3>
		<?php endif; ?>
		<?php
		if ( value_exists( $image, 'image' ) ) :
				$url = wp_get_attachment_image_src( $image, 'full' )[0]; ?>
			<img src="<?php echo esc_html( $url ); ?>" alt="<?php echo esc_html( $sub_heading ); ?>">
		<?php endif; ?>
	<?php
	return ob_get_clean();
}


/**
 * Function that builds out a button.
 *
 * @param [string] $text is the text of the button.
 * @param [string] $class is the class of the button.
 * @param [string] $id is the id of the button.
 * @return HTML returns the markup for a button.
 */
function button( $text, $class = '', $id = '' ) {
	ob_start();
	?>
	<button class="button <?php echo esc_attr( $class ); ?>" <?php echo $id ? esc_attr( sprintf( 'id=%s', $id ) ) : null; ?>>
		<span class="button-corner button-corner--top-right"></span>
		<span class="button-corner button-corner--top-left"></span>
		<span class="button-text"><?php echo esc_html( $text ); ?></span>
		<span class="button-corner button-corner--bottom-left"></span>
		<span class="button-corner button-corner--bottom-right"></span>
	</button>
	<?php
	return ob_get_clean();
}

/**
 * Function that pull the form titles with gravity forms api class.
 *
 * @return ARRAY returns an array of the form titles.
 */
function get_form_titles() {
	$forms = GFAPI::get_forms();
	$items  = [];

	foreach ( $forms as $form ) :
		$items += array( $form['title'] => $form['title'] );
	endforeach;
	return $items;
}