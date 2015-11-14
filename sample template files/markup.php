<?php

/**
 * Modify microdata on testimonial pages
 *
 * Usualy found in /lib/functions/
 *
 * @package      Patrick Boehner
 * @author       Patrick Boehner <patrick@patrickboehner.com>
 * @copyright    Copyright (c) 2015, Patrick Boehner
 *
 */


//* Security
//**********************
if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


//* Testimonial microdata
//***********************


/**
 * Callback 'genesis_attr_body' filter.
 *
 * Use Review microdata schema for the testimonial page.
 *
 * @param array $attributes The array of attributes
 * @return array $attributes The array of attributes
 *
 * http://www.rfmeier.net/using-genesis_markup-with-html5-in-genesis-2-0/
 * https://yoast.com/schema-org-genesis-2-0/
 * http://schema-creator.org/review.php
 */

//* Add Review Microdata to body
add_filter( 'genesis_attr_body', 'pb_testimonial_page_body_schema' );
function pb_testimonial_page_body_schema( $attributes ){

   // if About page, use the AboutPage schema
   if( is_post_type_archive( 'pbcpt_testimonials' )  )
   $attributes['itemtype'] = 'http://schema.org/Review';

   return $attributes;

}
