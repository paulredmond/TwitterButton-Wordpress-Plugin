=== Plugin Name ===
Contributors: Paul Redmond
Donate link: http://www.goredmonster.com
Tags: twitter, twitter button, retweet
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 

Patterned after Dan Benjamin's Hivelogic enkoder, WP Emailcrypt keeps your email links safe automatically on-the-fly. No configuration.

== Description ==

wp-emailcrypt is an automated way to reduce spam when linking to an email address. This plugin replaces mailto links with encrypted JavaScript that executes at runtime.

== Installation ==

1. Upload `wp-emailcrypt` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does this plugin support shortcode API? =

Yes, shortcode is supported as of 0.2
[emailcrypt email='you@aol.com' subject="Hey" title="Click me"]Email Link[/emailcrypt].

If you want the email to also be the text in the link, you can use a self-closing shortcode like this:

[emailcrypt email="you@you.com" /]

== Screenshots ==

== Changelog ==

= 0.1 =
* Initial version.
* Disabled one of the three algorithms that was breaking the script.

= 0.2 =
* Added shortcode API support.

== Notes ==

* Raw email addresses (not inside a link) are not encrypted at this time
* If you find this useful, I would appreciate a [small donation] for continued work on this plugin and other plugins (http://www.goredmonster.com/donate/wp-emailcrypt "Donate with PayPal")