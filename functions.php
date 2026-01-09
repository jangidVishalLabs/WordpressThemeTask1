<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**  Hooks  */
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
add_action( 'wp_enqueue_scripts ', 'astra_child_enqueue_scripts' );

/**Includes */



/** Functions */
/**
 * Enqueue child theme styles
 */
function astra_child_enqueue_styles() {
	wp_enqueue_style(
		'astra-child-style',
		get_stylesheet_uri(),
		array( 'astra-theme-css' ),
		wp_get_theme()->get( 'Version' )
	);

		wp_enqueue_style(
		'astra-child-custom-style',
		get_stylesheet_directory_uri() . '/assets/styles/main.css',
		array(),
		'1.0'
	);
		wp_enqueue_style(
			'astra-child-custom-style-tab',
			get_stylesheet_directory_uri() . '/assets/styles/tab.css',
			array( 'astra-child-custom-style' ),
			'1.0',
		);
		wp_enqueue_style(
			'astra-child-custom-style-mobile',
			get_stylesheet_directory_uri() . '/assets/styles/mobile.css',
			array( 'astra-child-custom-style-tab' ),
			'1.0',
		);
}

/**
 * Enqueue custom scripts
 */
function astra_child_enqueue_scripts() {


	wp_enqueue_script(
		'astra-child-scripts-header',
		get_stylesheet_directory_uri() . '/assets/js/header.js',
		array(),
		'1.0',
		true
	);
}
