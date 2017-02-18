<?php 
	function blog_styles() {
		wp_enqueue_style('blog_stylesheet', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'blog_styles');

	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'blogmenu')
	) );

	add_theme_support('post-thumbnails' );


?>