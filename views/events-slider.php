<?php
/**
 * View file for the footer slider.
 *
 * @package atu-theme
 */

namespace ATU\Theme\Views;

use ATU\Theme\Helpers;
use ATU\Theme\Cache;


/**
 * Builds out the hero slider.
 *
 * @return HTML return the mark up for thr hero slider.
 */
function build_events_slider() {

	$images = get_customizer_values( 'events_slider_settings_repeater' );

	if ( empty( $images ) ) {
		return false;
	}

	ob_start();
	?>
	<div id="eventsSliderWrapper" class="events-slider-wrapper" data-ride='carousel'>
		<ul id="eventsSlider" class="events-slider">
		<?php foreach ( $images as $image ) :
			$url = wp_get_attachment_image_src( $image['image'], 'event-slider' )[0]; ?>
			<li class="events-slide">
				<span class="event-slider-image-wrapper">
					<img src="<?php echo esc_attr( $url );?>" alt="Events" />
				</span>
			</li>
		<?php endforeach; ?>
		</ul>
		<div class="events-slider-arrows">
			<button class="prev">
				<?php echo Helpers\inline_svg('arrow');?>
			</button>
			<button class="next">
				<?php echo Helpers\inline_svg('arrow');?>
			</button>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
