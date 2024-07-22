<?php
/*
    Plugin Name:    WordPress First Plugin
    Plugin URI:     http://ravenmilosh.com/wordpress-first-plugin
    Description:    WordPress first plugin development practice
    Author:         Raven D. Milosh
    Author URI:     https://ravenmilosh.com
    Version:        0.1.0
    Text Domain:    ravenmilosh
    License:        GPLv2
*/

/******************************************************************
 Enqueue scripts and styles
******************************************************************/

function first_plugin_enqueue_scripts_styles() {

    wp_register_style('first_plugin_style', plugins_url('styles/style.css', __FILE__));
    wp_enqueue_style('first_plugin_style');

    wp_register_script('first_plugin_script', plugins_url('scripts/my-script.js', __FILE__));
    wp_enqueue_script('first_plugin_script');

}
add_action('wp_enqueue_scripts', 'first_plugin_enqueue_scripts_styles');