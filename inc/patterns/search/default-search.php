<?php
/**
 * JM Web Development FSE Starter Theme: Default Search pattern
 *
 * @package JM Web Development FSE Starter Theme
 */

return array(
	'title'      => __( 'Default Search Pattern.', 'jm-web-dev-fse-starter-theme' ),
	'categories' => array( 'jm-web-dev-fse-starter-theme-search' ),
	'blockTypes' => array( 'core/template-part/search' ),
	'content'    => '<!-- wp:heading {"className":"is-style-jm-web-development-fse-starter-theme-text-shadow","fontSize":"x-large"} -->
                    <h2 class="is-style-jm-web-development-fse-starter-theme-text-shadow has-x-large-font-size">' . jm_web_dev_fse_starter_theme_search_title() . '</h2>
                    <!-- /wp:heading -->',
);
