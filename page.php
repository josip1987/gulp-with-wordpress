<?php get_header(); ?>
<h1>page.php</h1>
<section class="container content">
	<div class="row">
	<h5>page.php</h5>
		<?php if(is_page('contact')): ?>
			<div class="col-sm-8 col-sm-offset-2 contact-page">
				<?php while(have_posts()): the_post();
					the_content();
				endwhile; ?>
			</div>
		<?php else: ?>
			<?php 
				while(have_posts()): the_post();
					the_content();
				endwhile;
			?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>