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
 * Builds the slide item.
 *
 * @param [array] $slide array containing all of the data.
 * @return HTML returns the markup for the slide.
 */
function build_partner_slide( $partner ) {
	ob_start();

	?>
	<li class="footer-slider-item-wrapper">
		<?php
			if (Helpers\value_exists( $partner, 'image' ) ) :
		?>
			<a href="<?php echo esc_attr(  $partner['url'] ); ?>" class="footer-slider-item">
				<img src="<?php echo esc_attr(  $partner['image'] ); ?>" alt="<?php echo esc_attr(  $partner['title'] ); ?>"/>
			</a>
		<?php endif; ?>
	</li>
	<?php
	return ob_get_clean();
}

/**
 * Builds out the hero slider.
 *
 * @return HTML return the mark up for thr hero slider.
 */
function build_footer_slider() {

	$partners = get_currated_values(
		'footer_settings_curation', function( $post ) {
			return Cache\get_partners_meta( $post->id );
		}
	);

	if ( empty( $partners ) ) {
		return false;
	}
	ob_start();
	?>
	<div class="footer-slider-wrapper">
		<span class="prev">
			<?php echo Helpers\inline_svg( 'caret' ); ?>
		</span>
			<ul id="footerSlider" class="footer-slider">
				<?php
				foreach ( $partners as $partner ) :
					echo build_partner_slide( $partner );
				endforeach;
				?>
			</ul>
		<span class="next">
			<?php echo Helpers\inline_svg( 'caret' ); ?>
		</span>
	</div>
	<?php
	return ob_get_clean();
}
