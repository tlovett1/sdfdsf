<?php
/**
 * View file for the social menu list
 *
 * @package atu-theme
 */

namespace ATU\Theme\Views;

use ATU\Theme\Helpers;


/**
 * An array of the social sites and their names.
 *
 * @return array Returns an array of social social sites and their names
 */
function atu_social_array() {
	$social_sites = array(
		'facebook'  => 'atu_facebook_profile',
		'twitter'   => 'atu_twitter_profile',
		'instagram' => 'atu_instagram_profile',
		'linkedin'  => 'atu_linkedin_profile',
	);

	return apply_filters( 'atu_social_array', $social_sites );
}

/**
 * Uses the $key name that gets passed in to find the correct url needed.
 *
 * @param [string] $username is the name of the clients social account.
 * @param [string] $key is the key name of the social site you want to use.
 * @return string Returns a url for the matching social name with the correct username.
 */
function get_profile_url( $username, $key ) {
	switch ($key) {
		case 'twitter':
			return sprintf( 'https://twitter.com/%s', esc_attr( $username ) );
		case 'facebook':
			return sprintf( 'https://www.facebook.com/%s', esc_attr( $username ) );
		case 'instagram':
			return sprintf( 'https://www.instagram.com/%s', esc_attr( $username ) );
		case 'linkedin':
			return sprintf( 'https://www.linkedin.com/company/%s', esc_attr( $username ) );
	}
}

/**
 * Builds out the social menu list.
 *
 * @return HTML Returns HTML for the social menu list/
 */
function my_social_icons_output() {
	$social_sites = atu_social_array();

	ob_start(); ?>
	<div class="social-icons">
		<span class="social-label">Follow:</span>
		<ul class="social-icons-list">
			<?php
			foreach ( $social_sites as $social_site => $profile ) {
				$is_active = get_theme_mod( $social_site );
				if ( ! empty( $is_active ) ) {
					?>
					<li class="social-icon-item">
						<a class="<?php echo esc_attr( $social_site ); ?> social-icon-link" target="_blank" href="<?php echo esc_url( get_profile_url( $is_active, $social_site ) ); ?>">
							<?php echo Helpers\inline_svg( $social_site ); ?>
						</a>
					</li>
					<?php
				}
			}
			?>
		</ul>
	</div>

	<?php
	return ob_get_clean();
}
