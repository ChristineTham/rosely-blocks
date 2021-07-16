<?php

if ( ! function_exists( 'rosely_blocks_support' ) ) :
	function rosely_blocks_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'theme.css',
			)
		);

		// This theme has one menu location.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'rosely-blocks' ),
			)
		);

	}
	add_action( 'after_setup_theme', 'rosely_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function rosely_blocks_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'rosely-blocks-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'rosely_blocks_scripts' );
