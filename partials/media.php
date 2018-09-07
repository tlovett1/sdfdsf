<?php
	$settings = get_theme_mod( 'media_settings' );
	use ATU\Theme\Helpers;
	use ATU\Theme\Views;
?>

<div class="container">
	<div class="heading-container">
		<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'mediaSubHeading', 'mediaHeading', 'white') ?>
	</div>
</div>