<?php

/*
Template Name: Casos de Exito
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

	<?php
	// Nos posicionamos en el blog raiz, donde estara toda la informacion que pediremos.
	switch_to_blog(1);
	?>

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

	$args = array(
		'post_type'        => 'caso_de_exito',
		'posts_per_page'   => 20,
	);

	$casos_de_exito = new WP_Query($args);

	if ($casos_de_exito->have_posts()) {

		while ($casos_de_exito->have_posts()) {
			$casos_de_exito->the_post();
			get_template_part('template-parts/blogcard');
		}
	}

	// Cerramos la conexion con el blog raiz
	wp_reset_query();
	restore_current_blog();

	?>

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