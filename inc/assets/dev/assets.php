<?php
// Load HTML5 Blank scripts (header.php)
function ck_header_scripts()
{
    if (!is_admin()) {
		
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '1.11.0'); // Custom scripts
        wp_enqueue_script('jquery'); // Enqueue it!
		
		wp_register_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('bootstrap.min'); // Enqueue it!
		
		wp_register_script('bootstrap-hover-dropdown.min', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('bootstrap-hover-dropdown.min'); // Enqueue it!
		
		wp_register_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('owl.carousel.min'); // Enqueue it!
		
		wp_register_script('jquery.parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.parallax'); // Enqueue it!
		
		wp_register_script('jquery.nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.nicescroll'); // Enqueue it!
		
		wp_register_script('jquery.prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.prettyPhoto'); // Enqueue it!
		
		wp_register_script('jquery-ui-1.10.4.custom.min', get_template_directory_uri() . '/js/jquery-ui-1.10.4.custom.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery-ui-1.10.4.custom.min'); // Enqueue it!
		
		wp_register_script('jquery.jigowatt', get_template_directory_uri() . '/js/jquery.jigowatt.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.jigowatt'); // Enqueue it!
		
		wp_register_script('jquery.sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.sticky'); // Enqueue it!
		
		wp_register_script('waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('waypoints.min'); // Enqueue it!
		
		wp_register_script('jquery.isotope.min', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.isotope.min'); // Enqueue it!
		
		wp_register_script('jquery.gmap.min', get_template_directory_uri() . '/js/jquery.gmap.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.gmap.min'); // Enqueue it!
		
		wp_register_script('google', 'http://maps.google.com/maps/api/js?sensor=false', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('google'); // Enqueue it!
		
		wp_register_script('jquery.themepunch.plugins.min', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.plugins.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.themepunch.plugins.min'); // Enqueue it!
		
		wp_register_script('jquery.themepunch.revolution.min', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('jquery.themepunch.revolution.min'); // Enqueue it!
		
		wp_register_script('switch', get_template_directory_uri() . '/js/switch.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('switch'); // Enqueue it!
		
		wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.11.0', true); // Custom scripts
        wp_enqueue_script('custom'); // Enqueue it!
		
	
    }
}
add_action('init', 'ck_header_scripts'); // Add Custom Scripts to wp_head

// Load HTML5 Blank styles
function ck_styles()
{
/*<link rel="stylesheet" href="css/colors/turquoise.css" id="switch_style">*/
	
    wp_register_style('ck', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('ck'); // Enqueue it!
	
	wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('animate'); // Enqueue it!
	
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!
	
	wp_register_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome.min'); // Enqueue it!
	
	wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0', 'all');
    wp_enqueue_style('owl.carousel'); // Enqueue it!
	
	wp_register_style('owl.theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0', 'all');
    wp_enqueue_style('owl.theme'); // Enqueue it!
	
	wp_register_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.0', 'all');
    wp_enqueue_style('prettyPhoto'); // Enqueue it!
	
	wp_register_style('jquery-ui-1.10.4.custom.min', get_template_directory_uri() . '/css/smoothness/jquery-ui-1.10.4.custom.min.css', array(), '1.0', 'all');
    wp_enqueue_style('jquery-ui-1.10.4.custom.min'); // Enqueue it!
	
	wp_register_style('settings', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), '1.0', 'all');
    wp_enqueue_style('settings'); // Enqueue it!
	
	wp_register_style('theme', get_template_directory_uri() . '/css/theme.css', array(), '1.0', 'all');
    wp_enqueue_style('theme'); // Enqueue it!
	
	wp_register_style('turquoise', get_template_directory_uri() . '/css/colors/turquoise.css', array(), '1.0', 'all');
    wp_enqueue_style('turquoise'); // Enqueue it!
	
	wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive'); // Enqueue it!
	
	wp_register_style('font', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700', array(), '1.0', 'all');
    wp_enqueue_style('font'); // Enqueue it! 
	
	wp_register_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0', 'all');
    wp_enqueue_style('footer'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'ck_styles'); // Add Theme Stylesheet
?>