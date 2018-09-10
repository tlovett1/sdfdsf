<?php
/**
 * View file for the about list section.
 *
 * @package atu-theme
 */

namespace ATU\Theme\Views;

use ATU\Theme\Helpers;

/**
 * Builds the about list.
 *
 * @return HTML returns the markup for the about list.
 */
function build_about_list() {
	$lists = get_customizer_values( 'about_lists_settings_repeater' );

	if ( empty( $lists ) ) {
		return false;
	}

	ob_start(); ?>
	<ul class="about-lists">
		<?php
		foreach ( $lists as $list_item ) :
			?>
			<li class="about-list-item">
				<?php if ( Helpers\value_exists( $list_item, 'heading' ) ) : ?>
					<span class="about-list-heading">
						<?php echo esc_html( $list_item['heading'] ) ; ?>
					</span>
					<?php
				endif;
if ( Helpers\value_exists( $list_item, 'text' ) ) :
	?>
					<p class="about-list-text">
						<?php echo esc_html( $list_item['text'] ); ?>
					</p>
				<?php endif; ?>
			</li>
			<?php
		endforeach;
		?>
	</ul>
	<?php
	return ob_get_clean();
}
