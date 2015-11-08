<?php

/*
Plugin Name: Testimonials - Custom Post Type (Required)
Plugin URI: www.patrickboehner.com
Description: Custom post type for Testimonials. This is a default plugin that must be used as part of the sites functionality. Removing or turning this plugin off will effect your ability to edit and display testimonials on your site. It can be used with any WordPress theme as long as this plugin is active. See the readme.txt file for more details.
Version: 100.1.0
Author: Patrick Boehner
Author URI: http://patrickboehner.com
License: GPL-2.0+
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/

/*
To activate this as a plugin just add to wp-contents/plugins and activate in Dashboard.

Don't forget to pay a visit to permalinks after you create a CPT and save the permalinks settings again.
*/


//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
//* Load Plugin Files
//**********************************************

// Required files for registering the post type, taxonomies, metaboxes, edit columns, and notices.
require plugin_dir_path( __FILE__ ) . 'includes/testimonials-cpt.php';
require plugin_dir_path( __FILE__ ) . 'includes/testimonials-notices.php';
require plugin_dir_path( __FILE__ ) . 'includes/testimonial-edit-columns.php';

//* Add Support for Testimonial Specific Custom Metaboxes (cmb2)
if( !class_exists("CMB2") ){
	require_once( plugin_dir_path(__FILE__)."includes/testimonials-metaboxes.php" );
}

// Add suport for post count in admin screen
// https://github.com/GaryJones/Gamajo-Dashboard-Glancer
if ( !class_exists( "pb_dashboard_glancer" ) ) {
   require_once( plugin_dir_path(__FILE__)."includes/testimonials-dashboard.php" );
}


//**********************************************
//* Adjust the Post Query
//**********************************************

//* Change posts per page for testimonial archive
//* http://www.billerickson.net/customize-the-wordpress-query/

add_action( 'pre_get_posts', 'pb_change_testimonials_per_page' );
function pb_change_testimonials_per_page( $query ) {

	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'pbcpt_testimonials' ) ) {
		$query->set( 'posts_per_page', '10' );
	}

}


//**********************************************
//* Hook Into Admin Screen Widget
//**********************************************

// Hook into the widget (or any hook before it!)
add_action( 'dashboard_glance_items', 'pb_add_dashboard_counts' );
function pb_add_dashboard_counts() {
    $glancer = new pb_dashboard_glancer;
    $glancer->add( 'pbcpt_testimonials' ); // show only published "testimonials" entries
}


//**********************************************
//* Flush rewrite rules on activation
//**********************************************
// https://gist.github.com/theukedge/6671340#file-gistfile1-php

register_activation_hook( __FILE__, 'pb_cpt_rewrite_flush' );
function pb_cpt_rewrite_flush () {
	pb_register_cpt_testimonials(); // function from the add_action line on your CPT
	flush_rewrite_rules(); // Fluch the rules
}
