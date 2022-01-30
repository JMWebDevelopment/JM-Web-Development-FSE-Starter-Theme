<?php
/**
 * This file adds functions to the JM Web Development FSE Starter Theme for WordPress.
 *
 * @package JM Web Development FSE Starter Theme
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( ! function_exists( 'jm_web_dev_fse_starter_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function jm_web_dev_fse_starter_theme_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'jm-web-dev-fse-starter-theme', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/css/editor-styles.min.css',
				jm_web_dev_fse_starter_theme_fonts_url(),
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'jm_web_dev_fse_starter_theme_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'jm_web_dev_fse_starter_theme_enqueue_style_sheet' );
function jm_web_dev_fse_starter_theme_enqueue_style_sheet() {

	wp_enqueue_style( 'jm-web-dev-fse-starter-theme', get_template_directory_uri() . '/assets/css/styles.min.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'jm_web_dev_fse_starter_theme_enqueue_fonts' );
function jm_web_dev_fse_starter_theme_enqueue_fonts() {

	wp_enqueue_style( 'jm-web-dev-fse-starter-theme-fonts', jm_web_dev_fse_starter_theme_fonts_url(), array(), null );

}

// Define fonts.
function jm_web_dev_fse_starter_theme_fonts_url() {

	// Allow child themes to disable to the default JM Web Development FSE Starter Theme fonts.
	$dequeue_fonts = apply_filters( 'jm_web_dev_fse_starter_theme_dequeue_fonts', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = [];

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}

// Include block styles.
require get_template_directory() . '/inc/block-styles.php';

// Include block patterns.
require get_template_directory() . '/inc/block-patterns.php';
