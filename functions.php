<?php
/**
 * Develop With WP functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Develop With WP
 * @since 0.1.0
 * 
 * 
 */


use ATU\Theme\Core;
use ATU\Theme\Customizer;
use ATU\Theme\Settings;
use ATU\Theme\Metaboxes;


// Useful global constants.
define( 'ATU_VERSION', '1.0.0' );
define( 'ATU_URL', get_stylesheet_directory_uri() );
define( 'ATU_TEMPLATE_URL', get_template_directory_uri() );
define( 'ATU_PATH', get_template_directory() . '/' );
define( 'ATU_INC', ATU_PATH . 'includes/' );

if ( file_exists( ATU_PATH . 'vendor/autoload.php' ) ) {
	require ATU_PATH . 'vendor/autoload.php';

	\AaronHolbrook\Autoload\autoload( ATU_INC );
	\AaronHolbrook\Autoload\autoload( ATU_PATH . 'views' );

	// Run the setup functions.
	ATU\Theme\Core\setup();
	Metaboxes\partners_setup();
	Customizer\setup();
	Customizer\social_page_setup();
	Customizer\footer_setup();
}