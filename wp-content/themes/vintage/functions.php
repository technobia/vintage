<?php
// Our custom post type function
function create_post_type()
{
    register_post_type('pictures',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Pictures'),
                'singular_name' => __('Picture'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Picture'),
                'edit' => __('Edit'),
                'edit_item' => __('Edit Picture'),
                'new_item' => __('New Picture'),
                'view' => __('View Pictures'),
                'view_item' => __('View Pictures'),
                'search_items' => __('Search Pictures'),
                'not_found' => __('No Pictures found'),
                'not_found_in_trash' => __('No pictures found in Trash'),
                'parent' => __('Parent Pictures'),
            ),
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('category', 'post_tag'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pictures'),
        )
    );
    register_post_type('news',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New News'),
                'edit' => __('Edit'),
                'edit_item' => __('Edit News'),
                'new_item' => __('New News'),
                'view' => __('View News'),
                'view_item' => __('View News'),
                'search_items' => __('Search News'),
                'not_found' => __('No News found'),
                'not_found_in_trash' => __('No News found in Trash'),
                'parent' => __('Parent News'),
            ),
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('category', 'post_tag'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
        )
    );
    register_post_type('gift_box',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Gift Box'),
                'singular_name' => __('Gift Box'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Gift Box'),
                'edit' => __('Edit'),
                'edit_item' => __('Edit Gift Box'),
                'new_item' => __('New Gift Box'),
                'view' => __('View Gift Box'),
                'view_item' => __('View Gift Box'),
                'search_items' => __('Search Gift Box'),
                'not_found' => __('No Gift Box found'),
                'not_found_in_trash' => __('No Gift Box found in Trash'),
                'parent' => __('Parent Gift Box'),
            ),
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies' => array('category', 'post_tag'),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gift-box'),
        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_post_type');

add_action('pre_get_posts', function ($q) {

    if (!is_admin() && $q->is_main_query() && $q->is_post_type_archive('news')) {

        $q->set('posts_per_page', 5);

    }

});

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


