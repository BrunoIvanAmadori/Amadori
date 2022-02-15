<?php

/*
Template Name: Seguridad
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Controle de pessoal de
						segurança em um só lugar
					</h1>
					<p class="gray fw-light mb-3  anime-fadein">
						Guardas de segurança contratados, no local
						atribuído. Controle de rodadas, atendimento por aplicativo
						ou chamada e supervisão de seus trabalhadores.
					</p>

					<p class="gray fw-light mb-3  anime-fadein">
						Salve, gerencie e decida com GeoVictoria.
					</p>

					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">Experimentar gratuitamente!</span>
					</button>

				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/header-seguridad.png'>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">
				Nossos clientes já <br> <span class="fw-bold"> gerenciam sua equipe conosco</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo securitas" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logobnw.png'>
				<img class="clients__logo prosegur" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/prosegur-logobnw.png'>
				<img class="clients__logo alianzaseguridad" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/alianzaseguridad-logobnw.png'>
				<img class="clients__logo rhseguridad" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/rhseguridad-logobnw.png'>
			</div>

		</section>
	</div>

	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein">La <span class="fw-bold">gestión del personal de seguridad</span> para tus clientes <span class="fw-bold">como nunca antes lo viste</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Gerenciar, decidir, salvar</h3>
				<p>Você tem problemas com o gerenciamento de seu pessoal de segurança?
					<b> Eles não chegam no local designado? Você sabe se o seu cliente está recebendo o serviço? </b>
				</p>
				<p>
					Com GeoVictoria gerencie, atribua rodadas e acompanhe sua equipe
					Segurança externa com um clique. Nós entregamos informações precisas
					sobre guardas de segurança em áreas designadas.</p>

				<p>Garanta contratos com seus clientes e evite multas por
					violação. Você poderá tomar decisões instantaneamente.</p>

				<p><b>Verifique se as instalações de seus clientes estão protegidas!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Simples, rápido e amigável</h3>
				<p> Otimize os dados com eficiência. Com a GeoVictoria use a informação
					da assistência de pessoal de segurança externo <b> para economizar tempo e dinheiro. </b></p>
				<p>Visualize o cumprimento do horário de trabalho. Controle de horas extras
					feito. Programe alertas para atrasos ou faltas. <b> Faça e planeje turnos de acordo com a demanda.</b></p>
				<p>GeoVictoria ajuda você a capacitar e simplificar suas tarefas.
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/construccion/graphic-2.png'>
			</div>
		</div>
	</section>



	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between features">
			<div class="row">
				<h2 class="text-center fw-bold gray section-title anime-fadein">Salve, atualize, simplifique <br> <span class="fw-light"> Bem-vindo a um mundo de gerenciamento</span><br> </h2>
			</div>

			<div class="row justify-content-center anime-fadein-childs">
				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-three-circled.svg" />
					<h6 class="fw-bold">Gerenciar equipe
					</h6>
					<p>Crie perfis e grupos
						de pessoal externo adaptado
						para os diferentes pontos de
						trabalho e horas atribuídas.</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
					<h6 class="fw-bold">
						Conformidade de cobertura</h6>
					<p>
						Acompanhamento das rodadas e tarefas do
						guardas no chão. Visualize as áreas onde
						o pessoal de segurança está trabalhando.
					</p>
				</div>

				<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
					<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
					<h6 class="fw-bold">Decisão em tempo real</h6>
					<p>Tome decisões instantaneamente.
						Programe alertas e notificações.
						Evite multas por não conformidade
						contrato com seus clientes.</p>
				</div>
			</div>
		</section>
	</div>


	<section class="d-flex flex-column container justify-content-between">
		<div class="row gx-5 anime-fadein">
			<div class="col-lg-8 pe-lg-5 mb-5">
				<div class="testimonal__video text-center">
					<video width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/caso-iseg-thumb.png" controls>
						<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/seguridad/caso-iseg.mp4" type="video/mp4">
					</video>
				</div>
			</div>

			<div class="col-lg-4">
				<h2 class="fw-bold">História de sucesso: ISEG</h2>
				<p>
					<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					<i>“A GeoVictoria nos permitiu deixar os cadernos
						registro para fazer uma discagem automática.
						Hoje sabemos antes de nossos clientes
						se o guarda chegou ou não chegou " </i>
					<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
				</p>

				<div class="row">
					<div class="col-3">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/iseg-logobnw.png" />
					</div>
					<div class="col-9 d-flex flex-column justify-content-center">
						<span>
							<span class="fw-bold">Gabriel Lerner</span></br>
							Gerente General ISEG
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein">
				<h2 class="white fw-bold mb-3">
					Bem vindo ao novo
					maneira de gerenciar o
					pessoal de segurança
				</h2>

				<p>
					Controle todas as suas operações diárias e
					verifique se o pessoal planejado está lá.
					<span class="fw-bold"> Deixe seus clientes calmos.</span>
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Experimentar gratuitamente!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-fadein">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>