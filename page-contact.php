<?php 
/*
* Template Name: Page for Contact
*/
get_header(); ?>

<div class="section section--about about" id="scroll">
	<div class="wrapper">
		<div class="section-title wow jello">
			<span class="section-title--base">Get In Touch</span>
			<span class="section-title--shadow">Get In Touch</span>
		</div>
	</div> <!--/.wrapper -->
</div> <!--/.section .about -->

<section class="container content">
	<div class="wrapper">
		<div class="row">
			<div class="contact-form">
				<?php dynamic_sidebar('contact_widget'); ?>
			</div>	
		</div>
	</div>
</section>

<?php get_footer(); ?>