<?php
/**
 * Partial file for the hero section
 *
 * @package atu-theme
 */

	use ATU\Theme\Helpers;
	use ATU\Theme\Views;

	$slide1 = get_theme_mod( 'hero_settings_slide1' );
	$slide2 = get_theme_mod( 'hero_settings_slide2' );
?>

<div class="hero">
	<div class="hero-slider-container">
		<div class="hero-slide comparison-image" style="background-image:url(<?php echo esc_url( wp_get_attachment_url( $slide1['image'] ) ); ?>)">
			<div class="container" data-aos="fade-up"  data-aos-duration="3000" data-aos-offset="300">
				<div class="heading-container">
					<?php echo Helpers\heading( $slide1['subheading'], $slide1['heading'], 'slide1SubHeading', 'slide1Heading', 'white' ); ?>
				</div>
				<?php echo Helpers\button( 'Get Started Now', 'white form-button' ) ?>
			</div>
		</div>
		<div class="hero-slide comparison-image"  style="background-image:url(<?php echo esc_url( wp_get_attachment_url( $slide2['image'] ) ); ?>)">
			<div class="container" data-aos="fade-up"  data-aos-duration="3000" data-aos-offset="300">
				<div class="heading-container">
					<?php echo Helpers\heading( $slide2['subheading'], $slide2['heading'], 'slide2SubHeading', 'slide2Heading', 'white' ); ?>
				</div>
				<?php echo Helpers\button( 'Get Started Now', 'white form-button' ); ?>
			</div>
		</div>
	</div>
</div>

