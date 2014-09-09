
<?php
// HTML5 Blank navigation
function ck_nav1()
{ 
?>
<nav class="navbar yamm navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
               
               <div id="logo"> 
               <img id="default-logo" src="<?php echo get_option('of_logo') ?>" alt="Starhotel" style="height:44px;"> 
               <img id="retina-logo" src="<?php echo get_option('of_logo') ?>" alt="Starhotel" style="height:44px;"> 
               </div>
            </a>
    </div>

        <?php
		
		
		$defaults = array( 
				'theme_location'	=>	'header-menu',
				'container_id'      => 'bs-example-navbar-collapse-1',
				//'container'       => 'div',
				'menu_class'		=>	'nav navbar-nav',
				'container_class' 	=>  'collapse navbar-collapse',
				'depth'			=>	3,
				'items_wrap'      => '<div class="container"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'fallback_cb'		=>	false,
				'walker'		=>	new The_Bootstrap_Nav_Walker
				);
            wp_nav_menu(
			$defaults
            );
        ?>
    </div>
</nav>
<?php } ?>







<?php
// HTML5 Blank navigation
function ck_nav()
{
		/*	$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);*/
		//<div class="container">
		
		
	$defaults = array( 
				'theme_location'	=>	'header-menu',
				'container_id'      => 'sticky',
				//'container'       => 'div',
				'menu_class'		=>	'nav navbar-nav',
				'container_class' 	=>  'navbar yamm navbar-default',
				'depth'			=>	3,
				'items_wrap'      => '<div class="container"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
				'fallback_cb'		=>	false,
				'walker'		=>	new The_Bootstrap_Nav_Walker
				);

   wp_nav_menu( $defaults );
}

// Register HTML5 Blank Navigation
// Register HTML5 Blank Navigation
function register_ck_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'ck'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'ck'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'ck') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}
add_action('init', 'register_ck_menu'); // Add HTML5 Blank Menu

?>
