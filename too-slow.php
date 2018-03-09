<?php

/*
Plugin Name: Too Slow
Description: A plugin to test slow page response.
Author: AppPresser Team
Version: 1.0
Author URI: http://apppresser.com
*/

/**
 * Example shortcode
 * 
 * [too_slow seconds="10"]
 */

function too_slow( $atts ) {
	$atts = shortcode_atts( array(
		'seconds' => 15
	), $atts );

	sleep( (int)$atts['seconds']);

	return 'That took ' . $atts['seconds'] . ' seconds';
}
add_shortcode( 'too_slow', 'too_slow' );