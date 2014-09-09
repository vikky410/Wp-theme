<?php
// Load HTML5 Blank styles
function ck_styles()
{
	wp_register_style('btcsst', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('btcsst'); // Enqueue it!
	wp_register_style('btcss', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1.0', 'all');
    wp_enqueue_style('btcss'); // Enqueue it!
	
	wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('custom'); // Enqueue it!
	
	
	
   /* wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it*/!
    
    wp_register_style('ck', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('ck'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'ck_styles'); // Add Theme Stylesheet

?>