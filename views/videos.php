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
 * Builds the video item.
 *
 * @param [array] $video array containing all of the data.
 * @return HTML returns the markup for the video item.
 */
function build_video( $video ) {
	$image = wp_get_attachment_image_url( $video['image'], 'video-image' );
	ob_start(); ?>
	<li class="video-item">
		<div class="video-image" style="background-image:url( <?php echo esc_attr( $image ); ?> )">
			<?php echo Helpers\inline_svg( 'play' ); ?>
		</div>
		<div class="video-info">
			<span class="video-meta">
				<?php if ( Helpers\value_exists( $video['date'] ) ) :  ?>
					<span class="video-date">
						<?php echo esc_html( $video['date'] ); ?>
					</span>
				<?php endif; ?>
				<span class="video-tag">
					Video
				</span>
			</span>
			<?php if ( Helpers\value_exists( $video['title'] ) ) : ?>
				<h4 class="video-title">
					<?php echo esc_html( $video['title'] ); ?>
				</h4>
			<?php endif; ?>
		</div>
		<?php if ( Helpers\value_exists( $video['url'] ) ) : ?>
			<div class="video-modal">
				<?php echo wp_oembed_get( $video['url'], array( 'autoplay' => 1 ) ); ?>
			</div>
		<?php endif; ?>
	</li>
	<?php
	return ob_get_clean();
}

/**
 * Builds the video list.
 *
 * @return HTML returns the markup for the video item.
 */
function build_videos() {
	$videos = Cache\get_videos();

	if ( empty( $videos ) ) {
		return false;
	}

	ob_start(); ?>

	<ul class="video-lists">
		<?php
		foreach ( $videos as $video ) :
			echo build_video( $video );
		endforeach;
		?>
	</ul>
	<?php
	return ob_get_clean();
}
