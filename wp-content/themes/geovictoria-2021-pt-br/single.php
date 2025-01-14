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

								<!-- <div class="col-12">
									<div class="card subscribe-sidebar h-100">
										<div class="card-body flex-column d-flex justify-content-center">
											<img class="subscribe-sidebar__envelope align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/envelope.svg'>

											<h4 class="card-title mb-4 text-center">
												Inscreva-se </b> em nosso blog e descubra novidades de seu interesse.</h3>
											</h4>

											<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#newsletterModal">
												<span class="white fw-bold">Inscreva-se agora!</span>
											</button>
										</div>

									</div>
								</div> -->

							</div>



						</aside>
					</div>
				</div>

				<!-- <div class="entry-banner mt-4 mb-4">
					<?php // $path = explode('/', $_SERVER["REQUEST_URI"]); 
					?>

					<a href="<?php // echo '/' . $path[1]; 
								?>/precos/?utm_source=pricing+&utm_medium=banner+calculadora&utm_campaign=campa%C3%B1a+pricing">
						<img class="d-none d-md-flex" src="<?php // echo esc_url(get_template_directory_uri()); 
															?>/dist/img/blog/banner-pricer-pt-br.png">
						<img class="d-flex d-md-none" src="<?php // echo esc_url(get_template_directory_uri()); 
															?>/dist/img/blog/banner-pricer-mobile-pt-br.png">
					</a>
				</div> -->
				<footer class="entry-footer col-lg-8">
					<h4>
						👋 Junte-se à nossa conversa!
					</h4>
					<p>Compartilhe o artigo e deixe sua opinião.</p>
					<div class="share-icon__container">

						<button class="btn share-icon__btn--fb d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/facebook-f-brands.svg">
							<small class="fw-lighter">Compartilhe </small>
						</button>
						<button class="btn share-icon__btn--in d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/linkedin-in-brands.svg">
							<small class="fw-lighter">Compartilhe </small>
						</button>


						<button class="btn share-icon__btn--tw d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/twitter-brands.svg">
							<small class="fw-lighter">Tweet</small>
						</button>

					</div>
				</footer><!-- .entry-footer -->

			</article><!-- #post-<?php the_ID(); ?> -->

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) : ?>

				<div class="row d-flex blog-bottom">
					<div class="col-12 col-lg-8 pe-lg-2">
						<?php comments_template(); ?>
					</div>
					<div class="col-4 d-none d-lg-flex justify-content-center align-items-center">
						<img class="header" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.png'>
					</div>
				</div>

		<?php
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div>
<?php
get_template_part('template-parts/modal', 'newsletter');
get_sidebar();
get_footer();
