=== Plugin Name ===
Contributors: Paul Redmond
Donate link: http://www.goredmonster.com
Tags: twitter, twitter button, retweet, social media
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 1.0.1

Automatically adds the new official Twitter tweet button after a post.

== Description ==

Automatically adds the official Tweet button after a post. All options available at http://dev.twitter.com/pages/tweet_button are configurable in the WordPress options area.

== Installation ==

1. Upload `twitterbutton` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I customize the location the Tweet button will appear? =

Yes. By disabling auto-output in the settings, the theme files can be used to render the button. See [Advanced Usage](http://wiki.github.com/paulredmond/TwitterButton-Wordpress-Plugin/advanced-usage "Advanced TweetButton usage on GitHub wiki.") on the project's GitHub wiki for more details.

= Can I disable auto-output? =
Yes. You can disable auto-output so that only manual function calls will render tweet buttons. You can also make the function calls disabled when auto-output is enable or override it so that both auto-output and your functions will render tweet buttons. See [Advanced Usage](http://wiki.github.com/paulredmond/TwitterButton-Wordpress-Plugin/advanced-usage "Advanced TweetButton usage on GitHub wiki.") on the project's GitHub wiki for more details.

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial version.
* Configurable options in the WordPress admin.

= 1.0.1 =
* Manual function for theme development.
* Auto-output options (toggle auto-output on homepage and pages)
* Position TweetButton before or after content when auto-output enabled.

== Notes ==

* Please give me feedback and feature requests at paulrredmond [at] gmail [dot] com. Any help or word of mouth would be an honor :)
* I manage the repository primarily on GitHub, and push stable releases to trunk and tags on WordPress svn. You can find the bleeding-edge version in the [GitHub trunk](http://wiki.github.com/paulredmond/TwitterButton-Wordpress-Plugin/)
