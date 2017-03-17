		<footer class="footer">
			<div class="wrapper">
				<div class="footer__content">
					<div class="section-title wow bounceInRight">
						<span class="section-title--base section-title--footer">Connect</span>
						<span class="section-title--shadow">Connect</span>
					</div>
				</div>
				<div class="row">
					<div class="footer__content">
						<div class="row__large-8">
							<p class="footer__content--description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							   Esse non cumque sequi iusto, incidunt odit est temporibus 
						       facere rem aspernatur doloribus hic quo ipsum ut laborum, 
							   ab aperiam. Assumenda, perferendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							   Esse non cumque sequi iusto, incidunt odit est temporibus 
						       facere rem aspernatur doloribus hic quo ipsum ut laborum, 
							   ab aperiam. Assumenda, perferendis.
							</p>
						</div> <!--/.row__large-8 -->
						<div class="row__large-4 footer_menu">
							<!--?php dynamic_sidebar('contact_widget'); ?-->
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'social_menu',
									'container' => 'div',
									'container_class' => 'social',
									'menu_class' => 'social-menu',
									'link_before' => '<span class="sr-only">',
									'link_after' => '</span>'
								) );
							?>
						</div> <!--/.row__large-4 -->
					</div>
				</div> <!--/.row -->

				<p class="footer__info">
					Created by Josip Susic &#124; &#169; Random Coding Tutorials <?php echo date('Y'); ?>
				</p>
		  	</div> <!--/.wrapper -->
		</footer> <!--/.footer -->
		
		<div class="modal">
			<div class="modal__inner">
				<div class="wrapper">
					<?php get_search_form(); ?>
				</div>
			</div>
			<div class="modal__close" title="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
		</div> <!--/.modal -->

		<?php wp_footer(); ?> <!-- load js file at the bottom -->
		<!--script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58cc18bd4f61c2fa"></script--> 
	</body>
</html>