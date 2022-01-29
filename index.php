<?php
/**
 * This file adds functions to the Portafoglio theme for WordPress.
 *
 * @package Portafoglio
 * @author  Jacob Martella Web Development
 * @license GNU General Public License v2 or later
 * @link    https://jacobmartella.com/
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This theme was built for the WordPress full-site-editing feature. You need to be using WordPress 5.9 or higher to make it work.', 'portafoglio' );
}
