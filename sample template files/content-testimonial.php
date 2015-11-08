<?php
/**
 * The default template for displaying testimonial content
 *
 * Used for both single and index/archive/search.
 *
 * @package Child Theme Name
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */
?>

<?php

// Setting up variables for latter use
//**********************
//* Grab the metadata from the database
$quote   	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_quote', true );
$name    	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_name', true );
$url     	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_website_url', true );
$location	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_location', true );
$image		= wp_get_attachment_image( get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_client_image_id', 1 ), 'thumbnail' );

//* Setup citation sturcture and conditional check
if ( !empty( $url ) ) {
	$citation = '&mdash;&nbsp;<a href="' .esc_url($url). '" target="_blank">'.esc_textarea($name). '</a>';
}
else {
	$citation = '&mdash;&nbsp;'.esc_textarea($name). '';
}

//* Setup conditional check on place to check if a name proceds or not
if ( !empty( $name ) ) {
	$place = '&sbquo;&nbsp;'.esc_textarea($location).'';
}
else {
	$place = '&mdash;&nbsp;'.esc_textarea($location).'';
}

//**********************


//* Add testimonial structure
echo '<div class="testimonial">';

//* Turn get_post_meta into variable for conditional check to see if custom meta boxes are filled in, if empty don't return any metadata

//* Conditionaly add client Quote
if ( !empty( $quote ) ) {

	//* Conditionaly add clients image
	if ( !empty( $image ) ) {
		echo '<div class="testimonial-image">'.$image.'</div>';
	}

	//* Output quote
	echo '<blockquote>';
	echo '<p>' .esc_textarea($quote). '</p>';
	echo '<cite>';
		//* Conditionaly add citation
		if ( !empty( $name ) ) {
			echo $citation;
		}
		//* Conditionaly add location
		if ( !empty( $location) ) {
			echo $place;
		}
	echo '</cite>';
	echo '</blockquote>';

}

//* End testimonial structure
echo '</div>';

?>
