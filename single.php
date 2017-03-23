<?php get_header(); ?>

<div class="section" id="scroll">
	<div class="wrapper">
		<div class="row">
			<div class="row__medium-8">
				<div class="addthis_inline_share_toolbox"></div>
				<p class="article-date"><strong>Published on: </strong><span><?php the_time(get_option('date_format')); ?></span>
				<br>
				<strong>By:</strong> admin <span><?php the_author(); ?></span></p>
				<!--p class="article-tags">Tags: <?php the_tags(); ?></p-->
				<p class="article-category">Category: <?php the_category(' '); ?></p>
				<span class="article-divider"></span>
				<?php 
					while(have_posts()): the_post();
						the_content();
					endwhile;
				?>
			</div>
			<div class="row__medium-4">
				<?php get_sidebar(); ?>
				<aside class="aside">
					<?php get_search_form(); ?>
				</aside>
			</div>
		</div> <!--/.row -->
		<br><br><hr>
	</div> <!--/.wrapper -->
</div> <!--/.section -->

<div class="section section--latest-posts latest-posts latest-posts--single">
	<div class="wrapper">
		<div class="section-title wow bounceInLeft">
			<span class="section-title--base">Latest entries</span>
			<span class="section-title--shadow">Latest entries</span>
		</div>
		<div class="row">
			<?php $args = array(
				'posts_per_page' => 3
			); ?>

			<?php $entries = new WP_Query($args); while($entries->have_posts()): $entries->the_post(); ?>
				
				<div class="row__medium-4 row__medium-4--posts">
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
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div> <!--/.row -->
	</div> <!--/.wrapper -->
</div> <!--/.section .latest-posts -->
<?php get_footer(); ?>