<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );

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
}