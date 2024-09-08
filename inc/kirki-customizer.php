<?php

/**
 * owndevs customizer
 *
 * @package owndevs
 */

/**
 * Exit if accessed directly
 */
if (!defined('ABSPATH')) {
    exit;
}

/**
 * If Kirki exists then there's no reason to proceed
 */
if ( !class_exists( 'Kirki' ) ) {
    return;
}

/**
 * Added Panels
 */
new \Kirki\Panel(
	'owndevs_heder_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header', 'owndevs' ),
		'description' => esc_html__( 'Customize header from the area.', 'owndevs' ),
	]
);

/**
 * Adding Section
 */
new \Kirki\Section(
	'header_area',
	[
		'title'       => esc_html__( 'Header Logo', 'owndevs' ),
		'description' => esc_html__( 'Header logo section', 'owndevs' ),
		'panel'       => 'owndevs_heder_panel',
		'priority'    => 160,
	]
);

/**
 * Adding logo field
 */
new \Kirki\Field\Image(
	[
		'settings'    => 'owndevs_header_logo',
		'label'       => esc_html__( 'Header Logo', 'owndevs' ),
		'description' => esc_html__( 'Please upload header logo here.', 'owndevs' ),
		'section'     => 'header_area',
		'default'     => get_template_directory_uri().'/assets/img/logo/owndevs.png',
	]
);