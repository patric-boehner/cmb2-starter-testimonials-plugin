=== Testimonials - Custom Post Type ===
Contributors: Patrick Boehner
Requires at least: 3.0
Tags: custom post types, testimonials, cmb2
Tested up to: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Custom post type for creating testimonial postings with custom meta fields.

== Description ==
Custom post type for Testimonials. This is a default plugin that must be used as part of the sites functionality. Removing or turning this plugin off will effect your ability to edit and display testimonials on your site. It can be used with any WordPress theme as long as this plugin is active.

== Required ==
This plugin works in conjunction with the plugin CMB2, the custom metabox library plugin. Without this plugin installed, custom meta fields in the testimonials post type will not be visible within the post editor. You can find CMB2 within the wordpress plugin directory. https://wordpress.org/plugins/cmb2/

== Notice ==
If you switch themes but keep this plugin active (and all its required components), you will continue to see the testimonials post type in the admin area. You will be able to create and edit those posts. *But they will not display on the front end of your website as all the post information is held within custom metadata fields.

In order to show the posts on the front end of your website, your new theme's templates will need to be adapted to display the custom metadata. You can learn more about this at the CMB2 github repository: https://github.com/WebDevStudios/CMB2/wiki

== Installation ==
1. Manually upload the "cpt-testimonials" plugin to your "/wp-content/plugins/" directory.
   - Alternatively upload the cpt-testimonials.zip file through the "Plugins" menu in your wordpress admin by clicking "Add New" > "Upload Plugin".
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Go to the visit to "Settings" > "Permalinks" menu in WordPress after installing the plugin and save the permalinks settings.
4. Download CMB2 from the wordpress plugin directory, https://wordpress.org/plugins/cmb2/
5. Manually upload the "cmb2" plugin to your "/wp-content/plugins/" directory.
6. Activate the CMB2 plugin through the "Plugins" menu in WordPress.

== Changelog ==
8.19.15
- Setup the custom post type
8.25.15
- Add support for CMB2 and custom metaboxes
9.26.15
- Updated readme text
11.7.15
- Updating cpt name
- Updating readme text and instructions
- Updating version number to avoid conflict
- Changing post type name to pbcpt_testimonials
- Updating license information
- Add flush rewrite rule
- Add custom metafields for a url and image
11.8.15
- Add location custom meta field
- Add sample template files
- Cleanup notes and readme files
- Add support for dashboard "At A Glance"
- Add custom metadata to admin edit column
- Add custom taxonomy but have left it off by default
- Updated the quote text area escape function to better accommodate <p> tags.
11.10.15
- Updating cite conditional statement to avoid empty output.
11.11.15
<<<<<<< HEAD
- Remove support for adding custom post type to admin at a glance widget.
=======
- Remove support for admin At A Glance widget till i understand it better.
<<<<<<< HEAD
>>>>>>> develop
=======
11.13.15
- Updating taxonomy parameter
- Updating citation structure and and remove any hard backed styling markup.
<<<<<<< HEAD
- Add sass sample
>>>>>>> develop
=======
- Add sass sample and link to code pen sample
- Adding title attribute
- Updated structure with classes to avoid overly specific selectors and to handle styling of names with no link attribute.
<<<<<<< HEAD
>>>>>>> develop
=======
- Added example file for adding review microdata to body of testimonial pages using the genesis specific filter.
>>>>>>> develop
