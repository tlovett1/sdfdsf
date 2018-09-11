<?php
/**
 * Partial file for the modal form.
 *
 * @package atu-theme
 */

use ATU\Theme\Helpers;

$settings = get_theme_mod( 'form_settings' );
?>

<div id="modal" class="modal form">
	<div class="close">
		<button id="modalClose" class="modal-close">
			<?php echo Helpers\inline_svg( 'close' ); ?>
		</button>
	</div>
	<div class="modal-wrapper">
		<div class="modal-content-wrapper">
			<div class="modal-container">
				<div id="modalContent" class="modal-content">
				<div class="form-intro">
					<div class="section-intro">
						<div class="heading-container">
							<?php echo Helpers\heading( $settings['subheading'], $settings['heading'], 'contactSubHeading', 'contactHeading' ); ?>
						</div>
					</div>
					<?php if ( Helpers\value_exists( $settings, 'description' ) ) : ?>
						<p class="section-description">
							<?php echo esc_html( $settings['description'] ); ?>
						</p>
					<?php endif; ?>
				</div>
					<?php
					if ( Helpers\value_exists( $settings, 'title' ) ) :
						echo gravity_form( $settings['title'], false, false, false, '', true, 0, false );
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div
