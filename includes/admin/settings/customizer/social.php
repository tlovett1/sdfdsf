<?php
/**
 * File contains for the social media customizer controls;
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
function social_page_setup() {
	add_action( 'customize_register', __NAMESPACE__ . '\social_settings' );
}

/**
 * Creates social settings and controls for each social site type.
 *
 * @param WP_Customize_Manager $wp_customize Customizer Class Instance.
 * @return void
 */
function social_settings( $wp_customize ) {
	$social_sites = Views\atu_social_array();

	$wp_customize->add_section(
		'social_section',
		array(
			'title'       => __( 'Social Network Settings' ),
			'description' => __( 'Add the username for each of your social profiles.' ),
		)
	);

	foreach ( $social_sites as $social_site => $value ) {
		$label = ucfirst( $social_site );

		$wp_customize->add_setting(
			$social_site,
			array(
				'transport' => 'postMessage',
			)
		);

		$wp_customize->add_control(
			$social_site,
			array(
				'type'    => 'text',
				'label'   => $label,
				'section' => 'social_section',
			)
		);
	}
}
