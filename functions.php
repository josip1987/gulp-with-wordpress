<?php 
	function blog_styles() {
		wp_enqueue_style('blog_stylesheet', get_stylesheet_uri());
		wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/node_modules/animate.css/animate.min.css');
		wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:400");
   	    wp_enqueue_style('bangers', "https://fonts.googleapis.com/css?family=Bangers");

   	    wp_enqueue_script('jquery');  
   	    wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');
   	    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/app/assets/scripts/script.js', array('jquery'), '1.0', true);
	}

	add_action('wp_enqueue_scripts', 'blog_styles');

	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'blogmenu')
	) );

	//hook last item to wp_nav_menu
	function add_last_nav_item($items) {
	  return $items .= '<li><a href="#myModal" role="button" data-toggle="modal">Search</a></li>';
	}

	add_filter('wp_nav_menu_items','add_last_nav_item');

	add_theme_support('post-thumbnails' );

	add_image_size('entry', 400, 150, true);

	function blog_widgets() {
		register_sidebar(array(
			'name' => __('Contact Widget'),
			'id' => 'contact_widget',
			'description' => 'Contact Widgets'
		) );
	}

	add_action('widgets_init', 'blog_widgets');

?>