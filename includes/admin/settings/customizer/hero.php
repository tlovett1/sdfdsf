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
function hero_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\hero' );
}

/**
 * Creates about page settings and controls for the hero.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function hero( WP_Customize_Manager $manager  ) {
	$manager->add_section( 'hero_section', [
		'title' => esc_html__( 'Hero', 'atu' ),
	]);

	$manager->add_setting( 'hero_settings_slide1[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'hero_settings_slide1[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'hero_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'hero_settings_slide1[heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'hero_settings_slide1[heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'hero_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'hero_settings_slide1[image]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'hero_settings_slide1[image]', [
		'label'       => esc_html__( 'Image', 'atu' ),
		'section'     => 'hero_section',
		'settings'    => 'hero_settings_slide1[image]',
		'description' => esc_html__( 'Select or Upload the image you wish to display.', 'atu' ),
	] ) );


	$manager->add_setting( 'hero_settings_slide2[subheading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'hero_settings_slide2[subheading]', [
		'label'   => esc_html__( 'Sub Heading', 'atu' ),
		'section' => 'hero_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'hero_settings_slide2[heading]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	]);

	$manager->add_control( 'hero_settings_slide2[heading]', [
		'label'   => esc_html__( 'Heading', 'atu' ),
		'section' => 'hero_section',
		'type'    => 'text',
	]);

	$manager->add_setting( 'hero_settings_slide2[image]', [
		'type'      => 'theme_mod',
		'transport' => 'postMessage',
	] );

	$manager->add_control( new WP_Customize_Media_Control( $manager, 'hero_settings_slide2[image]', [
		'label'       => esc_html__( 'Image', 'atu' ),
		'section'     => 'hero_section',
		'settings'    => 'hero_settings_slide2[image]',
		'description' => esc_html__( 'Select or Upload the image you wish to display.', 'atu' ),
	] ) );

}

