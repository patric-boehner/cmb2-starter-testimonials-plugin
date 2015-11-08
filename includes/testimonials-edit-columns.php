<?php
/**
 * Add Custom Metadata to Edit Column
 *
 * @author Patrick Boehner
 * @link http://www.patrickboehner.com
 * @package Testimonials
 * @version 1.0
 *
 */

/*
This code adds the custom metadata values to the custom post type admin edit columns
*/

/*
- https://yoast.com/custom-post-type-snippets/
- http://justintadlock.com/archives/2011/06/27/custom-columns-for-custom-post-types
*/

//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
//* Add Custom Columsn to Edit Admin Screen
//**********************************************
// http://justintadlock.com/archives/2011/06/27/custom-columns-for-custom-post-types

//* Create custom columns and make them available on the edit posts page.
//* Overwrite all of the default columns and set it up however we want
add_filter( 'manage_edit-pbcpt_testimonials_columns', 'pb_edit_testimonials_columns' ) ;

function pb_edit_testimonials_columns( $columns ) {

	$columns = array(
      //* Always leave the cb column or your mass edit / delete functionality will not work
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Client' ),
		'image' => __('Image'),
		'quote' => __( 'Quote' ),
		'location' => __( 'Location' ),
      //* Date is a default option, we wont need to output it, just include it.
		'date' => __( 'Date' )
	);

	return $columns;
}


add_action( 'manage_pbcpt_testimonials_posts_custom_column', 'pb_manage_testimonials_columns', 10, 2 );

function pb_manage_testimonials_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		//* If displaying the 'image' column.
		case 'image' :

			//* Get the image meta and adjust output size variable
			$image = wp_get_attachment_image( get_post_meta( $post_id, '_cmb2_testimonials_metabox_client_image_id', 1 ), array(95, 95) );

			//* If no image is found, output a default message.
			if ( empty( $image ) )
				echo __( 'None' );
			//* If there is a image output it.
			else
				echo __( $image );
			break;


		//* If displaying the 'quote' column.
		case 'quote' :

			//* Get the post meta.
			$quote = get_post_meta( $post_id, '_cmb2_testimonials_metabox_quote', true );
			//* Desired length of text to display
			$trim_length = 150;

			//* If no location is found, output a default message.
			if ( empty( $quote ) )
				echo __( 'None' );
			//* If there is a location output text.
			else
				echo substr(' '.esc_textarea($quote).' ', 0, $trim_length);
				echo "...";
			break;


		//* If displaying the 'location' column.
		case 'location' :

			//* Get the post meta.
			$location = get_post_meta( $post_id, '_cmb2_testimonials_metabox_location', true );

			//* If no location is found, output a default message.
			if ( empty( $location ) )
				echo __( '' );
			//* If there is a location output text.
			else
				echo __( ''.esc_textarea($location).'' );
			break;

		//* Just break out of the switch statement for everything else.
		default :
			break;
	}
}

?>
