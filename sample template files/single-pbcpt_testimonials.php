<?php

//* Testimonial Post Type Single Template
//**********************************************
//* This file is for the output of the cpt Testimonial single post page.

/**
 *
 * @package Child Theme Name
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Security
//**********************
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


//* Entry Header
// Strip out all content and markup
//**********************

//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Remove the entry header markup (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//* Remove the entry meta in the entry header (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );


//* Entry Content
//**********************

//* Inserting custom content. Use a priority code to arange when it shows.
//* https://github.com/WebDevStudios/CMB2/wiki/Basic-Usage
//* https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
add_action( 'genesis_entry_content', 'pb_register_testimonial_meta' );
function pb_register_testimonial_meta() {

   //* Include the post format-specific template for the testimonial content.
   get_template_part( 'content', 'testimonial', get_post_format() );

}


//* Entry Footer
// Strip out all content and markup
//**********************

//* Remove the entry meta in the entry footer (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

//* Remove the entry footer markup (requires HTML5 theme support)
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );


//**********************
//* This file handles single entries.

//* Run the Genesis loop
genesis();
