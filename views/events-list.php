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
 * @param [array] $event array containing all of the data.
 * @param [int]   $index is the int of the item from the foreach.
 * @return HTML return the mark up for the Events List Item.
 */
function build_events_item( $event, $index ) {
	$index += 1;

	if ( empty( $event ) ) {
		return false;
	}

	ob_start(); ?>
	<li class="event-list-item">
		<?php
		echo Helpers\inline_svg( sprintf( 'events%s', esc_attr( $index ) ) );
		?>
		<h4 class="event-title">
			<?php echo esc_html( $event['title'] ); ?>
		</h4>
		<span class="event-info">
			<?php
				echo Helpers\inline_svg( 'pin' );
				echo esc_html( $event['location'] ); ?>
		</span>
		<span class="event-info">
			<?php
				echo Helpers\inline_svg( 'calendar' );
				echo esc_html( $event['date'] );
			?>
		</span>
	</li>
	<?php
	return ob_get_clean();
}


/**
 * Builds out the Events List.
 *
 * @return HTML return the mark up for the Events  List.
 */
function build_events_list() {
	$events = get_currated_values(
		'events_list_curation',
		function( $post ) {
			return Cache\get_events_meta( $post->id );
		}
	);

	if ( empty( $events ) ) {
		return false;
	}
	ob_start();
	?>
	<ul class="events-list">
		<?php
		foreach ( $events as $key => $event ) :
			echo build_events_item( $event, $key );
	endforeach;
		?>
	</ul>
	<?php
	return ob_get_clean();
}
