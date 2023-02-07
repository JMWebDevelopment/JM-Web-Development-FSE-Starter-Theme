<?php
/**
 * Title: Default 404 Pattern.
 * Slug: jm-web-dev-fse-starter-theme/default-404
 * Categories: jm-web-dev-fse-starter-theme-404
 * Viewport Width: 1280
 */
?>

<!-- wp:heading {"className":"is-style-jm-web-development-fse-starter-theme-text-shadow","textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size is-style-jm-web-development-fse-starter-theme-text-shadow"><?php esc_html_e( 'Page not found', 'jm-web-dev-fse-starter-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'jm-web-dev-fse-starter-theme' ); ?></p><!-- /wp:paragraph -->
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Latest posts', 'jm-web-dev-fse-starter-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
</div>
<!-- /wp:group -->
