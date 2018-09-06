<?php

namespace ATU\Theme\Customizer;


use WP_Customize_Manager;
use WP_Customize_Media_Control;
use ATU\Theme\Views;

use Customizer_Repeater;

const EVENTS_PANEL = 'atu_events';

/**
 * Sets up all customizer integrations
 *
 * @uses add_action()
 */
function events_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\events_panel' );
	add_action( 'customize_register', __NAMESPACE__ . '\events_intro' );
	add_action( 'customize_register', __NAMESPACE__ . '\events_slider' );
}

/**
 * Create events Panel
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function events_panel( WP_Customize_Manager $manager ) {
	$manager->add_panel( EVENTS_PANEL, [
		'title' => esc_html__( 'Events Settings', 'atu' ),
	] );
}

/**
 * Creates events page settings and controls for the Events Intro Section.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function events_intro( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'events_intro_section', [
		'title' => esc_html__( 'Events Into', 'atu' ),
		'panel' => EVENTS_PANEL,
	]);

	$manager->add_setting( 'events_intro_settings[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'events_intro_settings[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'events_intro_section',
		'type'    => 'text',
	]);

	$manager->add_setting('events_intro_settings[image]', [
		'type' => 'theme_mod',
		]
	);

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'events_intro_settings[image]',
			array(
				'label'    => esc_html( 'Upload Image', 'atu' ),
				'section'  => 'events_intro_section',
				'settings' => 'events_intro_settings[image]',
			)
		)
	);

	$manager->add_setting( 'events_intro_settings[text]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( 'events_intro_settings[text]', [
		'label'   => esc_html__( 'Text', 'atu' ),
		'section' => 'events_intro_section',
		'type'    => 'textarea',
	]);

	$manager->add_setting( 'events_lists_settings_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));

    $manager->add_control( new Customizer_Repeater( $manager, 'events_lists_settings_repeater', array(
        'label'   => esc_html__( 'Events List','atu' ),
        'section' => 'events_intro_section',
        'controls' => [
			[
                'type'  =>  'text',
                'label' =>  esc_html__( 'Text', 'atu' ),
                'id'    =>  'text'
            ],
        ]
    ) ) );
}

/**
 * Creates events page settings and controls for the events lists.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function events_slider( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'events_slider_section', [
		'title' => esc_html__( 'Events Slider', 'atu' ),
		'panel' => EVENTS_PANEL,
	]);

	$manager->add_setting( 'events_slider_settings_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));

    $manager->add_control( new Customizer_Repeater( $manager, 'events_slider_settings_repeater', array(
        'label'   => esc_html__( 'events List','atu' ),
        'section' => 'events_slider_section',
        'controls' => [
			[
				'type'           => 'image',
				'label'          => esc_html__( 'Slide Image', 'atu' ),
				'id'             => 'image',
				'description'    => esc_html__( 'Upload or Select the image
				file you want to display on your slide. Dimensions for images  930 × 762.', 'atu' ),
				'upload_button'  => esc_html__( 'Upload File' ),
				'remove_button'  => esc_html__( 'Remove File' ),
				'replace_button' => esc_html__( 'Replace File' ),
			],
        ]
    ) ) );
}