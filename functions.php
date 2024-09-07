<?php

/**
 * Enqueue scripts and styles.
 */

define( 'OWNDEVS_THEME_DIR', get_template_directory() );
define( 'OWNDEVS_THEME_URI', get_template_directory_uri() );
define( 'OWNDEVS_THEME_CSS_DIR', OWNDEVS_THEME_URI . '/assets/css/' );
define( 'OWNDEVS_THEME_JS_DIR', OWNDEVS_THEME_URI . '/assets/js/' );
define( 'OWNDEVS_THEME_INC', OWNDEVS_THEME_DIR . '/inc/' );


/**
 * include harry functions file
 */
require_once OWNDEVS_THEME_INC . '/common/owndevs-scripts.php';