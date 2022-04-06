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
					<h1 class="mb-3 fw-bold">
						Nuestros <br><span class="blue">Casos de Éxito</span>
					</h1>
					<p>
						Conoce cómo hemos impactado en la gestión de
						Control de Asistencia en nuestros casos de éxito.
					</p>
					<?php
					// Nos posicionamos en el blog raiz, donde estara toda la informacion que pediremos.
					switch_to_blog(1);
					?>

					<?php

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = [
						'post_type'        => 'caso_de_exito',
						'posts_per_page' => -1
					];

					$casos_de_exito_not_filtered = new WP_Query($args);

					if (!empty($_GET['industria'])) {
						$selected_industria = $_GET['industria'];
						$args['tax_query'] = array(
							array(
								'taxonomy' => 'industria',
								'terms' => $selected_industria,
							)
						);
					}

					if (!empty($_GET['servicio'])) {
						$selected_servicio = $_GET['servicio'];

						$args['tax_query'] = array(
							array(
								'taxonomy' => 'servicio',
								'terms' => $selected_servicio,
							)
						);
					}

					if (!empty($_GET['pais'])) {
						$selected_pais = $_GET['pais'];
						$args['meta_query'] = array(
							array(
								'key' => 'pais_de_empresa',
								'value' => $selected_pais,
							)
						);
					}

					$args['paged'] = $paged;
					$args['posts_per_page'] = 6;

					$casos_de_exito_filtered = new WP_Query($args);

					$paises_totales = array();

					if ($casos_de_exito_not_filtered->have_posts()) {

						while ($casos_de_exito_not_filtered->have_posts()) {
							$casos_de_exito_not_filtered->the_post();
							$pais_de_empresa = get_post_meta($post->ID)["pais_de_empresa"][0];
							array_push($paises_totales, $pais_de_empresa);
						}
					}

					$paises_totales = array_unique($paises_totales);

					if (($key = array_search("No especificado", $paises_totales)) !== false) {
						unset($paises_totales[$key]);
					}

					?>


					<div class="row justify-content-center">
						<?php
						$industrias = get_terms(array(
							'taxonomy' => 'industria', 'hide_empty' => false
						));

						$servicios = get_terms(array(
							'taxonomy' => 'servicio', 'hide_empty' => false
						));
						?>

						<?php
						$target_url_array = explode('/', $_SERVER['REQUEST_URI']);
						$target_url = '/' . $target_url_array[1] . '/' . $target_url_array[2] ?>

						<form action="<?php echo $target_url; ?>" method="get">
							<div class="row mb-3">

								<div class="col-6 mb-3">
									<label>Industria</label>
									<select name="industria" class="search-filter">
										<option value="">
											<?php echo "Todas las industrias" ?>
										</option>

										<?php foreach ($industrias as $industria) : ?>
											<option <?php selected($industria->name, $selected_industria) ?> value="<?php echo $industria->name ?>">
												<?php echo $industria->name ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-6 mb-3">
									<label>País</label>
									<select name="pais" class="search-filter">
										<option value="">
											<?php echo "Todos los paises" ?>
										</option>

										<?php foreach ($paises_totales as $pais) : ?>
											<option <?php selected($pais, $selected_pais) ?> value="<?php echo $pais ?>">
												<?php echo $pais ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-12 mb-3">
									<label>Servicio</label>
									<select name="servicio" class="search-filter">
										<option value="">
											<?php echo "Todos los servicios" ?>
										</option>

										<?php foreach ($servicios as $servicio) : ?>
											<option <?php selected($servicio->name, $selected_servicio) ?>value="<?php echo $servicio->name ?>">
												<?php echo $servicio->name ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="row px-2 justify-content-center">
								<input class="btn button--bigblue" type="submit" value="Filtrar"></input>
							</div>
						</form>

					</div>

				</div>
			</div>
			<div class="hero__graphics--casos-de-exito col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/casos-de-exito/header-casos-de-exito.png'>
			</div>
		</div>
	</section>



	<section>
		<div class="container">
			<div class="row gy-4">
				<?php
				if ($casos_de_exito_filtered->have_posts()) {
					while ($casos_de_exito_filtered->have_posts()) {
						$casos_de_exito_filtered->the_post();
						get_template_part('template-parts/caso-de-exito-card');
					}
				?>
					<nav class="pagination-nav justify-content-center d-flex">

						<ul class="pagination ms-0">
							<?php $paginated_links = wpdocs_get_paginated_links($casos_de_exito_filtered); ?>

							<?php if ($paged == 1) : ?>
								<li class="page-item disabled">
									<a class="page-link" tabindex="-1">
										<?php echo "Anterior"; ?>
									</a>
								</li>
							<?php else : ?>
								<li class="page-item">
									<a class="page-link" href="<?php echo $paginated_links[(int)$paged - 2]->url; ?>">
										<?php echo "Anterior"; ?>
									</a>
								</li>
							<?php endif; ?>


							<?php foreach (wpdocs_get_paginated_links($casos_de_exito_filtered) as $link) : ?>

								<?php if ($link->isCurrent) : ?>
									<li class="page-item active">
										<a class="page-link" tabindex="-1">
											<strong><?php echo $link->page; ?></strong>
										</a>
									</li>
								<?php else : ?>
									<li class="page-item">
										<a class="page-link" href="<?php echo $link->url; ?>">
											<?php echo $link->page; ?>
										</a>
									</li>
								<?php endif; ?>

							<?php endforeach; ?>

							<?php if ($paged == count($paginated_links)) : ?>
								<li class="page-item disabled">
									<a class="page-link" tabindex="-1">
										<?php echo "Siguiente"; ?>
									</a>
								</li>
							<?php else : ?>
								<li class="page-item">
									<a class="page-link" href="<?php echo $paginated_links[(int)$paged]->url; ?>">
										<?php echo "Siguiente"; ?>
									</a>
								</li>
							<?php endif; ?>
						</ul>

						<?php

						// echo paginate_links(array(
						// 	'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
						// 	'total'        => $casos_de_exito_filtered->max_num_pages,
						// 	'current'      => max(1, get_query_var('paged')),
						// 	'format'       => '?paged=%#%',
						// 	'show_all'     => false,
						// 	'type'         => 'plain',
						// 	'end_size'     => 2,
						// 	'mid_size'     => 1,
						// 	'prev_next'    => true,
						// 	'prev_text'    => sprintf('<i></i> %1$s', __('Siguiente', 'text-domain')),
						// 	'next_text'    => sprintf('%1$s <i></i>', __('Anterior', 'text-domain')),
						// 	'add_args'     => false,
						// 	'add_fragment' => '',
						// ));
						?>
					</nav>
				<?php
				} else {
					echo '<h2>No se han encontrado casos de éxito</h2>';
					echo '<p>Intenta nuevamente cambiando el criterio del filtro.</p>';
				}

				// Cerramos la conexion con el blog raiz
				wp_reset_query();
				restore_current_blog();

				?>
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