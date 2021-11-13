<?php

/*
Template Name: Retail
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
						Gerencie sua equipe
						de varejo em todos
						pontos de venda
					</h1>
					<p class="fw-light mb-4 anime-fadein">
						Garante desempenho operacional
						de suas lojas, vendo a equipe em
						tempo real. Tome decisões instantaneamente
						de acordo com as necessidades do dia a dia.
					</p>
					<p class="fw-light mb-4 anime-fadein">
						<span class="fw-bold">Salve, gerencie e decida com GeoVictoria.</span>
					</p>
					<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white fw-bold">Eu quero atualizar!</span>
					</button>
				</div>
			</div>
			<div class="hero__graphics col-12 col-md-6">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/header-retail.png'>
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
				Nossos clientes já <br><span class="fw-bold">gerenciam sua equipe conosco</span></h2>
			<div class="d-flex justify-content-around anime-fadein flex-wrap">
				<img class="clients__logo cencosud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/cencosud-logobnw.png'>
				<img class="clients__logo oxxo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/oxxo-logobnw.png'>
				<img class="clients__logo--10em" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png'>
				<img class="clients__logo kfc" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png'>
				<img class="clients__logo starbucks" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png'>
			</div>
		</section>
	</div>



	<section class='container'>

		<div class="row mb-5 justify-content-center">
			<h2 class="col-12 col-lg-8 align-self-center text-center gray fw-light anime-fadein"><span class="fw-bold">Gerenciando equipe externa</span> para seus clientes <span class="fw-bold">como você nunca viu antes</span></h2>
		</div>

		<div class="row gx-5 gy-4 mb-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-1.png'>
			</div>
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">
					Decida, otimize, salve</h3>
				<p>
					Você sabe como ver sua equipe em cada filial?
					controlar o total de suas operações?
				</p>
				<p>
					Com a GeoVictoria, gerencie e otimize a equipe em
					cada ponto de venda. A localização não importa. Visualizar
					no mapa os trabalhadores de todas as suas filiais!</p>

				<p>Você poderá tomar decisões instantaneamente. <b>Antecipe o necessidades de pessoal aqui e agora!</b></p>
			</div>
		</div>

		<div class="row gy-4 flex-column-reverse flex-md-row">
			<div class="col-12 col-md-6 anime-fadein">
				<h3 class="fw-bold mb-4">Simples, rápido e amigável</h3>
				<p>GeoVictoria permite que você administre, gerencie e obtenha
					relatórios do atendimento do seu capital humano.</p>
				<p>Graças à nossa plataforma, você identificará o pessoal ausente
					em suas filiais. Simplifique o cálculo da remuneração.
					Graças aos dados de atendimento, você saberá as horas extras por
					pagar. Centralize autorizações, licenças ou férias.</p>
				<p><b>Automatize o trabalho de RH!</b>

				</p>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/graphic-2.png'>
			</div>
		</div>
	</section>




	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center fw-bold gray section-title anime-fadein">Por que escolher a GeoVictoria?</h2>
		</div>

		<div class="row justify-content-center anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear-person.svg" />
				<h6 class="fw-bold">
					Otimize a equipe
				</h6>
				<p>Graças à nossa aliança com <b>Shift</b>, planeje
					a equipe que sua filial precisa de acordo com
					uma malha de deslocamento otimizada.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/map-geo.svg" />
				<h6 class="fw-bold">
					Conformidade de cobertura</h6>
				<p>Não importa se sua filial está no norte ou sul
					do país. Você vai visualizar em um só lugar o seu
					pessoal em todos os pontos de venda.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-check.svg" />
				<h6 class="fw-bold">
					Decisão em tempo real</h6>
				<p>Tome decisões instantaneamente. Programa de alertas
					e notificações. Verifique a conformidade com
					turnos e dias conforme planejado. </p>
			</div>
		</div>
	</section>

	<div class="position-relative">
		<div class="bg-curve">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="d-flex flex-column container justify-content-between">
			<div class="row mb-5">
				<div class="col-12">
					<div class="testimonal__video text-center">
						<h1 class="fw-bold anime-fadein mb-5">História de sucesso: Starbucks</h1>
						<video class="anime-fadein" width="100%" poster="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks-thumb.png" controls>
							<source src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/retail/caso-starbucks.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="row gy-5 gx-5 anime-fadein-childs">
				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/luxottica-logobnw.png" />
					<p>
						“Isso nos ajuda na questão operacional. Para
						ter o controle de caixa no final do mês.
						Verificamos a loja com assistência
						que fechou e que não fechou. GeoVictoria
						reduziu nossos custos. Nós salvamos
						até 60% ao ano em pagamento por hora
						extras e bônus compensatórios. "
					</p>
					<p>
						<span class="fw-bold">
							Luxottica
						</span>
					</p>
				</div>

				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mt-4 mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/kfc-logobnw.png" />
					<p>
						“Reduzimos 90% dos incidentes com
						o software e economize com
						planejamento da jornada de trabalho ”.
					</p>
					<p>
						<span class="fw-bold">
							KFC
						</span>
					</p>
				</div>


				<div class="col-lg-4 text-center">
					<img class="testimonial__logo mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logobnw.png" />
					<p>
						“Tem sido uma ferramenta tremenda que
						temos sido capazes de entregar ao nosso
						gerentes de loja. Não só porque
						quão prático é, quão fácil de operar
						é, mas também é um
						ferramenta que eleva a sua gestão "
					</p>
					<p>
						<span class="fw-bold">
							Starbucks
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
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein">
				<h2 class="white fw-bold mb-3">
					Bem vindo ao novo jeito
					para gerenciar a equipe em seu
					pontos de venda
				</h2>

				<p>
					Controle todas as suas operações diárias.
					Verifique se o pessoal planejado está em
					o ramo atribuído. Otimize e economize!
				</p>

				<button class="fw-bold button--bigwhite mt-3 w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Eu quero atualizar!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-fadein">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_footer();
?>
<?php get_template_part('template-parts/modal', 'contacto') ?>;