<?php

/*
Template Name: Blog
*/

get_header();
?>
<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column-reverse flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="hero__graphics col-12 col-md-6 mb-5">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.png'>
			</div>
			<div class="col-12 col-md-6 justify-content-center anime-fadein-childs">
				<img class="logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-blog.svg'>
				<h3 class="fw-light">Ferramentas, dicas, novidades e muito mais</h3>
			</div>
		</div>
	</section>
	<?php

	$recientes = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 6,
			'tag__not_in' => [$seleccion_portada_id, $populares_portada_id]
		)
	);
	?>




	<section class="container recent-post">
		<div class="row justify-content-center gy-4">
			<h2 class="mb-4">Notas Recentes</h2>
			<!-- <div class="ajax d-flex flex-wrap"> -->
			<?php
			if ($recientes->have_posts()) {
				while ($recientes->have_posts()) {
					$recientes->the_post();
					get_template_part('template-parts/blogcard');
				}
				//echo do_shortcode('[cpt_ajax_load_more post_type="post" template="blogcard" item_class="blog-card" posts_per_page="3" grid="3"]');
				//	wp_reset_postdata(); 


			}
			?>

			<!-- </div> -->


			<?php echo do_shortcode('[ajax_load_more id="blog" container_type="div" post_type="post" posts_per_page="3" offset="4" pause="true" images_loaded="true" scroll="false" button_label="Mostre mais" transition_container_classes="row mb-4"]');
			?>

		</div> <!-- row -->
	</section>
	<section class="container recent-post-load-more">

	</section>

	<!-- <div class="container show-more">
			<div class="row justify-content-center">
				<div class="col-12 d-flex justify-content-center">
					<button class="button--bigblue">
						<i class="far fa-eye"></i>
						Mostrar más
					</button>
				</div>
			</div>
		</div> -->


	<!-- <img class="bg-head-blue" src="<?php // echo esc_url(get_template_directory_uri()); 
										?>/dist/img/bg-head-blue.svg"> -->

	</div>





	<!-- <section class="container-fluid bg-blue-2 subscribe-cta">
		<div class="container">
			<div class="row text-center justify-content-center">
				<div class="contact__form d-flex align-items-center flex-column">
					<img class="subscribe-cta__envelope align-self-center" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg">
					<div class="col-md-7">
						<h3 class="mb-4"><b>
								Inscreva-se </b> em nosso blog e descubra novidades de seu interesse.</h3>
						<button class="fw-bold button--bigwhite w-100 mt-3 anime-fadein mb-4" data-bs-toggle="modal" data-bs-target="#newsletterModal">

							Inscreva-se agora!
						</button>
					</div>
				</div>
			</div>
		</div>
	</section> -->
</main><!-- #main -->

<?php
get_template_part('template-parts/modal', 'newsletter');
get_footer();
?>