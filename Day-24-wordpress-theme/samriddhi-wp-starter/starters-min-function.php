<?php

if (!function_exists('samriddhi_setup')):
    function samriddhi_setup()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_theme_support('custom-logo');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        // Add menus.
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'samriddhi'),
                'social' => __('Social Links Menu', 'samriddhi'),
                'secondary' => __('Secondary Menu', 'samriddhi'),
            )
        );


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        )
        );

        /*
         * Enable support for Post Formats.
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat'
        )
        );

        /*
         * Enable support for Page excerpts.
         */
        add_post_type_support('page', 'excerpt');
    }
endif; // samriddhi_setup
add_action('after_setup_theme', 'samriddhi_setup');



if (!function_exists('samriddhi_customize_register')):

    function samriddhi_customize_register($wp_customize)
    {
        // Do stuff with $wp_customize, the WP_Customize_Manager object.

        $wp_customize->add_section('home', array(
            'title' => __('Home', 'samriddhi')
        )
        );
        $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

        $wp_customize->add_setting('president_message_title', array(
            'type' => 'theme_mod',
            'default' => __('President\'s message', 'samriddhi'),
        )
        );

        $wp_customize->add_control('president_message_title', array(
            'label' => __('Presidents Message Title', 'samriddhi'),
            'type' => 'text',
            'section' => 'home'
        )
        );
    }
    add_action('customize_register', 'samriddhi_customize_register');
endif; // samriddhi_customize_register
