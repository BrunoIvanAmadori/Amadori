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

	<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">
		<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold text-center text-lg-start">
						¡Gracias por contactarte con nosotros!
					</h1>
					<h4 class="fw-light mb-4 anime-fadein text-center text-lg-start">
						Un especialista pronto se comunicará contigo.
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