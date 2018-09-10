<?php
    $settings = get_theme_mod('events_list_settings');
    use ATU\Theme\Helpers;
    use ATU\Theme\Views;

    ?>

<div class="heading-container">
	<?php echo Helpers\heading($settings['subheading'], $settings['heading'], 'eventsListSubHeading', 'eventsListHeading') ?>
</div>
