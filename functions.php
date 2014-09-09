<?php 


/*-----------------------------------------------------------------------------------*/
/* Options Framework Functions
/*-----------------------------------------------------------------------------------*/
/* Set the file path based on whether the Options Framework is in a parent theme or child theme */
if ( STYLESHEETPATH == TEMPLATEPATH ) {
	define('OF_FILEPATH', TEMPLATEPATH);
	define('OF_DIRECTORY', get_bloginfo('template_directory'));

} else {
	define('OF_FILEPATH', STYLESHEETPATH);
	define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}
/* These files build out the options interface.  Likely won't need to edit these. */

require_once (OF_FILEPATH . '/admin/admin-functions.php');		// Custom functions and plugins
require_once (OF_FILEPATH . '/admin/admin-interface.php');		// Admin Interfaces (options,framework, seo)

/* These files build out the theme specific options and associated functions. */
require_once (OF_FILEPATH . '/admin/theme-options.php'); 		// Options panel settings and custom settings
require_once (OF_FILEPATH . '/admin/theme-functions.php'); 	// Theme actions based on options settings

function theme_setup(){
	require_once( get_template_directory() . '/inc/assets/dev/assets.php' );
	require_once( get_template_directory() . '/epanel/custom_functions.php' );
	require_once( get_template_directory() . '/inc/nav-menu-walker.php' );
	require_once( get_template_directory() . '/inc/widgets.php' );
	require_once( get_template_directory() . '/inc/gen_functions.php' );
	require_once( get_template_directory() . '/inc/menu.php' );

	}
add_action( 'after_setup_theme', 'theme_setup' );

 // Remove Admin bar
    function remove_admin_bar()
    {
        return false;
    }
    add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar


 ?>
 
 <?
//add support for featured images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(356,228);
?>
<?php
add_filter('comment_form_defaults', 'remove_comment_styling_prompt');

function remove_comment_styling_prompt($defaults) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}
?>
<?php get_page( $page_id ) ?>
