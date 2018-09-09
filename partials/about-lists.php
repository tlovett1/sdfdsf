<?php
	$settings = get_theme_mod( 'about_lists_settings' );
	use ATU\Theme\Helpers;
	use ATU\Theme\Views;
?>

<?php 
echo Views\build_about_list();
?>
<div class="about-section-intro">
	<div class="heading-container">
		<?php echo Helpers\heading( $settings['subheading'], $settings['heading'],  'aboutListsSubHeading', 'aboutListsHeading', 'white') ?>
	</div>
	<?php echo Helpers\button( 'Get Started Now', 'white form-button') ?>
</div>