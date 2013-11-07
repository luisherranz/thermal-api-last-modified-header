<?php
/*
Plugin Name: Thermal API Last-Modified Header
Plugin URI: -
Description: Add all the Last-Modified to the `meta` output of the Thermal API plugin
Author: Luis Herranz
Author URI: -
Version: 1.0.0
*/

add_filter( 'thermal_response',  function(&$res, &$app, &$data ) {
		
        $wp_last_mod_time = strtotime( get_lastpostmodified('gmt') );
        $wp_last_mod_time = strtotime( get_lastpostmodified('gmt') );
        $wp_last_mod_date = date( "D, d M Y H:i:s \G\M\T", $wp_last_mod_time );

        //$res->header( 'Last-Modified', $wp_last_mod_date );
        $app->lastModified( $wp_last_mod_time );

    	return $app;

        }, 10, 3);
?>