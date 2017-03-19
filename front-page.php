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

<div class="section section--about section--categories about">
	<div class="wrapper">
		<div class="section-title wow jello">
			<span class="section-title--base">Categories</span>
			<span class="section-title--shadow">Categories</span>
		</div>
	</div> <!--/.wrapper -->
</div> <!--/.section .about -->

<!-- Categories -->

<div class="section categories categories--overlay" id="parlx">
	<div class="wrapper">
		<?php $categories = get_categories(); ?>
		<ul class="categories__list">
			<?php foreach ($categories as $category): ?>
				<li class="categories__list--item">
					<a href="<?php echo get_category_link($category->cat_ID); ?>">
						<?php echo $category->name; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul> <!--/.categories__list -->
	</div> <!--/.wrapper -->
</div>

<!-- End categories -->

<div class="section section--latest-posts latest-posts latest-posts--front-page">
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