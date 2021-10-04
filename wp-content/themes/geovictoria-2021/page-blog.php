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

<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="hero__graphics col-12 col-md-6 mb-5">
				<img class="header" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.webp'>
			</div>
			<div class="col-12 col-md-6 justify-content-center">
				<img class="logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-blog.svg'>
				<h3 class="fw-light">Herramientas, tips, noticias y mucho más</h3>
			</div>
		</div>
	</section>
	<?php

	$the_newest_post = new WP_Query(
		array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 5,
			'order' => 'DESC',
			'orderby' => 'ID',
		)
	);
	?>



	<div class="container-fluid px-0 blog-content">
		<section class="container last-post">
			<div class="row gy-4">
				<h1 class="mb-4">Nuevas tecnologías</h1>
				<div class="col-12 col-md-8">
					<div class="blog-card--big card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
						</div>
						<div class="blog-card__content">
							<div class="blog-card__tag-container">
								<span class="blog-card__tag">Recursos humanos</span>
								<span class="blog-card__tag">Productividad laboral</span>
							</div>
							<h2 class="card-title">
								Latam Microsoft - Partner of the Year
							</h2>
							<p class="card-text fw-light fs-5">
								Una empresa dedicada a hacer cosas varias.
							</p>
							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>

					</div>
				</div>
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
				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</section>



		<section class="container recent-post">
			<div class="row gy-4">
				<h2 class="mb-4">Notas Recientes</h2>
				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="blog-card card">
						<div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img.webp')">
						</div>
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="blog-card__content">
								<div class="blog-card__tag-container">
									<span class="blog-card__tag">Recursos humanos</span>
									<span class="blog-card__tag">Productividad laboral</span>
								</div>
								<h5 class="card-title">
									Latam Microsoft - Partner of the Year
								</h5>
								<p class="card-text">
									Una empresa dedicada a hacer cosas varias.
								</p>
							</div>

							<div class="blog-card__author-container d-flex card-text">
								<div class="col-8">
									<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
									<span class="blog-card__author">Por <span class="fw-bold">Nicolás Cortés</span></span>
								</div>
								<div class="col-4 text-end">
									<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- row -->
		</section>

		<div class="container show-more">
			<div class="row justify-content-center">
				<div class="col-12 d-flex justify-content-center">
					<button class="button--bigblue">
						<i class="far fa-eye"></i>
						Mostrar más
					</button>
				</div>
			</div>
		</div>

		<section class="container categories mt-4 mb-4">
			<div class="row">
				<h2 class="mb-4">Categorias</h2>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Recursos humanos
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Productividad laboral
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Innovación tecnológica
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Gestión de personal
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Vida laboral
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-4">
					<div class="category button--blueborder">
						<i class="far fa-folder-open"></i>
						Mundo GV
					</div>
				</div>
			</div>
		</section>


		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg">

	</div>





	<section class="container-fluid bg-blue-2 subscribe-cta">
		<div class="container">
			<div class="row text-center justify-content-center">
				<div class="contact__form d-flex align-items-center flex-column">
					<img class="subscribe-cta__envelope align-self-center" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg">
					<div class="col-md-6">
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
