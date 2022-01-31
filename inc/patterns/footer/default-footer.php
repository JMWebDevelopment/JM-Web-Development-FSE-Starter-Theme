<?php
/**
 * JM Web Development FSE Starter Theme: Default Footer pattern
 *
 * @package JM Web Development FSE Starter Theme
 */

return array(
	'title'      => __( 'Default Footer Pattern.', 'jm-web-dev-fse-starter-theme' ),
	'categories' => array( 'jm-web-dev-fse-starter-theme-footer' ),
	'blockTypes' => array( 'core/template-part/headfooterer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"15px","bottom":"2rem","left":"15px"}}}} -->
					<div class="wp-block-group" style="padding-top:2rem;padding-right:15px;padding-bottom:2rem;padding-left:15px"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Copyright © 2022</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:site-title {"textAlign":"center"} /-->
					
					<!-- wp:navigation {"ref":2080,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
					<!-- /wp:group -->',
);
