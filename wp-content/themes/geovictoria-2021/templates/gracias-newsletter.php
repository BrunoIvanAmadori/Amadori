<?php

/*
Template Name: Gracias - Newsletter Blog
*/


get_header();
?>

<?php
$region = explode("/", $_SERVER["REQUEST_URI"])[1];
$firstname = ucwords(htmlspecialchars($_GET['firstname']));
$titulo = ucwords(str_replace('-', ' ', htmlspecialchars($_GET['titulo'])));
$email = htmlspecialchars($_GET['email']);
$temas_de_interes = htmlspecialchars($_GET['temas_de_interes_de_newsletter']);
$temas_de_interes = explode('+', $temas_de_interes);

?>

<div class="bg-header" style="top: -200px;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="container-fluid">
		<div class="container d-flex flex-column-reverse flex-md-row justify-content-between align-items-center text-center text-md-start">
			<div class="hero__graphics col-12 col-md-6 mb-5">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/header-blog.png'>
			</div>
			<div class="col-12 col-md-6">
				<h1 class="gray mb-3 fw-bold text-center text-lg-start">
					¡Todo listo<?php echo $firstname ? " " . $firstname : "" ?>!
				</h1>
				<div class="align-self-center pe-md-3">
					<h4 class="fw-light mb-4 anime-fadein text-center text-lg-start">
						Ya te suscribimos al blog de GeoVictoria.
					</h4>
					<?php if ($temas_de_interes[0]) : ?>
						<h6>Debajo encontrarás algunos artículos que seguro te serán de interés...</h6>
					<?php else : ?>
						<a href="/<?php echo $region; ?>/blog"><button class="btn button--blueborder">Continuar al blog</button></a>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</section>
	<section class="container text-center text-md-start flex-column">
		<?php if ($temas_de_interes[0]) : ?>
			<h2 class="mb-4">Artículos seleccionados para <?php echo ($temas_de_interes[0]) ? $firstname : "" ?></h2>

			<?php
			global $post;
			foreach ($temas_de_interes as $tema) :
			?>
				<div class="row gy-4 mb-5">
					<?php
					if (term_exists($tema)) {
						$query = new WP_Query(
							array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => 6,
								'cat' => get_cat_ID($tema)
							)
						);

						if ($query->have_posts()) {
							echo "<h3 class='mb-4'>" . $tema . "</h3>";

							while ($query->have_posts()) {
								$query->the_post();
								get_template_part('template-parts/blogcard');
							}
							wp_reset_postdata();
						}
					}
					?>
				</div>
			<?php endforeach; ?>
			<div class="d-flex justify-content-center">
				<a href="/<?php echo $region; ?>/blog">
					<button class="btn button--blueborder">Continuar al blog</button>
				</a>
			</div>
		<?php
		endif;
		?>
	</section>
</main><!-- #main -->
<?php
get_footer();
get_template_part('template-parts/modal', 'agenda');
?>