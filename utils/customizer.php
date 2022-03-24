<?php

defined('ABSPATH') || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 */
add_action(
    'customize_register',
    function ($wp_customize) {
        /**
         * Initialize sections
         */
        $wp_customize->add_section(
            'theme_header_section',
            array(
                'title' => __('Header', 'wr-theme'),
                'priority' => 1000,
            )
        );

        /**
         * Section: Page Layout
         */
        // Header Logo.
        $wp_customize->add_setting(
            'header_logo',
            array(
                'default' => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'header_logo',
                array(
                    'label' => __('Upload Header Logo', 'wr-theme'),
                    'description' => __('Height: &gt;80px', 'wr-theme'),
                    'section' => 'theme_header_section',
                    'settings' => 'header_logo',
                    'priority' => 1,
                )
            )
        );

    }

);


/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
add_action(
    'customize_preview_init',
    function () {
        wp_enqueue_script('customizer', get_template_directory_uri() . '/inc/customizer.js', array('jquery'), null, true);
    }
);
