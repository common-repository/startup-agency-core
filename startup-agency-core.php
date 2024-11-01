<?php
/**
 * Plugin Name:       Startup Agency Core
 * Plugin URI:        https://www.eservicesempire.com/plugins/startup-agency-core
 * Description:       Plugin Use for Startup Agency core features, adding custom post types and advance custom fields for startup agency theme this plugin require for properly working startup agency theme
 * Version:           1.0.2
 * Requires at least: 5.2
 * Stable tag:        1.0.2
 * Requires PHP:      7.2
 * Author:            Themeologist
 * Author URI:        https://www.eservicesempire.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.eservicesempire.com/
 * Text Domain:       startup-agency-core
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
} 
    if(!function_exists('wp_get_current_user')) {
        include(ABSPATH . "wp-includes/pluggable.php"); 
    }

    require 'inc/custom-post-type.php'; //Include custom post types
    require 'inc/advance-custom-fields.php'; //Include advance custom fields


    function startup_agency_core_plugin_script() {
        global $pagenow;
        global $post_type;
        if ( $pagenow == 'post-new.php' && $post_type == 'portfolio' ) {
        wp_enqueue_script( 'required-fields', plugin_dir_url( __FILE__ ) . 'inc/js/required-field.js', array( 'jquery' ), '1.0.0', true  );
    }}
    add_action('admin_enqueue_scripts','startup_agency_core_plugin_script');
