<?php
/**
 * File contains for the media section customizer controls;
 *
 * @package atu-theme
 */

namespace ATU\Theme\Customizer;

use WP_Customize_Manager;
use WP_Customize_Media_Control;
use ATU\Theme\Views;

/**
 * Sets up all customizer integrations
 *
 * @uses add_action()
 */
function media_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\media' );
}

/**
 * Creates media page settings and controls for the Media Section.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function media( WP_Customize_Manager $manager ) {
	$manager->add_section(
		'media_section',
		[
			'title'    => esc_html__( 'Media', 'atu' ),
			'priority' => 40,
		]
	);

	$manager->add_setting(
		'media_settings[subheading]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'media_settings[subheading]',
		[
			'label'   => esc_html__( 'Sub Heading', 'atu' ),
			'section' => 'media_section',
			'type'    => 'text',
		]
	);

	$manager->add_setting(
		'media_settings[heading]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'media_settings[heading]',
		[
			'label'   => esc_html__( 'Heading', 'atu' ),
			'section' => 'media_section',
			'type'    => 'text',
		]
	);
}
