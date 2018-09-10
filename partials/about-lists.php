<?php
	$settings = get_theme_mod( 'about_lists_settings' );
	use ATU\Theme\Helpers;
	use ATU\Theme\Views;

?>
<div class="about-list-section section"  style="background-image:url(<?php echo esc_url( wp_get_attachment_url( $settings['image'] ) ? wp_get_attachment_url( $settings['image'] ) : null );?>)">
	<div class="about-lists-container container" data-aos="fade-up"  data-aos-duration="3000">
		<?php echo Views\build_about_list(); ?>
		<div class="about-section-intro">
			<div class="heading-container">
				<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'aboutListsSubHeading', 'aboutListsHeading', 'white') ?>
			</div>
			<?php echo Helpers\button( 'Get Started Now', 'white form-button') ?>
		</div>
	</div>
</div>


