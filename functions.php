<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Hooks */
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_assets', 20 );

function astra_child_enqueue_assets() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// Parent + child style
	wp_enqueue_style(
		'astra-child-style',
		get_stylesheet_uri(),
		array( 'astra-theme-css' ),
		$theme_version
	);

	// Custom styles
	wp_enqueue_style(
		'astra-child-custom-style',
		get_stylesheet_directory_uri() . '/assets/styles/main.css',
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'astra-child-custom-style-tab',
		get_stylesheet_directory_uri() . '/assets/styles/tab.css',
		array( 'astra-child-custom-style' ),
		$theme_version
	);

	wp_enqueue_style(
		'astra-child-custom-style-mobile',
		get_stylesheet_directory_uri() . '/assets/styles/mobile.css',
		array( 'astra-child-custom-style-tab' ),
		$theme_version
	);

	// JS files
	wp_enqueue_script(
		'astra-child-scripts-header',
		get_stylesheet_directory_uri() . '/assets/js/header.js',
		array('jquery'),
		$theme_version,
		true
	);

	wp_enqueue_script(
		'astra-child-scripts-carousel',
		get_stylesheet_directory_uri() . '/assets/js/cards-carousel.js',
		array(),
		$theme_version,
		true
	);
}
