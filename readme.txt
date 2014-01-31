=== Redirect to login if not logged in ===
Contributors: daankortenbach
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BKUCJXJJ8XJVY
Tags: redirect, login
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: 1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Redirects site visitors to the login page if the visitor is not logged in.

== Description ==

Redirects a user to the login page if the user is not logged in. After login the user gets redirected to the original entry page. This plugin is used fairly often for sites in development or sites only available for registered users.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.5 =
* Complete rewrite to use the already existing auth_redirect hook.
* Strips '?loggedout=true' from redirect url after login.

= 1.4 =
* Moved the conditionals to the init hook due to some edge cases not redirecting.

= 1.3 =
* Plugin naming.

= 1.2 =
* Releasing to the WordPress plugin repo.

= 1.1 =
* Cleanup.
* Now using wp_login_url() in redirect.

= 1.0 =
* Initial version.