<?php

namespace ATU\Theme\Customizer;


use WP_Customize_Manager;
use WP_Customize_Media_Control;
use ATU\Theme\Views;

use Customizer_Repeater;

const ABOUT_PANEL = 'atu_about';

/**
 * Sets up all customizer integrations
 *
 * @uses add_action()
 */
function about_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\about_panel' );
	add_action( 'customize_register', __NAMESPACE__ . '\about_intro' );
	// add_action( 'customize_register', __NAMESPACE__ . '\about_stats' );
	add_action( 'customize_register', __NAMESPACE__ . '\about_list' );
}

/**
 * Create About Panel
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function about_panel( WP_Customize_Manager $manager ) {
	$manager->add_panel( ABOUT_PANEL, [
		'title' => esc_html__( 'About Settings', 'atu' ),
	] );
}

/**
 * Creates about page settings and controls for the two coumn module.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function about_intro( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'about_intro_section', [
		'title' => esc_html__( 'About Into', 'atu' ),
		'panel' => ABOUT_PANEL,
	]);

	$manager->add_setting( 'about_intro_settings[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_intro_settings[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'about_intro_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_intro_settings[heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_intro_settings[heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'about_intro_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_intro_settings[text]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( 'about_intro_settings[text]', [
		'label'   => esc_html__( 'Text', 'atu' ),
		'section' => 'about_intro_section',
		'type'    => 'textarea',
	]);
}

/**
 * Creates about page settings and controls for the about lists.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function about_list( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'about_list_section', [
		'title' => esc_html__( 'About Lists', 'atu' ),
		'panel' => ABOUT_PANEL,
	]);

	$manager->add_setting( 'about_lists_settings[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_lists_settings[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'about_list_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_lists_settings[heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_lists_settings[heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'about_list_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_lists_settings_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));

    $manager->add_control( new Customizer_Repeater( $manager, 'about_lists_settings_repeater', array(
        'label'   => esc_html__( 'About List','atu' ),
        'section' => 'about_list_section',
        'controls' => [
            [
                'type'  =>  'text',
                'label' =>  esc_html__( 'Heading', 'atu' ),
                'id'    =>  'heading'
			],
			[
                'type'  =>  'text',
                'label' =>  esc_html__( 'Text', 'atu' ),
                'id'    =>  'text'
            ],
        ]
    ) ) );


}