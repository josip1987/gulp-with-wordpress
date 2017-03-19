<?php get_header(); ?>
<div class="section section--latest-posts latest-posts latest-posts--search">
	<div class="wrapper">
		<div class="section-title wow bounceInLeft">
			<span class="section-title--base">Search Results</span>
			<span class="section-title--shadow">Search Results</span>
		</div>
		<p>Search results for <strong><?php echo get_search_query() ?></strong></p>
		<div class="row">
			<?php $args = array(
				//'post_type' => 'blog_post',
				'posts_per_page' => -1
			); ?>

			<?php while(have_posts() ): the_post(); ?>
				<div class="row__medium-4">
					<div class="latest-posts__content latest-posts__content--shadow wow bounceInLeft">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('entry', array('class' => 'latest-posts__image')); ?>
						</a>
						<h3 class="latest-posts--title"><?php the_title(); ?></h3>
						<p class="latest-posts--date">
							Published on: <span><?php the_time(get_option('date_format')); ?></span>
						</p>
						<p class="latest-posts--author">
							<strong>By:</strong> <span><?php the_author(); ?></span>
						</p>
						<button class="skew-button">
							<a href="<?php the_permalink(); ?>">Read more</a>
						</button>					
					</div>
				</div> <!--/.row__medium-4 -->
			<?php endwhile; wp_reset_postdata(); ?>
		</div> <!--/.row -->
	</div> <!--/.wrapper -->
</div> <!--/.section .latest-posts -->

<?php get_footer(); ?>