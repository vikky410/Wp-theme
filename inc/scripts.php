<?php
/*//cdn for bootstrap
function ck_header_bootstrap()
{	
	wp_register_script('btjs', 'http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array(), '3.0.3'); 
    wp_enqueue_script('btjs'); // Enqueue it!
	
	wp_register_style('btcss1',  'http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css', array(), '3.0.3');
    wp_enqueue_style('btcss1'); // Enqueue it!
	
	wp_register_style('btcss2',  'http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css', array(), '3.0.3');
    wp_enqueue_style('btcss2'); // Enqueue it!
}
add_action('init', 'ck_header_bootstrap'); // Add Custom Scripts to wp_head*/


// Load HTML5 Blank scripts (header.php)
function ck_header_scripts()
{
    if (!is_admin()) {
		
		 wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('jquery'); // Enqueue it!
		
		
		 wp_register_script('bt', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('bt'); // Enqueue it!
    
	
		wp_register_script('stick', get_template_directory_uri() . '/js/stickUp.min.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('stick'); // Enqueue it!
    	
		/*wp_deregister_script('jquery'); // Deregister WordPress jQuery
    	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '1.9.1'); // Google CDN jQuery
    	wp_enqueue_script('jquery'); // Enqueue it!*/
    	
    	/*wp_register_script('conditionizr', 'http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js', array(), '2.2.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!
        
        wp_register_script('modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!*/
        
        wp_register_script('ckscripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('ckscripts'); // Enqueue it!
    }
}
add_action('init', 'ck_header_scripts'); // Add Custom Scripts to wp_head

// Load HTML5 Blank conditional scripts
function ck_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}
add_action('wp_print_scripts', 'ck_conditional_scripts'); // Add Conditional Page Scripts
?>