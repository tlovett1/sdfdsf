<?php
/**
 * View file for the Events Intro Section.
 *
 * @package atu-theme
 */

namespace ATU\Theme\Views;

use ATU\Theme\Helpers;
use ATU\Theme\Cache;

/**
 * Builds out the Events Intro List.
 *
 * @return HTML return the mark up for the Events Intro List.
 */
function build_events_intro_list()
{
    $lists = get_customizer_values('events_lists_settings_repeater');

    if (empty($lists)) {
        return false;
    }
    ob_start(); ?>
	<ul class="events-intro-list">
		<?php foreach ($lists as $listItem) : ?>
			<li class="events-intro-list-item"><?php echo esc_html($listItem['text']); ?></li>
		<?php endforeach; ?>
	</ul>
	<?php
    return ob_get_clean();
}
