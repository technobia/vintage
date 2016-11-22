<?php
if (!function_exists('vintage_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function vintage_setup()
    {

        // Make theme available for translation. Translations can be filed in the /languages/ directory.
        load_theme_textdomain('vintage', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Set detfault Post Thumbnail size
        set_post_thumbnail_size(800, 500, true);

        // Register Navigation Menu
        register_nav_menu('primary', esc_html__('Main Navigation', 'vintage'));

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('vintage_custom_background_args', array('default-color' => 'ffffff')));

        // Set up the WordPress core custom logo feature
        add_theme_support('custom-logo', apply_filters('vintage_custom_logo_args', array(
            'height' => 40,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
        )));

        // Set up the WordPress core custom header feature.
        add_theme_support('custom-header', apply_filters('vintage_custom_header_args', array(
            'header-text' => false,
            'width' => 1920,
            'height' => 480,
            'flex-height' => true
        )));

        // Add Theme Support for wooCommerce
        add_theme_support('woocommerce');

    }
endif; // vintage_setup
add_action('after_setup_theme', 'vintage_setup');