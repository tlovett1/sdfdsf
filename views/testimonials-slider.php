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
function build_testimonials_slide($testimonial)
{
    ob_start(); ?>
	<li class="testimonials-slider-item">
		<?php echo Helpers\inline_svg('quotes');
    if (Helpers\value_exists($testimonial, 'text')) : ?>
			<blockquote class="testimonial">
				<?php echo esc_html($testimonial['text']); ?>
			</blockquote>
		<?php endif;
    if (Helpers\value_exists($testimonial, 'citation')) :  ?>
			<cite class="testimonial-citation"><?php echo esc_html($testimonial['citation']); ?></cite>
		<?php endif; ?>
		<?php echo Helpers\inline_svg('quotes'); ?>
	</li>
	<?php return ob_get_clean();
}

/**
 * Builds out the hero slider.
 *
 * @return HTML return the mark up for thr hero slider.
 */
function build_testimonials_slider()
{
    $testimonials = get_customizer_values('testimonials_settings_repeater');

    if (empty($testimonials)) {
        return false;
    }
    ob_start(); ?>
	<ul id="testimonalsSlider" class="testimonials-slider">
	<?php
        foreach ($testimonials as $testimonial) :
            echo build_testimonials_slide($testimonial);
    endforeach; ?>
	</ul>
	<?php return ob_get_clean();
}
