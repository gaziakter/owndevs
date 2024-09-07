<?php

/**
 * owndevs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package owndevs
 */

if ( !function_exists( 'owndevs_setup' ) ):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function owndevs_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on owndevs, use a find and replace
         * to change 'owndevs' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'owndevs', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( [
            'main-menu' => esc_html__( 'Main Menu', 'owndevs' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'owndevs' ),
            'offcanvas-menu' => esc_html__( 'Offcanvas Default Menu', 'owndevs' ),
            'offcanvas-full-menu' => esc_html__( 'Offcanvas Full Menu', 'owndevs' ),
        ] );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ] );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'owndevs_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ] ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        //Enable custom header
        add_theme_support( 'custom-header' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ] );

        /**
         * Enable suporrt for Post Formats
         *
         * see: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', [
            'image',
            'audio',
            'video',
            'gallery',
            'quote',
        ] );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        remove_theme_support( 'widgets-block-editor' );

        // Add support for woocommerce.
        add_theme_support('woocommerce');
        
        // Remove woocommerce defauly styles
        add_filter( 'woocommerce_enqueue_styles', '__return_false' );
        
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 200,
            'gallery_thumbnail_image_width' => 200,
        ) );
        
    }
endif;
add_action( 'after_setup_theme', 'owndevs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function owndevs_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'owndevs_content_width', 640 );
}
add_action( 'after_setup_theme', 'owndevs_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
define( 'OWNDEVS_THEME_DIR', get_template_directory() );
define( 'OWNDEVS_THEME_URI', get_template_directory_uri() );
define( 'OWNDEVS_THEME_V_CSS_DIR', OWNDEVS_THEME_URI . '/assets/vendor/css/' );
define( 'OWNDEVS_THEME_V_JS_DIR', OWNDEVS_THEME_URI . '/assets/vendor/js/' );
define( 'OWNDEVS_THEME_VJ_E_DIR', OWNDEVS_THEME_URI . '/assets/vendor/js/extensions/' );
define( 'OWNDEVS_THEME_CSS_DIR', OWNDEVS_THEME_URI . '/assets/css/' );
define( 'OWNDEVS_THEME_JS_DIR', OWNDEVS_THEME_URI . '/assets/js/' );
define( 'OWNDEVS_THEME_INC', OWNDEVS_THEME_DIR . '/inc/' );


/**
 * include owndevs functions file
 */
require_once OWNDEVS_THEME_INC . '/common/owndevs-scripts.php';