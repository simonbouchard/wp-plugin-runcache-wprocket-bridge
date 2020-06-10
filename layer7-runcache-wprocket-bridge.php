<?php
/*
Plugin Name: RunCache & WP Rocket Bridge
Plugin URI: https://layer7.hosting
Description: When WP Rocket clears it's cache, this plugin will also clear RunCache.
Version: 1.0
Author: Layer 7 Web Hosting
Author URI: https://layer7.hosting
*/

add_action('after_rocket_clean_post', function( $post ) {
	if(class_exists('RunCache_Purger')) RunCache_Purger::flush_post($post->ID);
});


add_action( 'after_rocket_clean_domain', function() {
	if(class_exists('RunCache_Purger')) RunCache_Purger::flush_home(true);
});
