<?php

/*
Template Name: Gracias - Ebook Transformacion Digital de tus RRHH
*/


get_header();
?>

<?php $nombre = isset($_GET['firstname']) ? ucwords(htmlspecialchars($_GET['firstname'])) : []; ?>
<?php $ebook_title = isset($_GET['ebook_title']) ? ucwords(htmlspecialchars($_GET['ebook_title'])) : []; ?>
<?php $ebook_url = isset($_GET['ebook_url']) ? htmlspecialchars($_GET['ebook_url']) : [] ?>
<?php $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : [] ?>

<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container text-center text-md-start">
		<div class="row flex-wrap-reverse">
			<div class="col-12 col-md-6 d-flex justify-content-center">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold text-center text-lg-start">
						¡Todo listo<?php if ($nombre) {
										echo ' ' . $nombre;
									} ?>!
					</h1>
					<h4 class="fw-light mb-4 anime-fadein text-center text-lg-start">
						Ya solicitaste tu ebook<?php echo $ebook_title ? ' "' . $ebook_title . '"' : "." ?>
					</h4>
					<p>
						Ya lo enviamos a <a href="#"><?php echo $email; ?></a>. <?php echo $ebook_url ? 'También lo puedes descargar con <a href="' . $ebook_url . '">este enlace</a>.' : ""; ?>
					</p>
					<p class="fw-bold">

					</p>
					<!-- <div class="gray-card anime-fadein">
						<h5 class="fw-light mb-4 anime-fadein text-center text-lg-start">🚀 ¿Quieres progresar más rápido?</h5>
						<p>Reserva 20 minutos de asesoría gratuita y te ayudaremos a superar tu actual desafío.</p>
						<button class="btn button--bigblue bounce fw-bold w-100" data-bs-toggle="modal" data-bs-target="#agendaModal">¡OK! Quiero reservar ahora</button>
					</div> -->

				</div>
			</div>

			<div class="col-12 col-md-6 d-flex justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/ebook/header-gracias.png'>
			</div>
		</div>


	</section>



</main><!-- #main -->
<?php
get_footer();
get_template_part('template-parts/modal', 'agenda');
?>