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
$quote   	= esc_textarea(get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_quote', true ));
// Changes double line-breaks in the text into HTML paragraphs
$quote 		= wpautop($quote);
$name    	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_name', true );
$url     	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_website_url', true );
$location	= get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_location', true );
$image		= wp_get_attachment_image( get_post_meta( get_the_ID(), '_cmb2_testimonials_metabox_client_image_id', 1 ), 'thumbnail' );

//* Setup citation sturcture and conditional check
if ( !empty( $url ) ) {
	$citation = '<a href="' .esc_url($url). '" target="_blank">'.esc_textarea($name). '</a>';
}
else {
	$citation = esc_textarea($name);
}

//* Setup conditional check on place to check if a name proceds or not
if ( !empty( $name ) ) {
	$place = esc_textarea($location);
}
else {
	$place = esc_textarea($location);
}

//**********************


//* Add testimonial structure
echo '<div class="testimonial">';

//* Conditionaly add client Quote
if ( !empty( $quote ) ) {

	//* Conditionaly add clients image
	if ( !empty( $image ) ) {
		echo '<div class="testimonial-image">'.$image.'</div>';
	}

	//* Output quote
	echo '<blockquote>';
	echo $quote;
	if ( !empty( $name ) || !empty( $location ) ) {
		echo '<cite>';
			//* Conditionaly add citation
			if ( !empty( $name ) ) {
				echo $citation;
			}
			//* Conditionaly add location
			if ( !empty( $location) ) {
				echo '<span>'.$place.'</span>';
			}
		}
	echo '</cite>';
	echo '</blockquote>';

}

//* End testimonial structure
echo '</div>';

//* Edit post link
echo ''.edit_post_link( '(Edit)' ).'';

?>
