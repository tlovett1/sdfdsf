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
function testimonials_setup()
{
    add_action('customize_register', __NAMESPACE__ . '\testimonials');
}

/**
 * Creates events page settings and controls for the Events Intro Section.
 *
 * @param WP_Customize_Manager $manager Customizer Class Instance.
 * @return void
 */
function testimonials(WP_Customize_Manager $manager)
{
    $manager->add_section('testimonials_section', [
        'title' => esc_html__('Testimonials', 'atu'),
    ]);

    $manager->add_setting('testimonials_settings[subheading]', [
        'type'      => 'theme_mod',
        'transport' => 'postMessage',
    ]);

    $manager->add_control('testimonials_settings[subheading]', [
        'label'   => esc_html__('Sub Heading', 'atu'),
        'section' => 'testimonials_section',
        'type'    => 'text',
    ]);

    $manager->add_setting('testimonials_settings[heading]', [
        'type'      => 'theme_mod',
        'transport' => 'postMessage',
    ]);

    $manager->add_control('testimonials_settings[heading]', [
        'label'   => esc_html__('Heading', 'atu'),
        'section' => 'testimonials_section',
        'type'    => 'text',
    ]);

    $manager->add_setting('testimonials_settings_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));

    $manager->add_control(new Customizer_Repeater($manager, 'testimonials_settings_repeater', array(
        'label'   => esc_html__('Quotes', 'atu'),
        'section' => 'testimonials_section',
        'controls' => [
            [
                'type'  =>  'textarea',
                'label' =>  esc_html__('Text', 'atu'),
                'id'    =>  'text'
            ],
            [
                'type'  =>  'text',
                'label' =>  esc_html__('Name', 'atu'),
                'id'    =>  'citation'
            ],
        ]
    )));
}
