<?php /*

**************************************************************************

Plugin Name:  oohEmbed
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/oohembed/
Version:      1.0.0
Description:  Adds support for embeding content from more websites using <a href="http://oohembed.com/">oohEmbed</a>. Requires WordPress 2.9+.
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************/

if ( function_exists('wp_oembed_add_provider') )
	add_action( 'plugins_loaded', 'viper_oohembed', 7 );

function viper_oohembed() {
	wp_oembed_add_provider( 'http://*.5min.com/Video/*',                                                           'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( '#http://.*\.amazon\.(com|co.uk|de|ca|jp)/.*/(gp/product|o/ASIN|obidos/ASIN|dp)/.*#i', 'http://oohembed.com/oohembed/', true ); // Currently broken on oohEmbed
	wp_oembed_add_provider( 'http://*.collegehumor.com/video:*',                                                   'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.thedailyshow.com/video/*',                                                   'http://oohembed.com/oohembed/' ); // Seems to be an old URL format
	wp_oembed_add_provider( 'http://*.dailymotion.com/*',                                                          'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.funnyordie.com/videos/*',                                                    'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://video.google.com/videoplay?*',                                                 'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.metacafe.com/watch/*',                                                       'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.nfb.ca/film/*',                                                              'http://www.nfb.ca/remote/services/oembed/' );
	wp_oembed_add_provider( 'http://*.phodroid.com/*/*/*',                                                         'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.scribd.com/*',                                                               'http://www.scribd.com/services/oembed' );
	wp_oembed_add_provider( 'http://*.slideshare.net/*',                                                           'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.twitpic.com/*',                                                              'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( 'http://*.xkcd.com/*/',                                                                'http://oohembed.com/oohembed/' );
	wp_oembed_add_provider( '#http://yfrog\.(com|ru|com.tr|it|fr|co.il|co.uk|com.pl|pl|eu|us)/.*#i',               'http://oohembed.com/oohembed/', true );

	// Unregister default handlers that are now replaced by oohEmbed
	wp_embed_unregister_handler( 'dailymotion' );
	wp_embed_unregister_handler( 'googlevideo' );
}

?>