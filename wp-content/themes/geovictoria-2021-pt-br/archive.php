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
$category = get_queried_object();

$tag_de_seleccion = 'seleccion-' . $category->slug;
$tag_de_seleccion_id = get_term_by('slug', $tag_de_seleccion, 'post_tag')->term_id;


$destacada_de_categoria = new WP_Query(
	array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1,
		'cat' => $category->term_id,
		'tag_slug__in' => $tag_de_seleccion
	)
);

$recientes_de_categoria = new WP_Query(
	array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'cat' => $category->term_id,
		'tag__not_in' => $tag_de_seleccion_id
	)
);


$url_exploded = explode("/", $_SERVER['REQUEST_URI']);

global $post;

?>
<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="hero__graphics col-12 col-md-6 mb-5">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.png'>
			</div>
			<div class="col-12 col-md-6 justify-content-center anime-fadein-childs">
				<img class="logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-blog.svg'>
				<h3 class="fw-light">Categoría:</h3>
				<h2><?php single_cat_title(); ?></h2>
			</div>
		</div>
	</section>



	<div class="container-fluid px-0 blog-content">

		<section class="container last-post">
			<div class="row gy-4">
				<h2 class="mb-4">Notas Recentes</h2>
				<!-- <div class="ajax d-flex flex-wrap"> -->
				<?php

				if ($recientes_de_categoria->have_posts()) {
					while ($recientes_de_categoria->have_posts()) {
						$recientes_de_categoria->the_post();
						$recientes_de_categoria_id = get_the_ID();
						get_template_part('template-parts/blogcard');
					}
				}
				echo do_shortcode('[ajax_load_more id="blog" container_type="div" post_type="post" posts_per_page="3" offset="7" pause="true" images_loaded="true" scroll="false" button_label="Mostrar más" transition_container_classes="row mb-4" category="' . $category->slug . '" tag__not_in="' . $tag_de_seleccion_id . '"]');
				?>

			</div> <!-- row -->
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
						<h3 class="mb-4">Inscreva-se em nosso blog e descubra notícias de seu interesse.</h3>
						<div class=" align-self-center"><?php echo do_shortcode('[contact-form-7 id="136407" title="Suscripcion (simple)"]') ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php
	?>
</main><!-- #main -->

<?php

get_footer();
