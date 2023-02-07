<?php
/**
 * The file to load in the custom blocks.
 *
 * @since 1.0
 *
 * @version 1.0
 *
 * @package Portafoglio
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function jm_web_dev_fse_starter_theme_block_init() {
	register_block_type(
		__DIR__ . '/build/starter-block',
		array(
			'render_callback' => 'starter_block_render_callback',
		)
	);
}
add_action( 'init', 'jm_web_dev_fse_starter_theme_block_init' );

/**
 * Render callback function for the single post block.
 *
 * @param array    $attributes The block attributes.
 * @param string   $content    The block content.
 * @param WP_Block $block      Block instance.
 *
 * @return string The rendered output.
 */
function starter_block_render_callback( $attributes, $content, $block ) {
	ob_start();
	require get_template_directory() . '/inc/blocks/build/starter-block/template.php';
	return ob_get_clean();
}

function jm_web_dev_fse_starter_theme_block_categories( $categories ) {
	$categories[] = array(
		'slug'  => 'jm-web-dev-fse-starter-theme',
		'title' => esc_html__( 'JM Web Development FSE Starter Theme', 'jm-web-dev-fse-starter-theme' ),
	);

	return $categories;
}
add_filter( 'block_categories_all', 'jm_web_dev_fse_starter_theme_block_categories' );
