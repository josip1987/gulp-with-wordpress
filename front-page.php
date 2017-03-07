<?php get_header(); ?>
	<!--?php get_sidebar(); ?-->

<div class="section section--about about">
	<div class="wrapper">
		<div class="section-title wow jello">
			<span class="section-title--base">About</span>
			<span class="section-title--shadow">About</span>
		</div>
		<div class="section-description">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Consequatur neque voluptas sint ullam itaque hic odio quia provident, 
			dicta ad laboriosam odit, fugiat omnis, earum natus ab qui aut accusa
			ntium.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Consequatur neque voluptas sint ullam itaque hic odio quia provident, 
			dicta ad laboriosam odit, fugiat omnis, earum natus ab qui aut accusa
			ntium.
			</p>
		</div>
	</div> <!--/.wrapper -->
</div> <!--/.section .about -->

<!-- Parallax divider -->

<div class="section parallax-divider" id="parlx">
	<div class="wrapper">
		<div class="parallax-divider__image">
			<ul class="parallax-divider__list">
				<li>HTML/CSS</li>
				<li>JavaScript</li>
				<li>jQuery</li>
				<li>Design</li>
				<li>Responsive</li>
			</ul>
		</div>
	</div>
</div>

<!-- End parallax divider -->

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
			<?php $args = array(
				'posts_per_page' => 3
			); ?>

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
		</div> <!--/.row -->
	</div> <!--/.wrapper -->
</div> <!--/.section .latest-posts -->
<?php get_footer(); ?>