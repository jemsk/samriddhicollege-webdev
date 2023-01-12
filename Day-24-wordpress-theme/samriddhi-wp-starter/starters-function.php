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


if (!function_exists('samriddhi_init')):
    function samriddhi_init()
    {
        // Use categories and tags with attachments
        register_taxonomy_for_object_type('category', 'attachment');
        register_taxonomy_for_object_type('post_tag', 'attachment');

        /*
         * Register custom post types. You can also move this code to a plugin.
         */

        register_post_type('slider', array(
            'labels' =>
            array(
                'name' => __('Sliders', 'samriddhi'),
                'singular_name' => __('Slider', 'samriddhi'),
                'add_new_item' => __('Add New Slider', 'samriddhi'),
                'edit_item' => __('Edit Slider', 'samriddhi'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-cover-image'
        )
        );


        register_post_type('service', array(
            'labels' =>
            array(
                'name' => __('Services', 'samriddhi'),
                'singular_name' => __('Service', 'samriddhi'),
                'add_new_item' => __('Add New Service', 'samriddhi'),
                'edit_item' => __('Edit Service', 'samriddhi'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-universal-access'
        )
        );


        /* Pinegrow generated Custom Post Types End */

        /*
         * Register custom taxonomies. You can also move this code to a plugin.
         */

        register_taxonomy('project_cat', 'project', array(
            'labels' =>
            array(
                'name' => __('Project Categories', 'samriddhi'),
                'singular_name' => __('Project Category', 'samriddhi')
            ),
            'hierarchical' => true,
        )
        );

        register_taxonomy('download_cat', 'download', array(
            'labels' =>
            array(
                'name' => __('Download Categories', 'samriddhi'),
                'singular_name' => __('Download Category', 'samriddhi')
            ),
            'hierarchical' => true,
        )
        );
    }
endif; // samriddhi_setup

add_action('init', 'samriddhi_init');


if (!function_exists('samriddhi_custom_image_sizes_names')):
    function samriddhi_custom_image_sizes_names($sizes)
    {
        return $sizes;
    }
    add_action('image_size_names_choose', 'samriddhi_custom_image_sizes_names');
endif; // samriddhi_custom_image_sizes_names



if (!function_exists('samriddhi_customize_register')):

    function samriddhi_customize_register($wp_customize)
    {
        // Do stuff with $wp_customize, the WP_Customize_Manager object.

        $wp_customize->add_section('home', array(
            'title' => __('Home', 'samriddhi')
        )
        );
        $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;


        $wp_customize->add_setting('donate_link', array(
            'type' => 'theme_mod',
            'default' => __('President\'s message', 'samriddhi'),
            // 'sanitize_callback' => $pgwp_sanitize
        )
        );

        $wp_customize->add_control('donate_link', array(
            'label' => __('Donate Link', 'samriddhi'),
            'type' => 'url',
            'section' => 'home'
        )
        );



        $wp_customize->add_setting('president_message_title', array(
            'type' => 'theme_mod',
            'default' => __('President\'s message', 'samriddhi'),
            // 'sanitize_callback' => $pgwp_sanitize
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


if (!function_exists('samriddhi_enqueue_scripts')):
    function samriddhi_enqueue_scripts()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/js/jquery-3.5.0.min.js', false, null, true);


        wp_deregister_style('style');
        wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css', false, null, 'all');
    }
    add_action('wp_enqueue_scripts', 'samriddhi_enqueue_scripts');
endif;