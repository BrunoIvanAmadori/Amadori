<?php

/*
Template Name: Outsourcing
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
	<section class="hero container">
		<div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						Gerencie sua equipe
						Outsourcing em um só lugar
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Gestão de operações, rastreamento de rota,
						informações dos trabalhadores de campo. Tudo
						isso e muito mais da nossa plataforma.
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">Eu quero atualizar!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="header-nosotros anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/header-outsourcing.png'>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container clients col-12 mb-3">
			<h2 class="text-center gray section-title fw-light anime-fadein">Nossos clientes já <br><span class="fw-bold">gerenciam sua equipe conosco</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/limchile-logobnw.png'>

			</div>
		</section>
	</div>

	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein"><span class="fw-bold">Gerenciando equipe externa</span> para seus clientes <span class="fw-bold">como você nunca viu antes</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Gerenciar, decidir, salvar</h3>
				<p>Você tem problemas com a gestão de sua equipe de terceirização?
					Com a GeoVictoria, gerencie, atribua horários e faça rastreabilidade de
					sua equipe em um clique</b>.</p>
				<p>Nossa solução <b>fornece informações precisas sobre o pessoal</b> que você está encarregado em diferentes áreas atribuídas. Garanta contratos com seus clientes e evite multas por não conformidade.</p>
				<p>Você poderá tomar decisões instantaneamente. <b>Tudo em um só lugar!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simples, rápido e amigável</h3>
				<p>Otimize os dados com eficiência. Com a GeoVictoria utilizamos as informações da assessoria de pessoal externo <b>para economizar tempo e dinheiro.</b></p>
				<p>Visualize o cumprimento do horário de trabalho. Controle de horas extras
					feito. <b>Programe alertas para atrasos ou ausências.</b></p>
				<p><b>Que o recurso mais valioso seja a tranquilidade dos seus clientes!</b>
				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/outsourcing/graphic-2.png'>
			</div>
		</div>
	</section>



	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">Por que escolher a GeoVictoria?<br></h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">Gerenciar equipe</h6>
				<p>Crie perfis e grupos
					de pessoal externo adaptado
					para o ponto de serviço atribuído.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h6 class="fw-bold">Conformidade de cobertura</h6>
				<p>Rastreamento de rotas e tarefas do pessoal em campo. Conheça no momento a rota de sua equipe nos pontos atribuídos.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h6 class="fw-bold">Decisão em tempo real</h6>
				<p>Tome decisões instantaneamente.
					Programe alertas e notificações.
					Evite multas por não conformidade
					contrato com seus clientes.</p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between">
			<div class="row gx-5 anime-fadein mb-5">
				<h2 class="text-center mb-5">Nossos clientes <b>nos endossam</b></h2>
				<div class="col-lg-8 pe-lg-5 align-self-center">
					<div class="testimonial__video--small text-center">
						<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/AY4odzFfqC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
					<h3 class="fw-bold">História de sucesso: LIM Chile</h3>
					<img class="testimonial__logo--small" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/limchile-logobnw.png" />
					<p>
						<!-- <img class="arrow-quote--left" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
						<i>“A GeoVictoria nos mudou 100%. Recomendo a GeoVictoria, eles sempre têm uma resposta imediata e correta.” </i>
						<!-- <img class="arrow-quote--right" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg"> -->
					</p>
					<div class="row justify-content-center justify-content-lg-start">
						<span>
							<span class="fw-bold">Bastián Garrido</span></br>
							<small>Gestão de pessoal</small>
						</span>

					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ecrgroup-logobnw.png" />
					<p>
						“Antes era tudo manual com a caderneta de assistência onde detectamos violação, manipulação ou extravio da caderneta.
						GeoVictoria é a ferramenta que permite um controle mais preciso ”.
					</p>
					<p>
						<span class="fw-bold">
							ECR Group
						</span>
					</p>
				</div>
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/ugs-logobnw.png" />
					<p>
						“Com uma dotação incompleta poderíamos ser aplicados algum tipo de multa por quebra de contrato. Este aplicativo fornece as informações em tempo real. Nos permite reagir com a equipe de Recursos Humanos e a área de operações”.
					</p>
					<p>
						<span class="fw-bold">
							UGS
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/grupoexpro-logobnw.png" />
					<p>
						“Temos processos de cobrança muito mais claros com nossos clientes graças aos dados de atendimento. É um sistema eficaz, confiável e oportuno”
					</p>
					<p>
						<span class="fw-bold">
							GrupoExpro
						</span>
					</p>
				</div>

		</section>
	</div>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
				<h2 class="white fw-bold mb-3">
					Mantenha seus clientes felizes
					Economize tempo e dinheiro em
					gestão do seu Outsourcing!
				</h2>

				<p>
					Sabemos que toda transformação é
					um desafio. Milhares de empresas já gerenciam
					sua equipe externa conosco.
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Eu quero atualizar!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>

</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>