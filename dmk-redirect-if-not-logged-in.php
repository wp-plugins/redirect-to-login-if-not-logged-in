<?php
/**
 * @package Redirect to login if not logged in
 * @version 1.4
 */
/*
Plugin Name: Redirect to login if not logged in
Plugin URI: http://wordpress.org/plugins/redirect-to-login-if-not-logged-in/
Description: Redirect to wp-login.php if user is not logged in.
Author: Daan Kortenbach
Version: 1.4
Author URI: http://daan.kortenba.ch/
*/

add_action( 'init', 'dmk_not_loggedin_redirect' );

/**
 * Conditional: if user is not logged in and is not on wp-login.php, call redirect on hook 'wp'.
 *
 * @author Daan Kortenbach
 *
 * @global string $pagenow
 * @return void
 */
function dmk_not_loggedin_redirect() {
	global $pagenow;

	if ( ! is_user_logged_in() && $pagenow != 'wp-login.php' ) {
		add_action( 'wp', 'dmk_not_loggedin_do_redirect' );
	}
}

/**
 * Redirect to wp-login.php.
 *
 * @author Daan Kortenbach
 *
 * @return void redirect
 */
function dmk_not_loggedin_do_redirect() {
	wp_redirect( wp_login_url(), 302 );
	exit;
}