<?php 
	function blog_styles() {
		wp_enqueue_style('blog_stylesheet', get_stylesheet_uri());
		wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/node_modules/animate.css/animate.min.css');
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('raleway', "https://fonts.googleapis.com/css?family=Raleway:400");
   	    wp_enqueue_style('bangers', "https://fonts.googleapis.com/css?family=Bangers");

   	    wp_enqueue_script('jquery');
		wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/node_modules/wow.js/dist/wow.min.js');
   	    wp_enqueue_script('App', get_stylesheet_directory_uri() . '/app/temp/scripts/App.js', array('jquery'), '1.0', true);
	}

	add_action('wp_enqueue_scripts', 'blog_styles');

	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'blogmenu'),
		'social_menu' => __('Social Menu', 'socialmenu')
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




	/***** PAGINATION *****/

	function custom_pagination($numpages = '', $pagerange = '', $paged='') {
	  if (empty($pagerange)) {
	    $pagerange = 2;
	  }
	  /**
	   * This first part of our function is a fallback
	   * for custom pagination inside a regular loop that
	   * uses the global $paged and global $wp_query variables.
	   *
	   * It's good because we can now override default pagination
	   * in our theme, and use this function in default queries
	   * and custom queries.
	   */
	  global $paged;
	  if (empty($paged)) {
	    $paged = 1;
	  }
	  if ($numpages == '') {
	    global $wp_query;
	    $numpages = $wp_query->max_num_pages;
	    if(!$numpages) {
	        $numpages = 1;
	    }
	  }
	  /**
	   * We construct the pagination arguments to enter into our paginate_links
	   * function.
	   */
	  $pagination_args = array(
	    'base'            => get_pagenum_link(1) . '%_%',
	    'format'          => 'page/%#%',
	    'total'           => $numpages,
	    'current'         => $paged,
	    'show_all'        => False,
	    'end_size'        => 1,
	    'mid_size'        => $pagerange,
	    'prev_next'       => True,
	    'prev_text'       => __('«'),
	    'next_text'       => __('»'),
	    'type'            => 'plain',
	    'add_args'        => false,
	    'add_fragment'    => ''
	  );
	  $paginate_links = paginate_links($pagination_args);
	  if ($paginate_links) {
	    echo "<nav class='custom-pagination'>";
	      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
	      echo $paginate_links;
	    echo "</nav>";
	  }
	}

	/***** END PAGINATION *****/
?>