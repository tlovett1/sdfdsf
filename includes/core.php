<?php
namespace ATU\Theme\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @since 0.1.0
 *
 * @uses add_action()
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $n( 'i18n' ) );
	add_action( 'admin_enqueue_scripts', $n( 'admin_scripts' ) );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' ) );
	add_action( 'customize_controls_enqueue_scripts', $n( 'enqueue_customizer_scripts' ) );
	add_action( 'customize_preview_init', $n( 'atu_theme_customizer_live_preview' ) );
	add_image_size( 'event-slider', 930, 762 );
	add_image_size( 'video-image', 340, 340 );
	add_image_size( 'about-stat1', 725, 597 );
	add_image_size( 'about-stat2', 416, 539 );
	add_image_size( 'about-stat3', 454, 539 );
	add_image_size( 'hero-image', 1436, 900 );
}

/**
 * Loads all JS, CSS, Fonts asset for the site. Also handles localizing all the
 * data for the React Frontend.
 *
 * @return void
 */
function scripts() {
	wp_enqueue_script(
		'atu_theme-js',
		get_stylesheet_directory_uri() . '/dist/frontend.bundle.js',
		array('jquery'),
		ATU_VERSION,
		true
	);

	wp_enqueue_style(
		'atu_theme-css',
		get_stylesheet_directory_uri() . '/dist/frontend.bundle.css',
		array(),
		ATU_VERSION
	);

	wp_enqueue_style(
		'wpb-google-fonts',
		'https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400,700',
		array(),
		ATU_VERSION
	);

	wp_localize_script(
		'atu_theme-js',
		'ATU',
		[
			'siteUrl' => site_url(),
		]
	);

	wp_enqueue_script(
		'slick-js',
		ATU_TEMPLATE_URL . '/assets/js/vendor/slick.min.js',
		array( 'jquery' ),
		ATU_VERSION,
		true
	);

	wp_enqueue_style(
		'slick-css',
		ATU_URL . '/assets/css/vendor/slick.css',
		array(),
		ATU_VERSION
	);

	wp_enqueue_style(
		'imageComparison-css',
		ATU_URL . '/assets/css/vendor/imageComparison.css',
		array(),
		ATU_VERSION
	);

	function enqueue_customizer_scripts() {
		wp_enqueue_script(
			'atu_theme-customizer',
			ATU_TEMPLATE_URL . '/assets/js/src/admin/customizer.js',
			array(),
			ATU_VERSION,
			true
		);
	}
	
	function atu_theme_customizer_live_preview() {
		wp_enqueue_script(
			'atu-customizer',
			ATU_TEMPLATE_URL . '/dist/admin.bundle.js',
			array( 'jquery', 'customize-preview' ),
			ATU_VERSION,
			true
		);
	}
}

/**
 * Makes WP Theme available for translation.
 *
 * Translations can be added to the /lang directory.
 * If you're building a theme based on WP Theme, use a find and replace
 * to change 'wptheme' to the name of your theme in all template files.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since 0.1.0
 *
 * @return void
 */
function i18n() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	register_nav_menu( 'header-left', esc_html__( 'Header Left Menu' ) );
	register_nav_menu( 'header-right', esc_html__( 'Header Right Menu' ) );
}

/**
 * Loads all admin CSS and JS files needed for this theme.
 *
 * @return void
 */
function admin_scripts() {
	wp_enqueue_script(
		'atu_theme-admin',
		ATU_TEMPLATE_URL . '/dist/admin.bundle.js',
		array(),
		ATU_VERSION,
		true
	);

	wp_localize_script(
		'atu_theme-admin',
		'atu',
		[
			'siteUrl' => site_url(),
		]
	);
}
