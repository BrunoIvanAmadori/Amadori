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
							<div class="notas-relacionadas">
								<h4 class="notas-relacionadas__title">Notas relacionadas</h4>
								<?php
								if ($relacionadas->have_posts()) {
									while ($relacionadas->have_posts()) {
										$relacionadas->the_post();
										get_template_part('template-parts/blogcard', 'small');
									}
									wp_reset_postdata();
								}
								?>
							</div>
							<div class="smart-cta">
								<!--HubSpot Call-to-Action Code --><span class="hs-cta-wrapper" id="hs-cta-wrapper-cc42b351-0ea9-4050-8d50-6853080bae44"><span class="hs-cta-node hs-cta-cc42b351-0ea9-4050-8d50-6853080bae44" id="hs-cta-cc42b351-0ea9-4050-8d50-6853080bae44">
										<!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a href="https://cta-redirect.hubspot.com/cta/redirect/7742864/cc42b351-0ea9-4050-8d50-6853080bae44"><img class="hs-cta-img" id="hs-cta-img-cc42b351-0ea9-4050-8d50-6853080bae44" style="border-width:0px;" height="414" width="331" src="https://no-cache.hubspot.com/cta/default/7742864/cc42b351-0ea9-4050-8d50-6853080bae44.png" alt="Conoce las tendencias que debes implementar este 2022 - Descarga el ebook aqui" /></a>
									</span>
									<script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
									<script type="text/javascript">
										hbspt.cta.load(7742864, 'cc42b351-0ea9-4050-8d50-6853080bae44', {
											"useNewLoader": "true",
											"region": "na1"
										});
									</script>
								</span><!-- end HubSpot Call-to-Action Code -->
							</div>

						</aside>
					</div>

				</div>



				<footer class="entry-footer col-lg-8">
					<h4>
						👋 ¡Únete a nuestra conversación!
					</h4>
					<p>Comparte el artículo y deja tu opinión.</p>
					<div class="share-icon__container">

						<button class="btn share-icon__btn--fb d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/facebook-f-brands.svg">
							<small class="fw-lighter">Compartir</small>
						</button>
						<button class="btn share-icon__btn--in d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/linkedin-in-brands.svg">
							<small class="fw-lighter">Compartir</small>
						</button>


						<button class="btn share-icon__btn--tw d-flex justify-content-center align-items-center">
							<img class="me-3" src="<?php echo get_template_directory_uri() ?>/dist/img/icons/twitter-brands.svg">
							<small class="fw-lighter">Twittear</small>
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
