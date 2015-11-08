# Template Testimonials Plugin
A basic template for a simple and customizable testimonials plugin for wordpress utilizing a custom post type, optional custom taxonomy, and custom meta fields using the [CMB2](https://github.com/WebDevStudios/CMB2) toolkit.

This should be an easy template to reuses and customize in future projects.

*This is my first public repo so i am still figuring out how best to use the ```readme.md``` file. Till it's full flushed out you can also check out the ```readme.txt``` file.*

## Contents
The template testimonials plugins contains the following files:

- ```README.md```. The file your currently reading.
- ```readme.txt```. The required wordpress plugin readme with additional details and change log.
- ```LICENSE```. The GPLv2 license text.
- ```index.php```. Never hurts to include a blank index file.
- ```sample template files```. See the sample files section bellow for further details.
- ```cpt-testimonials.php```. The primary plugin file in which all other part files are included.
- ```includes```. Folder containing all the necessary part files.
   - ```testimonials-cpt.php```. Contains the function to register the custom post type.
   - ```testimonials-taxonomy.php```. Contains the function to register a custom taxonomy. By default it has been commented out.
   - ```testimonials-metaboxes.php```. Contains the functions to register the custom meta boxes.
   - ```testimonials-notices.php```. Contains any plugin notices. In particular a check to see if CMB2 is already installed upon the plugins activation.
   - ```testimonials-edit-columns.php```. Contain the functions needed to output the custom meta data in the admin edit screen columns.
   - ```testimonials-dashboard.php```. Contains a function to add the cpt's post count to the Dashboard's ```At A Glance``` widget.

## Features
It comes with a few basic metadata fields:
- Quote:
- Client Name:
- Website URL:
- Location:
- Client Image:

Since the custom meta fields are built with the CMB2 toolkit, customizing the available fields is relatively simple. See the list of [available field types](https://github.com/WebDevStudios/CMB2/wiki/Field-Types) for possibilities of expanding the testimonial fields.

- Custom Taxonomy.   
The custom taxonomy is commented out in the ```cpt-testimonials.php``` file by default.

## Sample Files
The template plugin contains a folder called ```sampel template files```. This folder contains samples of the necessary theme template files to output the custom metaboxes for the testimonial post type.

##### Notice
I build the post type sample template files on the [Genesis Framework ](http://my.studiopress.com/themes/genesis/). The plugin itself will run independent of the theme being used, but the ```archive-``` and ```single-``` sample template files contain functions and hooks specific to the Genesis Framework. Each is using the ```get_template_part( 'content', 'testimonial', get_post_format() );``` function to include the ```content-testimonial.php``` file.

The ```content-testimonial.php``` contains all the functions to output the testimonials custom metadata and all its basic markup structure and can be used within any theme. You will simply need to modify your loop to include it.

##### Contents
- ```archive-pbcpt_testimonials.php```
- ```single-pbcpt_testimonials.php```
- ```content-testimonial.php```

## Installation
1. Manually upload the ```cpt-testimonials``` plugin to your ```/wp-content/plugins/``` directory.
   - Alternatively upload the cpt-testimonials.zip file through the ```Plugins``` menu in your wordpress admin by clicking ```Add New``` > ```Upload Plugin```.
2. Activate the plugin through the ```Plugins``` menu in WordPress.
3. Go to the visit to ```Settings``` > ```Permalinks``` menu in WordPress after installing the plugin and save the permalinks settings.
4. Download CMB2 from the wordpress plugin directory, https://wordpress.org/plugins/cmb2/
5. Manually upload the ```cmb2``` plugin to your ```/wp-content/plugins/``` directory.
6. Activate the CMB2 plugin through the ```Plugins``` menu in WordPress.

## Required Plugins
CMB2 can be built within the plugin itself but for the sake of keeping the template plugin easy to update and expand upon, i have not included it.

To use the plugin as is, you will need to install the following plugin:

- [CMB2](https://github.com/WebDevStudios/CMB2)

## To Do
 1. ~~The single and archive post type will share vary similar structure so i should break out the main content structure into a separate part file to include into the respective templates~~.
      - Structure of the single testimonial post type has been moved to its own part file ```content-testimonial.php```, to make it easier to reuse the structure in both single and archive template files.
 2. ~~Build the archive post template for testimonials~~.
      - Done, though in reality i think can just create a function to reuse one of the template files and tell wordpress to use if for both. Haven't tried this on singe & archive post type so will have to give it a shot.

## Change Log
Please see the the ```readme.txt``` file included in the root of the plugin’s directory for a complete change log.

## License
License: GPLv2 or later  
License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
>
> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

A copy of the license is included in the root of the plugin’s directory. The file is named ```LICENSE```.

## Credits & References
- https://codex.wordpress.org/Writing_a_Plugin  
**Custom Post Type Information**  
- https://codex.wordpress.org/Post_Types  
- https://codex.wordpress.org/Function_Reference/register_post_type  
- http://codex.wordpress.org/Custom_Fields  
- http://codex.wordpress.org/Function_Reference/register_taxonomy  
**CMB2 Information**  
- https://github.com/WebDevStudios/CMB2/wiki/Tips-&-Tricks##inject-static-content-in-a-field  
- https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data  
