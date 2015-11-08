<?php

/**
 * Create Testimonial Taxonomy
 * @author Patrick Boehner
 * @link http://www.patrickboehner.com
 * @package Testimonials
 * @version 1.0
 *
 */

/*
This code 'include' creates the custom taxonomy used in the Custom Post Type found in this plugin for WordPress. This is a default plugin 'include' that must be used as part of the sites functionality as it affects the display and organization of content. It can be used with any WordPress theme as long as this plugin is active.

The action initialises the function below it.

To activate this as a plugin just add to wp-contents/plugins and activate in Dashboard

Don't forget to pay a visit to permalinks after you create a CPT and save the permalinks settings again.
*/

/*
Custom Taxonomy Information
http://codex.wordpress.org/Function_Reference/register_taxonomy
http://codex.wordpress.org/Function_Reference/register_taxonomy#Reserved_Terms
http://generatewp.com/taxonomy/
http://my.studiopress.com/snippets/post-meta/
http://www.billerickson.net/wordpress-custom-taxonomies/
*/

if ( ! function_exists( 'cpt_register_testimonial_taxonomy' ) ) {

// Register Custom Taxonomies

// Register Testimonial Category Taxonomie
function cpt_register_testimonial_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Testimonial Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Testimonial Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Testimonial Categories', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Testimonial Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Testimonial Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'testimonial-category',
		'with_front'                 => true,
		'hierarchical'               => true,
		'pages'						     => true,

	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'query_var'                  => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'testimonial-category', array( 'pbcpt_testimonials' ), $args );


}

// Hook into the 'init' action
add_action( 'init', 'cpt_register_testimonial_taxonomy', 0 );

}
