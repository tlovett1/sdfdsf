<?php
	$settings = get_theme_mod( 'events_intro_settings' );
	use ATU\Theme\Helpers;
	use ATU\Theme\Views;
?>

<div class="section-intro">
	<div class="heading-container-border heading-container-border--image">
		<?php
		echo wp_kses_post( Helpers\heading( $settings['subheading'], '', 'eventsIntroSubHeading', '', '', $settings['image'] ) );
		?>
	</div>
	<p id="eventsIntroText" class="text">
		<?php
		if ( wp_kses_post( Helpers\value_exists( $settings, 'text' ) ) ) :
			echo wp_kses_post( $settings['text'] );
		endif;
		?>
	</p>
</div>
