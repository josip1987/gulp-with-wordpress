<?php 
	function blog_styles() {

		//wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
     	//wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

		wp_enqueue_style('blog_stylesheet', get_stylesheet_uri());

		//wp_enqueue_script('jquery'); 

	}

	add_action('wp_enqueue_scripts', 'blog_styles');

	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'blogmenu')
	) );
?>