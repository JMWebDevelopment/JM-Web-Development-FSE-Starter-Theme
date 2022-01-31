<?php
/**
 * JM Web Development FSE Starter Theme: Default Header pattern
 *
 * @package JM Web Development FSE Starter Theme
 */

return array(
	'title'      => __( 'Default Header Pattern.', 'jm-web-dev-fse-starter-theme' ),
	'categories' => array( 'jm-web-dev-fse-starter-theme-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","right":"15px","bottom":"2rem","left":"15px"}}},"layout":{"contentSize":"1200px"}} -->
					<div class="wp-block-group alignfull" style="padding-top:2rem;padding-right:15px;padding-bottom:2rem;padding-left:15px"><!-- wp:site-title {"textAlign":"center"} /-->
					
					<!-- wp:site-tagline {"textAlign":"center"} /-->
					
					<!-- wp:navigation {"ref":2079,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
					<!-- /wp:group -->',
);
