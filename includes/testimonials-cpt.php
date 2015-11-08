<?php

/**
 * Create Testimonials Custom Post Type
 * @author Patrick Boehner
 * @link http://www.patrickboehner.com
 * @version 1.0
 *
 */

/*
This code 'include' creates the Custom Post Type found in this plugin for WordPress. This is a default plugin 'include' that must be used as part of the sites functionality as it affects the display of content. It can be used with any WordPress theme as long as this plugin is active.

* Post Type Identifier: pbcpt_testimonials

The action initialises the function below it.

This custom post type (CPT) uses the term 'Testimonials' as its name, a search and replace will allow any name to be used, making sure plural and singular versions of the name are replaced.
Also replace the name in 'rewrite' and in the 'register_post_type' function.
For non-Genesis themes the 'genesis-cpt-archives-settings' can be removed from the supports array.

To activate this as a plugin just add to wp-contents/plugins and activate in Dashboard

Don't forget to pay a visit to permalinks after you create a CPT and save the permalinks settings again.
*/

/*
Custom Post Type Information
https://codex.wordpress.org/Post_Types
https://codex.wordpress.org/Function_Reference/register_post_type
http://generatewp.com/post-type/
*/


//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
// Register Custom Post Type
//**********************************************


if ( ! function_exists('pb_register_cpt_testimonials') ) {

// Register Custom Post Type
function pb_register_cpt_testimonials() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'      => __( 'Testimonial', 'text_domain' ),  // Singular
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'        => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Testimonial', 'text_domain' ),
		'edit_item'           => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'         => __( 'Update Testimonial', 'text_domain' ),
		'view_item'           => __( 'View Testimonial', 'text_domain' ),
		'search_items'        => __( 'Search Testimonials', 'text_domain' ),
		'not_found'           => __( 'Testimonial found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Testimonial found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'testimonials',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'Testimonial', 'text_domain' ),
		'description'         => __( 'Custom post type for Testimonials. This is a default plugin that must be used as part of the sites functionality. Removing or turning this plugin off will effect your ability to edit and display testimonials on your site. It can be used with any WordPress theme as long as this plugin is active.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', 'genesis-cpt-archives-settings' ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5, // After posts
		'menu_icon'           => 'dashicons-editor-quote',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => 'testimonials',
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'pbcpt_testimonials', $args );

}
add_action( 'init', 'pb_register_cpt_testimonials', 0 );

}
