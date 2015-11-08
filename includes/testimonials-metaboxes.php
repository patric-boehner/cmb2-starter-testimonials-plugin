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
   'title'         => __( 'Testimonial Information', 'cmb2' ),
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
      'desc'    => 'Add the clients testimonial. Plain text only with no line breaks (required).',
      'default' => '',
      'attributes' => array (
         'required' => 'required',// Make required
         ),
      'id'      => $prefix . 'quote',
      'type'    => 'textarea',
   ) );

   //* Add Name field for testimonial
   $cmb->add_field( array(
      'name'    => 'Client Name',
      'desc'    => 'Add the name of the person giving the testimonial (optional).</br>Appears below the testimonial',
      'default' => '',
      'id'      => $prefix . 'name',
      'type'    => 'text'
   ) );

   //* Add Location field for testimonial
   $cmb->add_field( array(
      'name'    => __( 'Website URL', 'cmb' ),
      'desc'    => 'Add the website url for the person giving the testimonial (optional).',
      'default' => '',
      'id'      => $prefix . 'website_url',
      'type'    => 'text_url',
      'protocols' => array( 'http', 'https' ), // Array of allowed protocols
   ) );

   //* Add Image/File field for testimonial
   $cmb->add_field( array(
    'name'    => 'Client Image',
    'desc'    => 'Upload an image or select one from the media library (optional). </br><strong>Please make sure the image selected is cropped to 300x300 px</strong>.</br>For insturctions on how to crop your selected image, please see the <strong><a href="https://codex.wordpress.org/Edit_Media#Edit_Image" target="_blank">Edit Image</a></strong> help article.',
    'id'      => $prefix . 'client_image',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => false, // Hide the text input for the url
      'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
   ),
) );

}
