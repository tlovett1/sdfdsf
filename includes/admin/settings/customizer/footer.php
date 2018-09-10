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
function footer_setup()
{
    add_action('customize_register', __NAMESPACE__ . '\footer');
}

/**
 * Creates about page settings and controls for the two coumn module.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function footer(WP_Customize_Manager $manager)
{
    $manager->add_section('footer_section', [
        'title' => esc_html__('Footer', 'atu'),
    ]);

    $manager->add_setting('footer_settings[subheading]', [
        'type'      => 'theme_mod',
        'transport' => 'postMessage',
    ]);

    $manager->add_control('footer_settings[subheading]', [
        'label'   => esc_html__('Sub Heading', 'atu'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    $manager->add_setting('footer_settings[heading]', [
        'type'      => 'theme_mod',
        'transport' => 'postMessage',
    ]);

    $manager->add_control('footer_settings[heading]', [
        'label'   => esc_html__('Heading', 'atu'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    $manager->add_setting('footer_settings[image]', [
        'type'      => 'theme_mod',
        'transport' => 'postMessage',
    ]);

    $manager->add_control(new WP_Customize_Media_Control($manager, 'footer_settings[image]', [
        'label'       => esc_html__('Image', 'atu'),
        'section'     => 'footer_section',
        'settings'    => 'footer_settings[image]',
        'description' => esc_html__('Select or Upload the image you wish to display.', 'atu'),
    ]));

    $manager->add_setting('footer_settings_curation', array(
        'sanitize_callback' => 'autosuggest_validation',
    ));

    $manager->add_control(new \Customizer_Curation($manager, 'footer_settings_curation', array(
        'label'       => esc_html__('Partners', 'rse'),
        'section'     => 'footer_section',
        'description' => esc_html__('Search and select the partners you want to show in the slider..', 'atu'),
        'placeholder' => esc_html__('Start typing...', 'atu'),
        'list'        => true,
        'resource'    => 'atu_partners',
    )));
}
