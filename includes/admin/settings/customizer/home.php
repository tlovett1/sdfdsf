<?php
/**
 * File contains the home page customizer controls;
 *
 * @package atu-theme
 */

namespace ATU\Theme\Customizer;

use WP_Customize_Manager;
use WP_Customize_Media_Control;
use ATU\Theme\Views;

use Customizer_Repeater;

/**
 * Sets up all customizer integrations
 *
 * @uses add_action()
 */
function setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\remove_front_page_panel' );
	add_action( 'customize_register', __NAMESPACE__ . '\theme_logo' );
}


/**
 * Removes the front page panel.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 **/
function remove_front_page_panel( WP_Customize_Manager $manager ) {
	$manager->remove_section( 'static_front_page' );
}

/**
 * Create Logo Setting and Upload Control
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function theme_logo( WP_Customize_Manager $manager ) {
	$manager->add_setting(
		'atu_logo_setting',
		[
			'type' => 'theme_mod',
		]
	);

	$manager->add_control(
		new WP_Customize_Media_Control(
			$manager,
			'atu_logo_setting',
			array(
				'label'    => esc_html( 'Upload Logo', 'atu' ),
				'section'  => 'title_tagline',
				'settings' => 'atu_logo_setting',
			)
		)
	);
}
