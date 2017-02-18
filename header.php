<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

	<header class="header">
		<div class="row">
			<div class="header__logo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/app/assets/images/logo.png" alt="Logo Image">
			</div>
			<div class="header__menu">
				<?php wp_nav_menu(array(
					'theme_location' => 'main_menu'
				) ); ?>
			</div>
		</div>
	</header>
	
