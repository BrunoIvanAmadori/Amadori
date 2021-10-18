<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geovictoria_2021
 */

get_header();
?>
<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="hero__graphics col-12 col-md-6 mb-5">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.webp'>
			</div>
			<div class="col-12 col-md-6 justify-content-center anime-fadein-childs">
				<img class="logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-blog.svg'>
				<h3 class="fw-light">Herramientas, tips, noticias y mucho más</h3>
			</div>
		</div>
	</section>
	<?php

	$seleccionadas_por_editor = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1,
		)
	);

	$destacadas = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'offset' => 1
		)
	);

	$recientes = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'offset' => 1
		)
	);
	?>



	<div class="container-fluid px-0 blog-content">

		<section class="container last-post">
			<div class="row gy-4">
				<h1 class="mb-4">Selección del editor</h1>
				<?php
				if ($seleccionadas_por_editor->have_posts()) {
					while ($seleccionadas_por_editor->have_posts()) {
						$seleccionadas_por_editor->the_post();
						get_template_part('template-parts/blogcard', 'big');
					}
					wp_reset_postdata();
				}
				?>
				<div class="col-12 col-md-4">
					<div class="card subscribe-sidebar h-100">
						<div class="card-body flex-column d-flex justify-content-center">
							<img class="subscribe-sidebar__envelope align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg'>

							<h4 class="card-title mb-4">
								Sé el primero en recibir nuevos contenidos.
							</h4>

							<?php echo do_shortcode('[contact-form-7 id="135669" title="Suscripcion Sidebar"]') ?>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="container popular-post">
			<div class="row gy-4">
				<h2 class="mb-4">Notas populares</h2>
				<?php
				if ($destacadas->have_posts()) {
					while ($destacadas->have_posts()) {
						$destacadas->the_post();
						get_template_part('template-parts/blogcard');
					}
					wp_reset_postdata();
				}
				?>
			</div> <!-- row -->
		</section>

		<section class="container categories mt-4 mb-4">
			<div class="row">
				<h2 class="mb-4">Categorias</h2>
				<?php foreach (get_categories() as $category) : ?>
					<div class="col-12 col-md-6 col-lg-4 mb-4">
						<a href=<?php echo esc_url(get_category_link($category->term_id)) ?>>
							<div class="category button--blueborder">
								<i class="far fa-folder-open"></i>
								<?php echo $category->name ?>
							</div>
						</a>
					</div>

				<?php endforeach; ?>

			</div>
		</section>

		<section class="container recent-post">
			<div class="row gy-4">
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
						<h3 class="mb-4">Suscribete a nuestro blog y enterate de tus noticias de interés.</h3>
						<div class=" align-self-center"><?php echo do_shortcode('[contact-form-7 id="135669" title="Suscripcion Sidebar"]') ?></div>
					</div>


					<!-- <button class="button--bigwhite"> Enviar</button> -->
				</div>
			</div>
		</div>
	</section>


	<?php




	// // The Loop
	// if ($the_newest_post->have_posts()) {
	// 	echo '<ul>';
	// 	while ($the_newest_post->have_posts()) {
	// 		$the_newest_post->the_post();
	// 		echo '<li>' . get_the_title() . '</li>';
	// 	}
	// 	echo '</ul>';
	// } else {
	// 	// no posts found
	// }
	// /* Restore original Post Data */
	// wp_reset_postdata();
	?>
</main><!-- #main -->

<?php

get_footer();
