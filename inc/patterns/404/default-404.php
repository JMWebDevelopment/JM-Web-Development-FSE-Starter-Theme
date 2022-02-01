<?php
/**
 * JM Web Development FSE Starter Theme: Default 404 pattern
 *
 * @package JM Web Development FSE Starter Theme
 */

return array(
	'title'      => __( 'Default 404 Pattern.', 'jm-web-dev-fse-starter-theme' ),
	'categories' => array( 'jm-web-dev-fse-starter-theme-404' ),
	'blockTypes' => array( 'core/template-part/404' ),
	'content'    => '<!-- wp:heading {"className":"is-style-jm-web-development-fse-starter-theme-text-shadow","textAlign":"center","fontSize":"x-large"} -->
                    <h2 class="has-text-align-center has-x-large-font-size is-style-jm-web-development-fse-starter-theme-text-shadow">' . __( 'Page not found', 'jm-web-dev-fse-starter-theme' ) . '</h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph --><p>' . __( 'It looks like nothing was found at this location. Maybe try a search?', 'jm-web-dev-fse-starter-theme' ) . '</p><!-- /wp:paragraph -->
                    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
                    <!-- wp:spacer {"height":40} -->
                    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                    <!-- wp:group {"layout":{"inherit":true}} -->
                    <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"left"} -->
                    <h2 class="has-text-align-left">' . __( 'Latest posts', 'jm-web-dev-fse-starter-theme' ) . '</h2>
                    <!-- /wp:heading -->
                    <!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
                    </div>
                    <!-- /wp:group -->',
);
