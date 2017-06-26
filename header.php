<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full') ?>
	<?php $featured = $featured[0]; ?>

	<header class="header">
		<div class="header--wrapper">
			<div class="header__logo">
				<a href="<?php echo esc_url(home_url('/')) ?>">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/logo.png" alt="Logo Image">
				</a>
				<div class="header__toggle">
					<div class="header__toggle--middle"></div>
				</div>
			</div>
			<div class="header__menu">
				<?php wp_nav_menu(array(
					'theme_location' => 'main_menu'
				) ); ?>
			</div> <!--/.header__menu -->
		</div> <!--/.wrapper -->
	</header> <!--/.header -->

	<?php if(is_category()): ?>
		<div class="large-hero" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/circles.png); 
		background-repeat: repeat; background-attachment: fixed;">
	<?php elseif (is_single()): ?>
		<div class="large-hero" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/lined_paper.png); 
		background-repeat: repeat; background-attachment: fixed;">
	<?php elseif (is_search()): ?>
		<div class="large-hero" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/lined_paper.png); 
		background-repeat: repeat; background-attachment: fixed;">
	<?php else: ?>
	<div class="large-hero" style="background-image:url(<?php echo $featured ?>); 
		background-repeat: no-repeat; background-size: cover; 
		background-attachment: fixed; background-position: center center;">
	<?php endif; ?>
		<div class="wrapper">
			<div class="large-hero__text-content">
				<?php if(is_front_page()): ?>
					<?php $description = get_bloginfo('description', 'display'); ?>
					<div class="large-hero__subtitle">
						<h2 class="large-hero__subtitle wow bounceInLeft  data-wow-delay="5s"">
							<?php echo $description; ?>
							<span class="large-hero__subtitle--add wow 
							bounceInRight" data-wow-delay="2s">&#46;com</span>
						</h2>
					</div>
					<div class="arrow" id="scroll-down">
						<a href="#"><span></span>Scroll down</a>
					</div>
				<?php elseif (is_category()): ?>
					<div class="large-hero__subtitle">
						<h2 class="large-hero__subtitle wow bounceInLeft  data-wow-delay="5s"">
							<?php echo the_archive_title(); ?>
						</h2>
					</div>
				<?php elseif (is_search()): ?>
					<div class="large-hero__subtitle">
						<h2 class="large-hero__subtitle wow bounceInLeft  data-wow-delay="5s"">
							<?php echo "Search Results" ?>
						</h2>
					</div>
				<?php else: ?>
					<div class="large-hero__subtitle">
						<h2 class="large-hero__subtitle wow bounceInLeft  data-wow-delay="5s"">
							<?php echo the_title(); ?>
						</h2>
					</div>
				<?php endif; ?>
				<!--div class="arrow" id="scroll-down">
					<a href="#"><span></span>Scroll down</a>
				</div-->
			</div> <!--/.large-hero__text-content -->
		</div> <!--/.large-hero -->
	</div> <!--/.large-hero -->
	

<!--/pop-up 
<div class="pop-up">
  <div id="pop-up">
    <div class="container">
      <h1></h1>
      <p>tips</p>
      <input type="email" placeholder="email" required>
      <button>Hii Ya</button>
      <div class="cross">x</div>
    </div>
  </div>
</div>-->