<?php
/**
 * View file for the Contact Section.
 *
 * @package atu-theme
 */

namespace ATU\Theme\Views;

use ATU\Theme\Helpers;

/**
 * Builds out the phone number.
 *
 * @param [string] $value phone number string.
 * @return Boolean checks to see if its a real number.
 */
function is_phone( $value ) {
	return preg_match( '%^[+]?[0-9()/ -]*$%', $value );
}

/**
 * Builds out the contact link
 *
 * @param [string] $value email string.
 * @return String returns the contact link
 */
function build_contact_link( $value ) {
	if ( is_email( $value ) ) :
		return sprintf( 'mailto:%s', $value ); elseif ( is_phone( $value ) ):
			return sprintf( 'tel:%s', $value ); else :
				return $value;
	endif;
}

/**
 * Builds out the contact section
 *
 * @return HTML returns contact section html.
 */
function build_contact_row() {
	$settings = get_customizer_values( 'contact_settings_repeater' );

	if ( empty( $settings ) ) {
		return false;
	}

	ob_start(); ?>

	<div class="contact-row">
		<?php
		foreach ( $settings as $setting ) :
			?>
			<div class="contact-item">
				<?php
				if ( Helpers\value_exists( $setting, 'heading' ) ) :
					?>
					<h3 class="contact-heading">
						<?php
						echo esc_html( $setting['heading'] );
						?>
					</h3>
					<?php
					endif;
				if ( Helpers\value_exists( $setting, 'address' ) ) :
					?>
					<address class="contact-address">
					<?php
					echo esc_html( $setting['address'] );
					?>
					</address>
					<?php
				endif;
				if ( Helpers\value_exists( $setting, 'phone' ) ) :
					?>
					<a class="contact-link contact-phone" href="<?php echo esc_url( build_contact_link( $setting['phone'] ) ); ?>">
						<?php
						echo Helpers\inline_svg( 'phone' );
							echo esc_html( $setting['phone'] );
						?>
					</a>
					<?php
					endif;
				if ( Helpers\value_exists( $setting, 'email' ) ) :
					?>
					<a class="contact-link contact-email" href="<?php echo esc_url( build_contact_link( $setting['email'] ) ); ?>">
						<?php
						echo Helpers\inline_svg( 'email' );
						echo esc_html( $setting['email'] ) ;
						?>
					</a>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
	return ob_get_clean();
}
