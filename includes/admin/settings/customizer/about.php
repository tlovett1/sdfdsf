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
	add_action( 'customize_register', __NAMESPACE__ . '\about_stats' );
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
 * Creates about page settings and controls for the two coumn module.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function about_stats( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'about_stats_section', [
		'title' => esc_html__( 'About Stats', 'atu' ),
		'panel' => ABOUT_PANEL,
	]);

	$manager->add_setting( 'about_stats[stat1][image]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'about_stats[stat1][image]', [
		'label'       => esc_html__( 'Image', 'atu' ),
		'section'     => 'about_stats_section',
		'settings'    => 'about_stats[stat1][image]',
		'description' => esc_html__( 'Select or Upload the image you wish to display.', 'atu' ),
	] ) );

	$manager->add_setting( 'about_stats[stat1][heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat1][heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat1][number]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat1][number]', [
		'label'   => esc_html__( 'Number', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat1][label]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat1][label]', [
		'label'   => esc_html__( 'Label', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat2][image]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'about_stats[stat2][image]', [
		'label'       => esc_html__( 'Image', 'atu' ),
		'section'     => 'about_stats_section',
		'settings'    => 'about_stats[stat2][image]',
		'description' => esc_html__( 'Select or Upload the image you wish to display.', 'atu' ),
	] ) );

	$manager->add_setting( 'about_stats[stat2][heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat2][heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat2][number]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat2][number]', [
		'label'   => esc_html__( 'Number', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat2][label]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat2][label]', [
		'label'   => esc_html__( 'Label', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);


	$manager->add_setting( 'about_stats[stat3][image]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'about_stats[stat3][image]', [
		'label'       => esc_html__( 'Image', 'atu' ),
		'section'     => 'about_stats_section',
		'settings'    => 'about_stats[stat3][image]',
		'description' => esc_html__( 'Select or Upload the image you wish to display.', 'atu' ),
	] ) );

	$manager->add_setting( 'about_stats[stat3][heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat3][heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat3][number]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat3][number]', [
		'label'   => esc_html__( 'Number', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'about_stats[stat3][label]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'about_stats[stat3][label]', [
		'label'   => esc_html__( 'Label', 'atu' ),
		'section' => 'about_stats_section',
		'type'    => 'text',
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