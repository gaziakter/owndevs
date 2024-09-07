<?php

/**
 * owndevs_scripts description
 * @return [type] [description]
 */
function owndevs_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'owndevs-fonts', owndevs_fonts_url(), array(), time() );

    wp_enqueue_style( 'boostrap-bundle', OWNDEVS_THEME_V_CSS_DIR . 'bundle.min.css', [] );
    wp_enqueue_style( 'line-awesome', OWNDEVS_THEME_CSS_DIR . 'line-awesome.min.css', [] );
    wp_enqueue_style( 'revolution-settings', OWNDEVS_THEME_V_CSS_DIR . 'revolution-settings.min.css', [] );
    wp_enqueue_style( 'jquery-fancybox', OWNDEVS_THEME_V_CSS_DIR . 'jquery.fancybox.min.css', [] );
    wp_enqueue_style( 'owl-carousel', OWNDEVS_THEME_V_CSS_DIR . 'owl.carousel.min.css', [] );
    wp_enqueue_style( 'cubeportfolio', OWNDEVS_THEME_V_CSS_DIR . 'cubeportfolio.min.css', [] );
    wp_enqueue_style( 'swiper', OWNDEVS_THEME_V_CSS_DIR . 'swiper.min.css', [] );
    wp_enqueue_style( 'nouislider', OWNDEVS_THEME_CSS_DIR . 'nouislider.min.css', [] );
    wp_enqueue_style( 'range-slider', OWNDEVS_THEME_CSS_DIR . 'range-slider.css', [] );
    wp_enqueue_style( 'blog', OWNDEVS_THEME_CSS_DIR . 'blog.css', [] );
    wp_enqueue_style( 'nouislider', OWNDEVS_THEME_CSS_DIR . 'nouislider.min.css', [] );
    wp_enqueue_style( 'thmeme-style', OWNDEVS_THEME_CSS_DIR . 'style.css', [] );

    wp_enqueue_style( 'owndevs-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'popper', OWNDEVS_THEME_JS_DIR . 'popper.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-appear', OWNDEVS_THEME_V_JS_DIR . 'jquery.appear.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-fancybox.min', OWNDEVS_THEME_V_JS_DIR . 'jquery.fancybox.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'owl-carousel', OWNDEVS_THEME_V_JS_DIR . 'owl.carousel.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'parallaxie', OWNDEVS_THEME_V_JS_DIR . 'parallaxie.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', OWNDEVS_THEME_V_JS_DIR . 'wow.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'stickyfill', OWNDEVS_THEME_V_JS_DIR . 'stickyfill.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-themepunch-tools', OWNDEVS_THEME_V_JS_DIR . 'jquery.themepunch.tools.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-themepunch-revolution', OWNDEVS_THEME_V_JS_DIR . 'jquery.themepunch.revolution.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-cubeportfolio', OWNDEVS_THEME_V_JS_DIR . 'jquery.cubeportfolio.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-actions', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.actions.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-carousel', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.carousel.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-kenburn', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.kenburn.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-layeranimation', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.layeranimation.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-migration', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.migration.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-navigation', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.navigation.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-parallax', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.parallax.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-slideanims', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.slideanims.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'extension-video', OWNDEVS_THEME_VJ_E_DIR . 'revolution.extension.video.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'bootstrap-input-spinner', OWNDEVS_THEME_V_JS_DIR . 'bootstrap-input-spinner.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper', OWNDEVS_THEME_V_JS_DIR . 'swiper.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'nouislider', OWNDEVS_THEME_JS_DIR . 'nouislider.min.js', [ 'jquery' ], time(), true );
    wp_enqueue_script( 'script', OWNDEVS_THEME_JS_DIR . 'script.js', [ 'jquery' ], '', true );


    //wp_enqueue_script( 'owndev-main', OWNDEVS_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'owndevs_scripts' );

/*
Register Fonts
 */
function owndevs_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'owndevs' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Poppins:wght@300;400;700&family=Dancing+Script:wght@400;700&display=swap');
    }
    return $font_url;
}