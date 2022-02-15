<?php

/*
Template Name: Casos de Éxito
*/

get_header();
?>
<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center">
					<div class="site-branding mb-3">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logo.png">
					</div>
					<h1 class="gray fw-bold">
						Nuestros
					</h1>
					<h1 class="blue mb-3 fw-bold">
						CASOS DE ÉXITO
					</h1>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/header-construccion.png'>
			</div>
		</div>
	</section>
	<section class="container categories mt-4 mb-4">
		<div class="row justify-content-center">
			<h2 class="mb-4">Selecciona la industria</h2>
			<?php
			$terms = get_terms(array(
				'taxonomy' => 'industria', 'hide_empty' => false
			));
			?>
			<?php foreach ($terms as $taxonomy) : ?>
				<div class="col-12 col-md-6 col-lg-6 mb-4">
					<a href=<?php echo '#' . $taxonomy->name ?>>
						<div class="category button--blueborder">
							<i class="far fa-folder-open"></i>
							<?php echo $taxonomy->name ?>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
	<?php

		 = get_term_by('slug', 'seleccion-portada', 'industria')->term_id;
	$populares_portada_id = get_term_by('slug', 'populares-portada', 'post-tag')->term_id;

	$seleccionadas_por_editor = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1,
			'tag_slug__in' => 'seleccion-portada'
		)
	);

	$populares = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'tag_slug__in' => 'popular-portada'

		)
	);

	$recientes = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'tag__not_in' => [	, $populares_portada_id]
		)
	);
	?>



	<div class="container-fluid px-0 blog-content">

		<section class="container popular-post">
			<div class="row justify-content-center gy-4">
				<h2 class="mb-4">Notas populares</h2>
				<?php
				if ($populares->have_posts()) {
					while ($populares->have_posts()) {
						$populares->the_post();
						get_template_part('template-parts/blogcard');
					}
					wp_reset_postdata();
				}
				?>
			</div> <!-- row -->
		</section>



		<section class="container recent-post">
			<div class="row justify-content-center gy-4">
				<h2 class="mb-4">Notas Recientes</h2>
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


				<?php echo do_shortcode('[ajax_load_more id="blog" container_type="div" post_type="post" posts_per_page="3" offset="4" pause="true" images_loaded="true" scroll="false" button_label="Mostrar más" transition_container_classes="row mb-4"]');
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


		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg">

	</div>





	<section class="container-fluid bg-blue-2 subscribe-cta">
		<div class="container">
			<div class="row text-center justify-content-center">
				<div class="contact__form d-flex align-items-center flex-column">
					<img class="subscribe-cta__envelope align-self-center" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg">
					<div class="col-md-7">
						<h3 class="mb-4"><b>
								Suscríbete</b> a nuestro blog y enterate de tus noticias de interés.</h3>
						<button class="fw-bold button--bigwhite w-100 mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#newsletterModal">
							¡Suscribirme ahora!
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_template_part('template-parts/modal', 'newsletter');
get_footer();
?>