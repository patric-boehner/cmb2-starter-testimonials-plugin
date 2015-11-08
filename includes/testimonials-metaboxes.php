<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */


//**********************************************
//* Security
//**********************************************

//* Blocking direct access to the plugin PHP file
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//**********************************************
// testimonialss Metabox
//**********************************************

add_action( 'cmb2_init', 'cmb2_testimonials_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_testimonials_metaboxes() {

 // Start with an underscore to hide fields from custom fields list
 $prefix = '_cmb2_testimonials_metabox_';

 /**
 * Initiate the metabox
 */
 $cmb = new_cmb2_box( array(
   'id'            => 'testimonials_metabox',
   'title'         => __( 'Testimonial Details', 'cmb2' ),
   'object_types'  => array( 'pbcpt_testimonials', ), // Post type cpt - testimonials
   'context'       => 'normal',
   'priority'      => 'high',
   'show_names'    => true, // Show field names on the left
   // 'cmb_styles'    => false, // false to disable the CMB stylesheet
   // 'closed'     => true, // Keep the metabox closed by default
   ) );

   //* Add Testimonial Quote field
   $cmb->add_field( array(
      'name'    => 'Quote',
      'desc'    => 'Add the clients quote. Plain text only with no line breaks (required).',
      'default' => '',
      'attributes' => array ( 'required' => 'required', ), // Make required
      'id'      => $prefix . 'quote',
      'type'    => 'textarea'
   ) );

   //* Add Name field for testimonial
   $cmb->add_field( array(
      'name'    => 'Name',
      'desc'    => 'Add name of the person giving the testimonial (optional)',
      'default' => '',
      'id'      => $prefix . 'name',
      'type'    => 'text'
   ) );

   //* Add Location field for testimonial
   $cmb->add_field( array(
      'name'    => 'Location',
      'desc'    => 'Add location information for the person giving the testimonial (either location of person or shoot location). Example: San Francisco, CA (optional)',
      'default' => '',
      'id'      => $prefix . 'location',
      'type'    => 'text'
   ) );

}
