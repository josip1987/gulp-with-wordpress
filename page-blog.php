<?php get_header('blog'); 
/*
* Template Name: Blog temp
*/
?>
<h1>page-blog.php</h1>
<div class="section section--latest-posts latest-posts">
	<div class="wrapper">
		<div class="section-title wow bounceInLeft">
			<span class="section-title--base">Latest entries</span>
			<span class="section-title--shadow">Latest entries</span>
		</div>
		<div class="section-description">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Consequatur neque voluptas sint ullam itaque hic odio quia provident, 
			dicta ad laboriosam odit, fugiat omnis, earum natus ab qui aut accusa
			ntium.</p>
		</div>
		<div class="row">
			<!--<?php $args = array(
				'posts_per_page' => -1
			); ?> -->

			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'posts_per_page' => 3,
					'paged' => $paged
				);
			?>

			<?php $entries = new WP_Query($args); while($entries->have_posts()): $entries->the_post(); ?>
				
				<div class="row__medium-4">
					<div class="latest-posts__content latest-posts__content--shadow wow bounceInLeft">
						<?php the_post_thumbnail('entry', array('class' => 'latest-posts__image')); ?>
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

			<ul class="pagination clear">
				<li>
					<?php 
						if(function_exists(custom_pagination)) {
							custom_pagination($entries->max_num_pages,"",$paged);
						}
					?>
				</li>
			</ul>
		</div> <!--/.row -->
	</div> <!--/.wrapper -->
</div> <!--/.section .latest-posts -->

<?php get_footer(); ?>