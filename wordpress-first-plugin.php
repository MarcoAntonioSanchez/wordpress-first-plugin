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

/******************************************************************
 Include files
******************************************************************/

include(plugin_dir_path( __FILE__ ) . 'includes/register_post_type.php'); // If this file doesn't exists, it will be skipped.
include_once(plugin_dir_path( __FILE__ ) . 'includes/register_post_type.php'); // This one prevents code duplication.

require(plugin_dir_path( __FILE__ ) . 'includes/register_post_type.php'); // This one is required, so it will stop code execution if it doesn't exists.
require_once(plugin_dir_path( __FILE__ ) . 'includes/register_post_type.php'); // This one prevents code duplication too.
