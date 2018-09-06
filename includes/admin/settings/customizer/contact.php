<?php

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
function contact_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\contact' );
}

/**
 * Creates contact page settings and controls for the contact Intro Section.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function contact( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'contact_section', [
		'title' => esc_html__( 'Contact', 'atu' ),
	]);

	$manager->add_setting( 'contact_settings[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'contact_settings[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'contact_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'contact_settings[heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'contact_settings[heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'contact_section',
		'type'    => 'text',
	]);


	$manager->add_setting( 'contact_settings[description]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( 'contact_settings[description]', [
		'label'   => esc_html__( 'Text', 'atu' ),
		'section' => 'contact_section',
		'type'    => 'textarea',
	]);

	$manager->add_setting( 'contact_settings_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));

    $manager->add_control( new Customizer_Repeater( $manager, 'contact_settings_repeater', array(
        'label'   => esc_html__( 'Contact','atu' ),
		'section' => 'contact_section',
		'max'     => 3,
        'controls' => [
			[
                'type'  =>  'text',
                'label' =>  esc_html__( 'Heading', 'atu' ),
                'id'    =>  'heading'
			],
			[
                'type'  =>  'textarea',
                'label' =>  esc_html__( 'Address', 'atu' ),
                'id'    =>  'address'
			],
			[
                'type'  =>  'text',
                'label' =>  esc_html__( 'Phone Number', 'atu' ),
                'id'    =>  'phone'
			],
			[
                'type'  =>  'text',
                'label' =>  esc_html__( 'Email', 'atu' ),
                'id'    =>  'email'
            ],
        ]
    ) ) );
}
