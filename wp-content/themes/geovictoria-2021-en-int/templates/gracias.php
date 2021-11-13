<?php

/*
Template Name: Gracias
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container justify-content-center">
		<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3 text-center text-lg-start">
					<h1 class="gray mb-3 fw-bold">
						Thank you for contacting us!
					</h1>
					<h4 class="fw-light mb-4 anime-fadein">
						A specialist will contact you soon so you can learn about our technological solution
					</h4>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png'>
			</div>
		</div>
	</section>


</main><!-- #main -->
<?php
get_footer();
?>