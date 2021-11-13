<?php

/*
Template Name: Partners
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<section class="hero container-fluid">

		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">

						Trabalhamos com os melhores!
					</h1>
					<h5 class="gray fw-light mb-3 anime-fadein">
						Nos reunimos com grandes empresas para
						tornar seu trabalho muito mais eficiente.
						Conheça nossos aliados em todo o mundo.
					</h5>

				</div>
			</div>

			<div class="hero__graphics col-12 col-md-6">
				<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/header-partners.png'>
			</div>

		</div>

	</section> <!-- hero -->

	<section class="container-fluid partners-estrategicos__container">

		<div class='container'>

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">
				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Parceiros estratégicos</h1>
				</div>
				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Desde a infraestrutura onde operamos, os regulamentos que cumprimos e a expansão
						dos nossos serviços. Os seguintes parceiros nos ajudam a cumprir nosso propósito de
						ser a melhor solução para a gestão do capital humano.
					</p>
				</div>
			</div>

			<div class="partners-estrategicos__content d-flex">

				<div class="row gy-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<div class="partners-estrategicos__partner card">
							<a href="https://www.microsoft.com/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/microsoft.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Microsoft
								</h5>
								<p class="card-text">
									Maior empresa de TI do
									mundo. Nossos serviços operam
									graças à nuvem Azure.
								</p>
								<a href="https://www.microsoft.com/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<div class="partners-estrategicos__partner card">
							<a href="https://www.dt.gob.cl/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/direccion-del-trabajo.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Dirección del trabajo
								</h5>
								<p class="card-text">
									Entidade encarregada de garantir
									conformidade com as leis
									do trabalho
								</p>
								<a href="https://www.dt.gob.cl/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<div class="partners-estrategicos__partner card">
							<a href="https://redderrhh.com/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/red-rrhh.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Red de recursos humanos
								</h5>
								<p class="card-text">
									Um dos mais
									especialização em RH fundada em
									2008, hoje tem mais
									4000 membros.
								</p>
								<a href="https://redderrhh.com/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<div class="partners-estrategicos__partner card">
							<a href="https://endeavor.org/">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/endeavor.png'>
							</a>
							<div class="card-body">
								<h5 class="card-title">
									Endeavor
								</h5>
								<p class="card-text">
									Comunidade líder de empreendedores
									alto impacto no mundo.
								</p>
								<a href="https://endeavor.org/" type="button" class="button--blue">Ver más</a>
							</div>
						</div>
					</div>

				</div> <!-- row -->

			</div> <!-- partners-estrategicos-content -->
		</div> <!-- container -->
	</section>

	<section class="container-fluid partners-estrategicos__container">
		<div class="container">

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">

				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">ERP'S RRHH</h1>
				</div>

				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Trabalhamos com as soluções para recursos humanos com mais experiência
						no mercado. Todas as informações do cálculo de compensação suportado
						com nosso controle de acesso e assistência. Nós nos adaptamos para você!
					</p>
				</div>

			</div>

			<div class="partners-estrategicos__content d-flex flex-column">

				<div class="row gy-3 mb-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.visma.com">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/visma.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Visma
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.siigo.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/siigo.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Siigo
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://rexmas.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rex+.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Rex+
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.kame.cl/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/kame-erp.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Kame ERP
									</h5>
								</div>
							</div>
						</a>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 mb-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://softland.com.ar/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/softland.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Softland
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.dbnetcorp.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/dbnet.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										DBNet
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.rankmi.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/rankmi.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Rankmi
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://home.hcmfront.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/hcmfront.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Hcmfront
									</h5>
								</div>
							</div>
						</a>
					</div>

				</div> <!-- row -->

				<div class="row gy-3 justify-content-center <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.turecibo.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/turecibo.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Turecibo
									</h5>

								</div>
							</div>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
						<a href="https://www.sinergylowells.com/">
							<div class="partners-estrategicos__partner card">
								<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/partners/sinergy-lowells.png'>
								<div class="card-body text-center">
									<h5 class="card-title">
										Sinergy & Lowells
									</h5>

								</div>
							</div>
						</a>
					</div>

				</div> <!-- row -->

			</div> <!-- partners estrategicos -->
		</div> <!-- container -->
	</section>

	<section class="container-fluid partners-estrategicos__container">
		<div class="container">

			<div class="partners-estrategicos__headline col-12 d-flex flex-column align-items-center mb-5 text-center">

				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Gestão operacional</h1>
				</div>

				<div class="col-12 col-lg-9 anime-fadein">
					<p class="fw-light">
						Levamos a gestão de suas tarefas operacionais a um novo nível. Graças à nossa integração
						Com os seguintes parceiros, você terá KPIs de alto valor para a tomada de decisões.
					</p>
				</div>

			</div>

			<div class="row gy-3 justify-content-center <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">

				<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<a href="https://focoenobra.cl/">
						<div class="partners-estrategicos__partner card ">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/foco-en-obra.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Foco en obra
								</h5>

							</div>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<a href="https://www.shift-app.com/">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/shift-logo.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Shift
								</h5>

							</div>
						</div>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<a href="https://www.ipsumapp.co/">
						<div class="partners-estrategicos__partner card">
							<img class="card-img-top" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ipsum-logo.png'>
							<div class="card-body text-center">
								<h5 class="card-title">
									Ipsum
								</h5>

							</div>
						</div>
					</a>
				</div>

			</div> <!-- row -->

		</div> <!-- container -->
	</section> <!-- partners-estrategicos-container -->

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<section class="container-fluid bg-blue-2 why-us">
		<div class="container">

			<div class="row">

				<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">

					<h2 class="white fw-bold mb-3">
						Quer fazer parte da nossa rede de parceiros?
					</h2>

					<p class="anime-fadein">
						Juntos podemos melhorar a experiência de
						nossos clientes! Nós convidamos você a fazer parte
						de um mundo de gestão e análise com
						GeoVictoria. Vamos conversar!
					</p>

					<button class="fw-bold button--bigwhite mt-3 w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#partnersModal">
						Eu quero participar
					</button>

				</div>

				<div class="col-12 col-md-6 d-none d-lg-flex justify-content-center">
					<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />


				</div>

			</div> <!-- row -->

		</div> <!-- container -->
	</section>

</main><!-- #main -->
<?php
get_footer();
?>

<?php get_template_part('template-parts/modal', 'partners') ?>;