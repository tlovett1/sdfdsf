<?php
	$settings = get_theme_mod( 'contact_settings' );
	use ATU\Theme\Helpers;
?>

<div class="contact-intro">
	<div class="section-intro">
		<div class="heading-container">
			<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'contactSubHeading', 'contactHeading') ?>
		</div>
	</div>
	<?php if ( Helpers\value_exists( $settings, 'description' ) ) : ?>
		<p class="section-description">
			<?php echo esc_html( $settings['description'] ); ?>
		</p>
	<?php endif; ?>
</div>