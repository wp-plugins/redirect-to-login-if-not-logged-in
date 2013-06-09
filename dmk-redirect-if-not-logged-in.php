<?php
/**
 * @package Redirect to login if not logged in
 * @version 1.3
 */
/*
Plugin Name: Redirect to login if not logged in
Plugin URI: http://wordpress.org/plugins/redirect-to-login-if-not-logged-in/
Description: Redirect to wp-login.php if user is not logged in.
Author: Daan Kortenbach
Version: 1.3
Author URI: http://daan.kortenba.ch/
*/

add_action( 'wp', 'dmk_not_loggedin_redirect' );

/**
 * Redirect to wp-login.php if user is not logged in.
 *
 * @author Daan Kortenbach
 *
 * @global string $pagenow
 * @return void redirect
 */
function dmk_not_loggedin_redirect() {
	global $pagenow;

	if ( ! is_user_logged_in() && $pagenow != 'wp-login.php' )
		wp_redirect( wp_login_url(), 302 );
}