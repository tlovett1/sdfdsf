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
 * Builds out the Events Itemt.
 *
 * @return HTML return the mark up for the Events Intro List.
 */
function build_events_item($event) {

	if ( empty( $event ) ) {
		return false;
	}
	ob_start();
	?>
	<li class="">
	</li>
	<?php
	return ob_get_clean();
}


/**
 * Builds out the Events List.
 *
 * @return HTML return the mark up for the Events Intro List.
 */
function build_events_list() {

	$events = get_currated_values(
		'events_list_curation', function( $post ) {
			return Cache\get_events_meta( $post->id );
		}
	);

	if ( empty( $events ) ) {
		return false;
	}
	ob_start();
	?>
	<ul>
		<?php foreach ( $events as $event ) : 
			echo '<pre>';
			print_r($event);
			echo '</pre>';
		endforeach; ?>
	</ul>
	<?php
	return ob_get_clean();
}
