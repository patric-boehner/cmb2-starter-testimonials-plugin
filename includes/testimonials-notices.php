<?php

/**
 * Help Notices
 * @author Patrick Boehner
 * @link http://www.patrickboehner.com
 * @package Testimonials
 * @version 1.0
 *
 */

 //**********************************************
 //* Security
 //**********************************************

 //* Blocking direct access to the plugin PHP file
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


 //**********************************************
 // Refresh Permalinks
 //**********************************************

 //**********************************************
 // Required Plugins
 //**********************************************

add_action('admin_notices', 'pb_testimonials_showAdminMessages');

// Create a warning message in the Admin area
function pb_testimonials_showAdminMessages()
{
	$plugin_messages = array();
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Check if CMB2 plugin is active
	if(!class_exists( 'cmb2' ))
	{
    // Wraning message
		$plugin_messages[] = 'This plugin requires you to install the <strong>CMB2</strong> plugin in order to fully use the plugins features. Please install and activate <strong>CMB2</strong> before activating this plugin</a>.';
	}
  // If not, display warning message
	if(count($plugin_messages) > 0)
	{
		echo '<div id="message" class="error">';
			foreach($plugin_messages as $message)
			{
				echo '<p>'.$message.'</p>';
			}
		echo '</div>';
	}
}
