<?php

/*
Template Name: Quienes somos
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Olá! Somos a GeoVictoria!
					</h1>
					<h4 class="gray fw-light mb-3  anime-fadein">
						Queremos ser o maior software de gestão de capital humano do mundo.
					</h4>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/header-nosotros.png'>
			</div>
		</div>
	</section>

	<div class="container-fluid nuestra-historia__container">
		<section class='container'>
			<div class="nuestra-historia__headline col-12 d-flex flex-column align-items-center mb-5 text-center">
				<div class="gray mb-3 col-12">
					<h1 class="fw-bold">Nossa História</h1>
				</div>
				<div class="col-12 col-lg-9 anime-fadein ">
					<p class="fw-light">Quem pensaria que um projeto universitário entre professor e aluno se tornaria uma das principais empresas de tecnologia parceira da Microsoft com presença mundial? Isso e muito mais foi alcançado por Sergio Astudillo e Rodrigo Lewit ao fundar nossa empresa, GeoVictoria.</p>
				</div>
			</div>

			<!-- Para mobile -->

			<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
				<!-- <div class="step-1 mb-4">
					<div class="progressMobile__bg step-1 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php // echo esc_url(get_template_directory_uri()); 
																	?>/dist/img/process-logo-step-1.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2006</p>
							<h6>Primeiro método de marcação</h6>
						</div>
					</div>

					<p class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</p>

				</div> -->

				<div class="step-2 mb-4">
					<div class="progressMobile__bg step-2 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-2.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2007</p>
							<h6>Nasce Victoria!</h6>
						</div>
					</div>
					<p class="fw-light">Com a chegada do nosso primeiro grande cliente, nasce Victoria: solução de registro de ponto.</p>
				</div>

				<div class="step-3 mb-4">
					<div class="progressMobile__bg step-3 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-3.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2011</p>
							<h6>Victoria SA</h6>
						</div>
					</div>
					<p class="fw-light">Já com mais de 100 clientes, nos tornamos independentes e nasceu a Victoria S.A.. Desenvolvemos novos métodos de marcação: Leitor USB, REP e APP.</p>
				</div>

				<div class="step-4 mb-4">
					<div class="progressMobile__bg step-4 mb-4 d-flex">
						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-4.svg" />
						</div>
						<div class="progressMobile__text--left">
							<p class="fw-bold">2017</p>
							<h6>GeoVictoria</h6>
						</div>
					</div>
					<p class="fw-light">Mudamos o nome para GeoVictoria. Aqui começa nossa expansão internacional com mais de 1000 clientes.</p>
				</div>

				<div class="step-5 mb-4">
					<div class="progressMobile__bg step-5 mb-4 d-flex align-self-center">

						<div class="progressMobile__circle">
							<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-logo-step-5.svg" />
						</div>
						<div class="progressMobile__text--left mt-3">
							<h3 class="fw-bold">2021</h3>
						</div>
					</div>
					<p class="fw-light">
						A pandemia nos reinventou. Incluímos marcação com reconhecimento facial e medição de temperatura. Contamos com mais de 5000 clientes em 20 países ao redor do mundo.
					</p>
				</div>
			</div>

			<!-- Para desktop -->
			<div class="progress__section d-none justify-content-between d-lg-flex mb-5">
				<!-- <div class="progress__bg step-1">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php // echo esc_url(get_template_directory_uri()); 
															?>/dist/img/quienes-somos/story-1.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2006<br> Primer método de marcaje </h6>
							<small class="fw-light">Nace el marcaje por llamada teléfonica para ATCOM, especialista en servicios de outsourcing</small>
						</div>
					</div>
				</div> -->
				<!-- <div class="align-self-center">
					<img class="progress__arrow step-1" src="<?php //echo esc_url(get_template_directory_uri()); 
																?>/dist/img/process-arrow.svg" />
				</div> -->
				<div class="progress__bg step-2 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-2.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2007 <br>Nasce Victoria!</h6>
							<small class="fw-light">Com a chegada do nosso primeiro grande cliente, nasce Victoria: solução de registro de ponto.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-3">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-3.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2011<br>Victoria SA</h6>
							<small class="fw-light">Já com mais de 100 clientes, nos tornamos independentes e nasceu a Victoria S.A.. Desenvolvemos novos métodos de marcação: Leitor USB, REP e APP.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-4 align-self-end">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-4.png" />
						<div class="progress__text--down">
							<h6 class="fw-bold">2017<br>GeoVictoria</h6>
							<small class="fw-light">Mudamos o nome para GeoVictoria. Aqui começa nossa expansão internacional com mais de 1000 clientes.</small>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
				</div>
				<div class="progress__bg step-5">
					<div class="progress__circle d-flex justify-content-center align-items-center">
						<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/story-5.png" />
						<div class="progress__text--up">
							<h6 class="fw-bold">2021</h6>
							<small class="fw-light">
								A pandemia nos reinventou. Incluímos marcação com reconhecimento facial e medição de temperatura. Contamos com mais de 5000 clientes em 20 países ao redor do mundo.
							</small>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<section class="container-fluid nuestra-presencia__container">
		<div class="container">

			<h2 class="text-center gray mb-5 fw-bold">Nossa presença no mundo</h2>
			<div class="nuestra-presencia__grid anime-fadein">
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cl.png">
					<span>Chile</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/es.png">
					<span>Espanha</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/gt.png">
					<span>Guatemala</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/mx.png">
					<span>México</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pt-br.png">
					<span>Brasil</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/co.png">
					<span>Colômbia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/hn.png">
					<span>Honduras</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/bo.png">
					<span>Bolívia</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ec.png">
					<span>Equador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/en.png">
					<span>USA</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ar.png">
					<span>Argentina</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/sv.png">
					<span>El Salvador</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/py.png">
					<span>Paraguai</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/cr.png">
					<span>Costa Rica</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pe.png">
					<span>Peru</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/do.png">
					<span>Rep. Dominicana</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/uy.png">
					<span>Uruguai</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/ni.png">
					<span>Nicarágua</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/pa.png">
					<span>Panamá</span>
				</div>
				<div class="nuestra-presencia__flag-container">
					<img class="nuestra-presencia__flag" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flags/de.png">
					<span>Alemanha</span>
				</div>
			</div>
		</div>
	</section>

	<section class="nuestro-proposito container-fluid">
		<div class="container d-flex flex-column flex-lg-row text-center text-lg-start">
			<div class="row gy-5">
				<div class="col-12 col-lg-6 align-self-center anime-pop">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/purpose.png">
				</div>
				<div class="col-12 col-lg-6">
					<h1 class="gray mb-3 fw-bold">
						Nosso propósito
					</h1>
					<div class="anime-fadein">
						<p class="gray mb-3">
							<i>Nosso objetivo é <b>ser a empresa líder</b> em tecnologia para simplificar a gestão do capital humano.</i><br>
						</p>
						<p class="gray mb-3">
							Queremos <b>fazer uma gestão simples, intuitiva e eficiente</b> de todos os dados que serão decisivos para o funcionamento das empresas.
							<br>
						</p>
						<p class="gray mb-3">
							Desenvolvemos <b>inovações tecnológicas utilizando inteligência artificial</b> aplicada à biometria, voltada para o mercado de trabalho.<br>
						</p>
						<p class="gray mb-3">
							<b>Ouvimos, entendemos e nos adaptamos aos nossos clientes!</b>

						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid nuestros-valores__container">

		<section class="container ">
			<div class="d-flex align-items-center justify-content-center">
				<div class="nuestros-valores__title col-12 col-lg-6 mb-5 text-center">
					<h1 class="gray mb-3"><span class="fw-bold">Nossos valores</h1>
					<div class="anime-fadein">
						<h2 class="gray mb-3"><span class="fw-lighter">As 4H's</h2>
						<p>É o que nos define. Aplicamos cada um dos nossos valores em tudo o que fazemos. Esforçamo-nos todos os dias para deixar os nossos clientes satisfeitos!</p>
					</div>

				</div>
			</div>

			<div class="nuestros-valores__content d-flex flex-column flex-md-row justify-content-between flex-wrap">

				<div class="row anime-fadein-childs">
					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column flex-wrap text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-1.png" />
						<h4 class="fw-bold">Happy</h4>
						<p>Nos sentimos felizes com o que fazemos! <b>A equipe GeoVictoria é caracterizada pela paixão em seu trabalho.</b></p>

					</div>


					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-2.png" />
						<h4 class="fw-bold">Honest</h4>
						<p>Somos sinceros em todos os projetos que enfrentamos. <b>A honestidade em nosso trabalho nos ajuda a construir confiança com nossos clientes.</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-3.png" />
						<h4 class="fw-bold">Humble</h4>
						<p>Estamos cientes de nossos pontos fortes e fracos. <b>Aprendemos todos os dias a dar o nosso melhor!</b></p>
					</div>

					<div class="d-flex col-12 col-md-6 col-lg-3 mt-4 flex-column text-center text-md-start">
						<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/value-4.png" />
						<h4 class="fw-bold">Hungry</h4>
						<p>Conquistaremos o mundo para ser a plataforma de capital humano por excelência. <b>Temos sede de vitória!</b>
						</p>
					</div>
				</div>
		</section>
	</div>

	<section class="container team">
		<div class="team__title">
			<h2 class="text-center gray mb-3"><span class="fw-bold">Conheça o team GeoVictoria!</h2>
			<p class="text-center gray mb-3 anime-fadein">Mais de 500 colaboradores ao redor do mundo.</p>
		</div>

		<div class="team__content anime-fadein">
			<div class="splide">
				<div class="splide__arrows">
					<button class="splide__arrow splide__arrow--prev">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
					<button class="splide__arrow splide__arrow--next">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/arrow-white.png" />
					</button>
				</div>
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-1.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-2.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-3.png" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-4.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-5.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-6.jpg" /></a>
						</li>
						<li class="splide__slide">
							<a data-fslightbox="team" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/team-7.jpg" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container awards d-flex flex-column align-items-center">

		<div class="awards__title">
			<h2 class="text-center gray mb-5"><span class="fw-bold">Nossos reconhecimentos nos endossam </h2>
		</div>

		<div class="awards__content d-flex flex-column flex-md-row justify-content-around">

			<div class="row gy-3 justify-content-center anime-fadein-childs">

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-1.png'>
						<div class="card-body">
							<h5 class="card-title">
								Endeavor
							</h5>
							<p class="card-text">

								Fazemos parte da comunidade líder de empreendedores de alto impacto em todo o mundo.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-2.png'>
						<div class="card-body">
							<h5 class="card-title">
								Microsoft - Gold partner
							</h5>
							<p class="card-text">
								Valide nossa experiência técnica por meio de exames rigorosos, reconhecidos e testados pelo setor.
							</p>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="partners-estrategicos__partner card">
						<img class="card-img-top align-self-center" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/quienes-somos/partner-3.png'>
						<div class="card-body">
							<h5 class="card-title">
								Latam Microsoft - Partner of the Year
							</h5>
							<p class="card-text">
								Saiba como nos tornamos o Parceiro do Ano 2019 da Microsoft.
							</p>
							<a href="https://www.geovictoria.com/cl/geovictoria-partner-ano-chile-2019/" type="button" class="button--blue w-100 text-center">Ver más</a>
						</div>
					</div>
				</div>

			</div> <!-- row -->
		</div>
	</section>

	<!-- 

	<div>
		<img class="bg-head-blue" src="<?php // echo esc_url(get_template_directory_uri()); 
										?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					Se parte de nuestro equipo GeoVictoria
				</h1>
				<div class="anime-fadein-childs">
					<p>Te estamos esperando. Si quieres formar parte de
						GeoVictoria no dudes en revisar las siguientes
						ofertas laborales que tenemos para ti. </p>

					<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#postulacionesModal">
						Postulate aquí
					</button>
				</div>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php // echo esc_url(get_template_directory_uri()); 
														?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div> -->
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'postulaciones') ?>;