<?php get_header('blog'); ?>
<section class="container content">
	<div class="row">
		<h5>index.php</h5>

		<?php while(have_posts()): the_post(); ?>
			
			<div class="entry">
				<!--?php the_post_thumbnail('entry', array('class' => 'img-responsive')); ?-->
				<div class="entry-content">
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
					<p>
						Published on: <span><?php the_time(get_option('date_format')); ?></span>
					</p>
					<p>
						By: <span><?php the_author(); ?></span>
					</p>

					<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
				</div>
			</div>

		<?php endwhile; ?>
	</div>
</section>
<?php get_footer(); ?>