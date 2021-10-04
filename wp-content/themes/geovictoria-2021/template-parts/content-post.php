<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geovictoria_2021
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-lg-12">
			<header class="entry-header">
				<div class="blog-card__tag-container">
					<?php foreach (get_the_category() as $category) : ?>
						<span class="blog-card__tag">
							<?php echo $category->name ?>
						</span>
					<?php endforeach; ?>
				</div>
				<?php
				the_title('<h1 class="entry-title">', '</h1>');

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta">

						<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
						<?php echo (esc_html_x('Por', 'Speaking of author', 'geovictoria-2021')) ?>
						<span class="fw-bold pe-2"><?php echo "Nicolas Cortés" ?></span>
						<i class="far fa-calendar-alt"></i>
						<?php echo get_the_date('m/d/y') ?>

					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8 pe-lg-5">
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'geovictoria-2021'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'geovictoria-2021'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
		<div class="col-lg-4">
			<aside id="secondary">
				<section class="recent-post-widget">
					<div class="row gy-4">
						<h2>Notas recientes</h2>
						<div class="blog-card--small card">
							<div class="blog-card__img col-4" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
							</div>
							<div class="card-body d-flex flex-column justify-content-between">
								<div class="blog-card__content">
									<div class="blog-card__tag-container">
										<span class="blog-card__tag">Recursos humanos</span>
										<span class="blog-card__tag">Productividad laboral</span>
									</div>
									<h6 class="card-title fw-bolder">
										How to hold your team accountable without micromanaging
									</h6>
									<div class="blog-card__author-container d-flex card-text">
										<div class="col-12 text-end">
											<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-card--small card">
							<div class="blog-card__img col-4" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
							</div>
							<div class="card-body d-flex flex-column justify-content-between">
								<div class="blog-card__content">
									<div class="blog-card__tag-container">
										<span class="blog-card__tag">Recursos humanos</span>
										<span class="blog-card__tag">Productividad laboral</span>
									</div>
									<h6 class="card-title fw-bolder">
										How to hold your team accountable without micromanaging
									</h6>
									<div class="blog-card__author-container d-flex card-text">
										<div class="col-12 text-end">
											<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-card--small card">
							<div class="blog-card__img col-4" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/test-img2.webp')">
							</div>
							<div class="card-body d-flex flex-column justify-content-between">
								<div class="blog-card__content">
									<div class="blog-card__tag-container">
										<span class="blog-card__tag">Recursos humanos</span>
										<span class="blog-card__tag">Productividad laboral</span>
									</div>
									<h6 class="card-title fw-bolder">
										How to hold your team accountable without micromanaging
									</h6>
									<div class="blog-card__author-container d-flex card-text">
										<div class="col-12 text-end">
											<span class="blog-card__date"><i class="far fa-calendar-alt"></i>08/09/2021</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card subscribe-sidebar h-100">
							<div class="card-body flex-column d-flex justify-content-center">
								<h4 class="card-title mb-4 text-center">
									Descarga el e-book gratis
								</h4>
								<img class="subscribe-sidebar__envelope align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg'>



								<?php echo do_shortcode('[contact-form-7 id="135669" title="Suscripcion Sidebar"]') ?>
							</div>

						</div>

						<div class="card subscribe-sidebar h-100">
							<div class="card-body flex-column d-flex justify-content-center">

								<h4 class="card-title mb-4 text-center">
									Sé el primero en recibir nuevos contenidos.
								</h4>
								<img class="subscribe-sidebar__envelope align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg'>


								<?php echo do_shortcode('[contact-form-7 id="135669" title="Suscripcion Sidebar"]') ?>
							</div>

						</div>

					</div>
				</section>


			</aside>
		</div>
	</div>



	<footer class=" entry-footer">
		<?php geovictoria_2021_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->