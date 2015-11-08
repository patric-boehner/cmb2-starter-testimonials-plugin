# Template Testimonials Plugin
Template for a basic testimonials custom post type plugin with custom meta fields using CMB2

*This is my first public repo. I haven't looked up what the recommended information to go into the readme.md file is, so for the moment you can check out the reademe.txt file for the moment*

## To Do:
 1. ~~The single and archive post type will share vary similar structure so i should break out the main content structure into a separate part file to include into the respective templates~~.
   - Structure of the single testimonial post type has been moved to its own part file ```content-testimonial.php```, to make it easier to reuse the structure in both single and archive template files.
 2. Build the archive post template for testimonials.

### Source:
- https://codex.wordpress.org/Writing_a_Plugin  
**Custom Post Type Information**  
- https://codex.wordpress.org/Post_Types  
- https://codex.wordpress.org/Function_Reference/register_post_type  
- http://codex.wordpress.org/Custom_Fields  
- http://codex.wordpress.org/Function_Reference/register_taxonomy  
**CMB2 Information**  
- https://github.com/WebDevStudios/CMB2/wiki/Tips-&-Tricks#inject-static-content-in-a-field  
- https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data  
