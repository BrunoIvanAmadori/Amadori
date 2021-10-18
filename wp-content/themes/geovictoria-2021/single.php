<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geovictoria_2021
 */

get_header();
$current_category = get_the_category()[0]->name;
$current_id = get_the_ID();

$relacionadas = new WP_Query(
	array(

		'post_type' => 'post',
		'category_name' => $current_category,
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'post__not_in' => [$current_id],
	)
)

?>
<div class="container">
	<main id="primary" class="site-main">

		<?php
		while (have_posts()) :
			the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<?php
					get_template_part('template-parts/content', get_post_type());
					wp_reset_postdata();
					?>
					<div class="col-lg-4">
						<aside id="secondary">

							<div class="row gy-4">
								<h4>Notas relacionadas</h4>
								<?php
								if ($relacionadas->have_posts()) {
									while ($relacionadas->have_posts()) {
										$relacionadas->the_post();
										get_template_part('template-parts/blogcard', 'small');
									}
									wp_reset_postdata();
								}
								?>
								<div class="card subscribe-sidebar h-100">
									<div class="card-body flex-column d-flex justify-content-center">
										<h4 class="card-title mb-4 text-center">
											Descarga el e-book gratis
										</h4>
										<img class="subscribe-sidebar__envelope align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg'>
										<p class="text-center">Descarga el ebook “Clima
											en el equipo de trabajo”
											totalmente gratis.
										</p>


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



						</aside>
					</div>
				</div>
				<footer class="entry-footer col-lg-8">
					<h4>
						¡Unete a nuestra conversación!
					</h4>
					<p class="fs-5">Te invitamos a compartir este artículo</p>
					<!-- <div class="share-icon__container">
			<div class="share-icon__circle">
				<i class="fab fa-facebook-f"></i>
			</div>
			<div class="share-icon__circle">
				<i class="fab fa-linkedin-in"></i>
			</div>
			<div class="share-icon__circle">
				<i class="fab fa-whatsapp"></i>
			</div>
			<div class="share-icon__circle">
				<i class="fab fa-twitter"></i>
			</div>


		</div> -->
				</footer><!-- .entry-footer -->

			</article><!-- #post-<?php the_ID(); ?> -->

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) : ?>

				<div class="row d-flex blog-bottom">
					<div class="col-8 pe-lg-2">
						<?php comments_template(); ?>
					</div>
					<div class="col-4 d-flex justify-content-center align-items-center">
						<img class="header" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.webp'>
					</div>
				</div>

		<?php
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div>
<?php
get_sidebar();
get_footer();
