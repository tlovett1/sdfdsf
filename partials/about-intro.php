<?php
	$settings = get_theme_mod( 'about_intro_settings' );
	use ATU\Theme\Helpers;
?>

<div class="container">
	<div class="section-intro">
		<div class="heading-container-border">
			<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'aboutIntroSubHeading', 'aboutIntroHeading') ?>
		</div>
		<p  id="aboutIntroText" class="text">
			<?php if ( Helpers\value_exists( $settings, 'text' ) ) :
			echo esc_html( $settings['text'] );
			endif; ?>
		</p>
	</div>
	<button class="button about-button">
		<span class="button-corner button-corner--top-right"></span>
		<span class="button-corner button-corner--top-left"></span>
		<span class="button-text">Apply</span>
		<span class="button-corner button-corner--bottom-left"></span>
		<span class="button-corner button-corner--bottom-right"></span>
	</button>
</div>