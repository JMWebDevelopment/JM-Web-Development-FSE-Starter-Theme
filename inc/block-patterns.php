<?php
/**
 * JM Web Development FSE Starter Theme: Block Patterns
 *
 * @package JM Web Development FSE Starter Theme
 * @author  JM Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

/**
 * Registers block patterns, categories, and type.
 *
 * @since 1.0.0
 */
function jm_web_dev_fse_starter_theme_register_block_patterns() {

	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type(
			'jm-web-dev-fse-starter-theme',
			array(
				'label' => __( 'JM Web Dev FSE Starter Theme', 'jm-web-dev-fse-starter-theme' ),
			)
		);
	}

	$block_pattern_categories = array(
		'jm-web-dev-fse-starter-theme-404'  => array(
			'label'         => __( '404', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-footer'  => array(
			'label'         => __( 'Footer', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-header'  => array(
			'label'         => __( 'Header', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
		'jm-web-dev-fse-starter-theme-search'  => array(
			'label'         => __( 'Search', 'jm-web-dev-fse-starter-theme' ),
			'categoryTypes' => array( 'jm-web-dev-fse-starter-theme' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 0.8.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'jm_web_dev_fse_starter_theme_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer/default-footer',
		'header/default-header',
		'search/default-search',
		'404/default-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since 0.8.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'jm_web_dev_fse_starter_theme_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'jm-web-dev-fse-starter-theme/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}
}
add_action( 'init', 'jm_web_dev_fse_starter_theme_register_block_patterns', 9 );
