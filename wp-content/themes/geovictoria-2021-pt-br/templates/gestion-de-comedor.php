<?php

/*
Template Name: Gestion de comedor
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">

	<?php if (!wp_is_mobile()) : ?>
		<div class="icon-scroll"><small class="tip">GIRE A RODA</small></div>
	<?php endif; ?>

	<section class="hero container d-flex flex-column flex-md-row justify-content-around text-center text-md-start">
		<div class="hero__text col-12 col-md-6 mb-3">
			<div class="align-self-center pe-md-3">
				<h1 class="gray mb-3 fw-bold">
					Registre e controle as refeições
					fornecidas na sua empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Evite desperdícios ou não conformidade
					na entrega de alimentos em seu refeitório.
					Planeje tudo em uma plataforma 100% online.
				</p>
				<button class="button--bigblue w-100 fw-bold anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white">Eu quero atualizar!</span>
				</button>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-comedor.png'>
		</div>
	</section>

	<?php if (wp_is_mobile()) : ?>
		<section class="d-flex container step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-2 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ticket">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					</div>


					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
						<div class="step-1__entry-selector"></div>
					</div>

					<div class="step-1__box-container">
						<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
						<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
						<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
						<div class="step-1__box-code">
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
							<span>*</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Gerencie as refeições
					</h1>
					<p class="gray fw-light mb-3">
						Dependendo do método que você escolher, seus funcionários podem
						registrar sua entrada no refeitório e receberão um voucher
						para retirar a refeição designada.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Sempre na nuvem!
					</h1>
					<p class="gray fw-light mb-3">
						Os dados das refeições entregues ficarão protegidos
						na nuvem. As informações serão armazenadas em tempo
						real. Disponíveis para quando você precisar!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
					<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
					<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
					<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
					<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

					<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
		</section>

		<section class="d-flex container step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
					<div class="step-3__ripple"></div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
						<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
					</div>

					<div class="step-3__report-container d-flex flex-column">
						<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__rations-container d-flex flex-column">
						<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
						<div class="step-3__data-1">0</div>
						<div class="step-3__data-2">0</div>
						<div class="step-3__data-3">0</div>
						<div class="step-3__data-4">0</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Relatórios instantâneos

					</h1>
					<p class="gray fw-light mb-3">
						Obtenha e gere relatórios das pessoas habilitadas para receber alimentação, a informação do local e a hora em que receberam sua refeição atribuída.
					</p>
				</div>
			</div>
		</section>

	<?php else : ?>

		<div class="animation-container invisible container">
			<section class="d-flex step-1 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="step-1__bg-curve">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
					<div class="bg-tail-gray"></div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference">
					<div class="resizer">
						<div class="step-1__ticket">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
						</div>

						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-type">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/entry-type.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__box-container">
							<img class="step-1__box" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box.png'>
							<img class="step-1__box-options" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-options.png'>
							<img class="step-1__box-pass" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/box-pass.png'>
							<div class="step-1__box-code">
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
								<span>*</span>
							</div>
						</div>




					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Gerencie as refeições
						</h1>
						<p class="gray fw-light mb-3">
							Dependendo do método que você escolher, seus funcionários podem
							registrar sua entrada no refeitório e receberão um voucher
							para retirar a refeição designada.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-comedor flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Sempre na nuvem!
						</h1>
						<p class="gray fw-light mb-3">
							Os dados das refeições entregues ficarão protegidos
							na nuvem. As informações serão armazenadas em tempo
							real. Disponíveis para quando você precisar!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-2 step-2__graphics resizer-reference">
					<div class="scale-fix">
						<div class="resizer">
							<img class="step-2__ticket--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-1.png'>
							<img class="step-2__ticket--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-2.png'>
							<img class="step-2__ticket--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-3.png'>
							<img class="step-2__ticket--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/ticket-4.png'>
							<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>
							<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/cloud.svg'>

							<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/loading.svg'>
							<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/arrow-up.svg'>
							<div class="step-2__bubble"></div>
							<div class="step-2__check">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-comedor flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/platform.png'>
						<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-action.png'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic.png'>
							<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/graphic-bar-group.svg'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
						</div>

						<div class="step-3__report-container d-flex flex-column">
							<img class="step-3__report" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/report-individual.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__rations-container d-flex flex-column">
							<img class="step-3__rations" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-comedor/rations.png'>
							<div class="step-3__data-1">0</div>
							<div class="step-3__data-2">0</div>
							<div class="step-3__data-3">0</div>
							<div class="step-3__data-4">0</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h1 class="gray mb-3 fw-bold">
							Relatórios instantâneos

						</h1>
						<p class="gray fw-light mb-3">
							Obtenha e gere relatórios das pessoas habilitadas para receber alimentação, a informação do local e a hora em que receberam sua refeição atribuída.
						</p>
					</div>
				</div>
			</section>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">Por que escolher nosso controle de refeitório?</h2>
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-md-6 col-lg-3  benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />

						<h5>Atribuir refeições de acordo com perfis</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Atribua e distribua
							as refeições às
							pessoas habilitadas.
							Você poderá definir o tipo de
							refeição de acordo com o horário e
							local autorizado.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud-paper.svg" />

						<h5>Veja os dados em tempo real</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Conheça os dados de
							data, hora e local de
							refeições designadas.
							Não desperdice
							alimentos por falta
							de informação!
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/jigsaw.svg" />
						<h5>Integrável com acesso e controle de ponto</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Aproveite os seus módulos
							de controle de ponto e acesso
							com o controle de
							refeitório. Então você terá
							informação consolidada
							em apenas um clique.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/print.svg" />

						<h5>Entregue vouchers de maneira automática</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fw-light">
							Conceda vouchers individuais para o correto controle das refeições entregues. É o respaldo para seu refeitório!
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>
					Você pode escolher entre diferentes tipos de marcação</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>O método de discagem por excelência via relógio de controle através de conexões LAN, 3G ou wi-fi.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>
						Sensor sem contato, máscara e temperatura. Esta é a marcação com reconhecimento facial.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-palm.png" />
					<h6>
						Reconhecimento de Palma</h6>
					<small>Método de marcação biométrico preciso e sem contato.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-password.png" />
					<h6>
						Senha</h6>
					<small>
						A ração de seus trabalhadores por meio de um código de segurança.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos mais do que um controle de refeitório</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/meal.svg" />
				<h5 class="fw-bold">Tipos de refeições</h5>
				<p>Não importa se é café da manhã,
					almoço ou jantar. Com nossa
					solução você poderá criar até
					seis tipos de refeições. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/papers.svg" />
				<h5 class="fw-bold">Backup permanente</h5>
				<p>Seja gerenciado por você ou por um
					externo, sinta a tranquilidade de
					que seus colaboradores
					receberão sua refeição atribuída. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/notebook-check.svg" />
				<h5 class="fw-bold">Planejamento inteligente</h5>
				<p>Gerencie um planejamento
					preciso das refeições. Evite
					desperdícios ou
					falha na entrega.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3">
					Pronto para ser
					parte da mudança?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					Milhares de empresas já gerenciam seus
					refeitórios com a nossa plataforma.
					Você pode ser o próximo.
				</p>

				<button class="fw-bold button--bigwhite w-100 mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
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