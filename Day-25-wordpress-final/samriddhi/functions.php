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
                'footer-1' => __('Footer 1', 'samriddhi'),
                'footer-2' => __('Footer 2', 'samriddhi'),
                'footer-3' => __('Footer 3', 'samriddhi'),
                'footer-4' => __('Footer 4', 'samriddhi'),
                // 'social' => __('Social Links Menu', 'samriddhi'),
                // 'secondary' => __('Secondary Menu', 'samriddhi'),
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

        $wp_customize->add_setting('address', array(
            'type' => 'theme_mod',
            'default' => __('Your Address Here', 'samriddhi'),
        )
        );

        $wp_customize->add_control('address', array(
            'label' => __('Address', 'samriddhi'),
            'type' => 'text',
            'section' => 'home'
        )
        );

        $wp_customize->add_setting('email', array(
            'type' => 'theme_mod',
            'default' => __('Your Email Here', 'samriddhi'),
        )
        );

        $wp_customize->add_control('email', array(
            'label' => __('Email', 'samriddhi'),
            'type' => 'text',
            'section' => 'home'
        )
        );

        $wp_customize->add_setting('phone', array(
            'type' => 'theme_mod',
            'default' => __('Your Phone Here', 'samriddhi'),
        )
        );

        $wp_customize->add_control('phone', array(
            'label' => __('Phone', 'samriddhi'),
            'type' => 'text',
            'section' => 'home'
        )
        );

        $wp_customize->add_setting('contact_iframe', array(
            'type' => 'theme_mod',
            'default' => __('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621', 'samriddhi'),
        )
        );

        $wp_customize->add_control('contact_iframe', array(
            'label' => __('Contact IFRAME', 'samriddhi'),
            'type' => 'text',
            'section' => 'home'
        )
        );

        $wp_customize->add_setting('facebook_link', array(
            'type' => 'theme_mod',
            'default' => __('Your Facebook Link', 'samriddhi'),
        )
        );

        $wp_customize->add_control('facebook_link', array(
            'label' => __('Facebook Link', 'samriddhi'),
            'type' => 'textarea',
            'section' => 'home'
        )
        );

        $wp_customize->add_setting('copyright_text', array(
            'type' => 'theme_mod',
            'default' => __('Copyright UpConstruction. All Rights Reserved', 'samriddhi'),
        )
        );

        $wp_customize->add_control('copyright_text', array(
            'label' => __('Copyright Text', 'samriddhi'),
            'type' => 'textarea',
            'section' => 'home'
        )
        );



        // © Copyright UpConstruction. All Rights Reserved
        
    }
    add_action('customize_register', 'samriddhi_customize_register');
endif; // samriddhi_customize_register


function cptui_register_my_cpts() {

	/**
	 * Post Type: Sliders.
	 */

	$labels = [
		"name" => esc_html__( "Sliders", "samriddhi" ),
		"singular_name" => esc_html__( "Slider", "samriddhi" ),
	];

	$args = [
		"label" => esc_html__( "Sliders", "samriddhi" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "slider", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "slider", $args );

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => esc_html__( "Services", "samriddhi" ),
		"singular_name" => esc_html__( "Service", "samriddhi" ),
	];

	$args = [
		"label" => esc_html__( "Services", "samriddhi" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-settings",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "service", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Download Categories.
	 */

	$labels = [
		"name" => esc_html__( "Download Categories", "samriddhi" ),
		"singular_name" => esc_html__( "Download Category", "samriddhi" ),
	];

	
	$args = [
		"label" => esc_html__( "Download Categories", "samriddhi" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'download_cat', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "download_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "download_cat", [ "download" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


if (!function_exists('samriddhi_enqueue_scripts')):
    function samriddhi_enqueue_scripts()
    {
        wp_deregister_script('bootstrap-js');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', false, null, true);

        wp_deregister_style('bootstrap');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', false, null, 'all');

        wp_deregister_style('bootstrap-icons');
        wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', false, null, 'all');

        wp_deregister_style('all');
        wp_enqueue_style('all', get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css', false, null, 'all');


        wp_deregister_style('glightbox');
        wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', false, null, 'all');

        wp_deregister_style('swiper');
        wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', false, null, 'all');

        wp_deregister_style('aos');
        wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false, null, 'all');
    }
    add_action('wp_enqueue_scripts', 'samriddhi_enqueue_scripts');
endif;
