<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!-- remove feature image with if statement ie needed -->
	<?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full') ?>

	<?php $featured = $featured[0]; ?>


	<header class="header">
		<div class="header--wrapper">
			<div class="header__logo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/logo.png" alt="Logo Image">
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

	<div class="large-hero" style="background-image:url(<?php echo $featured ?>); 
		background-repeat: no-repeat; background-size: cover; 
		background-attachment: fixed; background-position: center center;">
		<div class="wrapper">
			<div class="large-hero__text-content">
				<?php $description = get_bloginfo('description', 'display'); ?>
				<h1 class="large-hero__title wow bounceInRight">welcome to</h1>
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
			</div> <!--/.large-hero__text-content -->
		</div> <!--/.large-hero -->
	</div> <!--/.large-hero -->
	

<!--/pop-up 
<div class="pop-up">
  <div id="pop-up">
    <div class="container">
      <h1>Kung Foo Your Skills</h1>
      <p>Join the mailing list to be spammed with useless ninja tips</p>
      <input type="email" placeholder="email" required>
      <button>Hii Ya</button>
      <div class="cross">x</div>
    </div>
  </div>
</div>-->