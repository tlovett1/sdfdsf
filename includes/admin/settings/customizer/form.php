<?php
/**
 * File contains the the form customizer controls;
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
function form_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\form' );
}

/**
 * Creates form page settings and controls for the form Section.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function form( WP_Customize_Manager $manager ) {
	$manager->add_section(
		'form_section',
		[
			'title' => esc_html__( 'Form', 'atu' ),
		]
	);

	$manager->add_setting(
		'form_settings[subheading]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'form_settings[subheading]',
		[
			'label'   => esc_html__( 'Sub Heading', 'atu' ),
			'section' => 'form_section',
			'type'    => 'text',
		]
	);

	$manager->add_setting(
		'form_settings[heading]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'form_settings[heading]',
		[
			'label'   => esc_html__( 'Heading', 'atu' ),
			'section' => 'form_section',
			'type'    => 'text',
		]
	);

	$manager->add_setting(
		'form_settings[description]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'form_settings[description]',
		[
			'label'   => esc_html__( 'Form Description', 'atu' ),
			'section' => 'form_section',
			'type'    => 'textarea',
		]
	);

	$manager->add_setting(
		'form_settings[id]',
		[
			'type'      => 'theme_mod',
			'transport' => 'postMessage',
		]
	);

	$manager->add_control(
		'form_settings[id]',
		[
			'label'   => esc_html__( 'Form Id', 'atu' ),
			'section' => 'form_section',
			'type'    => 'text',
		]
	);
}
