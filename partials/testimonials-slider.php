
<?php
	$settings = get_theme_mod( 'testimonials_settings' );
	$slider = get_customizer_values( 'testimonials_settings_repeater' );

	use ATU\Theme\Helpers;
	use ATU\Theme\Views;

	if ( !empty( $slider ) ) :
?>
<div id="testimonalsSliderWrapper" class="testimonials-section section">
	<?php
	if ( Helpers\value_exists( $settings, 'heading' ) ) : ?>
		<div class="testimonials-section-heading">
			<div class="heading-container">
				<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'testimonialsSubHeading', 'testimonialsHeading', 'white') ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="testimonials-slider-wrapper">
		<button class="prev">
			<span class="dashed-circle"><?php echo Helpers\inline_svg('dashed-circle'); ?></span>
			<span class="arrow"><?php echo Helpers\inline_svg('arrow'); ?></span>
		</button>
		<?php echo Views\build_testimonials_slider();?>
		<button class="next">
			<span class="dashed-circle"><?php echo Helpers\inline_svg('dashed-circle'); ?></span>
			<span class="arrow"><?php echo Helpers\inline_svg('arrow'); ?></span>
		</button>
	</div>
</div>
<?php endif; ?>