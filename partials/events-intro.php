<?php
/**
 * Partial file for the events
 *
 * @package atu-theme
 */

$settings = get_theme_mod( 'events_intro_settings' );
use ATU\Theme\Helpers;
use ATU\Theme\Views;
?>

<div class="section-intro">
	<div class="triangle"></div>
	<div class="heading-container-border heading-container-border--image">
		<?php
		echo Helpers\heading( $settings['subheading'], '', 'eventsIntroSubHeading', '', '', $settings['image'] );
		?>
	</div>
	<p id="eventsIntroText" class="text">
		<?php
		if ( Helpers\value_exists( $settings, 'text' ) ) :
			echo esc_html( $settings['text'] );
		endif;
		?>
	</p>
</div>
