<?php

/*
Template Name: Control de acceso
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
					Chega de visitas inesperadas! Gerencie o controle de acesso de sua empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Garanta segurança em suas instalações. Diversos sistemas de validação, relatórios personalizados e planejamentos.
				</p>
				<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					<span class="white fw-bold">
						Experimentar gratuitamente!</span>
				</button>
			</div>
		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header-acceso anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-acceso.png'>
		</div>
	</section>

	<?php if (wp_is_mobile()) : ?>

		<section class="d-flex container step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="step-1__bg-curve">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
				<div class="bg-tail-gray"></div>
			</div>
			<div class="col-12 col-md-6 mb-1 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-device">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/devices.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__entry-method">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-method.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__speedface-container">
						<img class="step-1__speedface-screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-screen.png'>
						<img class="step-1__speedface-face" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-face.png'>
						<img class="step-1__speedface" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface.png'>
						<img class="step-1__speedface-notification" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-notification.png'>
						<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry.png'>
						<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry-line.png'>
					</div>

					<img class="step-1__speedface-blocked" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-locked.png'>
					<img class="step-1__speedface-open" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-open.png'>


					<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Permitir acesso
					</h2>
					<p class="gray fw-light mb-3">
						Independentemente do dispositivo ou local de acesso, valide a entrada de pessoas graças às nossas tecnologias.
					</p>
				</div>
			</div>
		</section>

		<section class="d-flex container step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Sempre na nuvem!
					</h2>
					<p class="gray fw-light mb-3">
						Os dados dos acesso serão protegidos na nuvem. Encontre as informações em tempo real. Disponíveis para quando você precisar!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 mb-2 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
					<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); 
																		?>/dist/img/animation-acceso/entry-id.png'> -->
					<img class="step-2__entry-id--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-2.png'>
					<img class="step-2__entry-id--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-3.png'>
					<img class="step-2__entry-id--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-4.png'>
					<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/cloud.svg'>
					<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/cloud.svg'>

					<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/loading.svg'>
					<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/arrow-up.svg'>
					<div class="step-2__bubble"></div>
					<div class="step-2__check">
						<i class="fas fa-check"></i>
					</div>
				</div>
			</div>
		</section>

		<section class="d-flex container step-3 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-3 step-3 step-3__graphics resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/report-action.png'>
					<div class="step-3__ripple">
					</div>

					<div class="step-3__graphic-container">
						<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic.png'>
						<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic-bars.png'></img>
					</div>

					<div class="step-3__users-container">
						<img class="step-3__users" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users.png">
						<div class="step-3__data-1">40</div>
					</div>

					<div class="step-3__users-detail-container d-flex flex-column">
						<img class="step-3__users-detail" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users-detail.png'>
						<div class="step-3__data-1">23</div>
						<div class="step-3__data-2">23</div>
						<div class="step-3__data-3">0</div>
					</div>

					<div class="step-3__date-container d-flex flex-column">
						<img class="step-3__date" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/date.png'>
						<div class="step-3__hour">17:23</div>
						<div class="step-3__day">Quarta-feira, 1 de setembro de 2021</div>
					</div>

					<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 mt-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h2 class="gray mb-3 fw-bold">
						Relatórios instantâneos
					</h2>
					<p class="gray fw-light mb-3">
						Obtenha diferentes relatórios de acessos. Criação de perfis. Planejamento por dias, semanas e meses. Tudo em um só lugar
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container invisible container">
			<section class="d-flex step-1 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
				<div class="step-1__bg-curve">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
					<div class="bg-tail-gray"></div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-1 step-1__graphics resizer-reference mb-5">
					<div class="resizer">
						<div class="step-1__ripple">
						</div>

						<div class="step-1__entry-device">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/devices.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__entry-method">
							<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-method.png'>
							<div class="step-1__entry-selector">
							</div>
						</div>

						<div class="step-1__speedface-container">
							<img class="step-1__speedface-screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-screen.png'>
							<img class="step-1__speedface-face" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-face.png'>
							<img class="step-1__speedface" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface.png'>
							<img class="step-1__speedface-notification" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-notification.png'>
							<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry.png'>
							<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/biometry-line.png'>
						</div>

						<img class="step-1__speedface-blocked" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-locked.png'>
						<img class="step-1__speedface-open" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/speedface-open.png'>


						<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/entry-id-1.png'>
					</div>
				</div>

				<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							Permitir acesso
						</h2>
						<p class="gray fw-light mb-3">
							Independentemente do dispositivo ou local de acesso, valide a entrada de pessoas graças às nossas tecnologias.
						</p>
					</div>
				</div>
			</section>

			<section class="d-flex step-2 animation-acceso flex-column-reverse flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							Sempre na nuvem!
						</h2>
						<p class="gray fw-light mb-3">
							Os dados dos acesso serão protegidos na nuvem. Encontre as informações em tempo real. Disponíveis para quando você precisar!
						</p>
					</div>
				</div>

				<div class="col-12 col-md-6 step-2 step-2__graphics resizer-reference mb-5">
					<div class="scale-fix">
						<div class="resizer">
							<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
							<!-- <img class="step-2__entry-id--size-1-b" src='<?php //echo esc_url( get_template_directory_uri() ); 
																				?>/dist/img/animation-asistencia/entry-id.png'> -->
							<img class="step-2__entry-id--size-2" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-2.png'>
							<img class="step-2__entry-id--size-3" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-3.png'>
							<img class="step-2__entry-id--size-4" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id-4.png'>
							<img class="step-2__cloud" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/cloud.svg'>
							<img class="step-2__cloud-aura" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/cloud.svg'>

							<img class="step-2__loading" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/loading.svg'>
							<img class="step-2__arrow-up" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/arrow-up.svg'>
							<div class="step-2__bubble"></div>
							<div class="step-2__check">
								<i class="fas fa-check"></i>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="d-flex step-3 animation-acceso flex-column flex-md-row align-items-center justify-content-center">
				<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics resizer-reference mb-5">
					<div class="resizer">
						<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/platform.png'>
						<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/report-action.png'>
						<div class="step-3__ripple">
						</div>

						<div class="step-3__graphic-container">
							<img class="step-3__graphic" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic.png'>
							<img class="step-3__bar-group" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/graphic-bars.png'>
						</div>

						<div class="step-3__users-container">
							<img class="step-3__users" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users.png">
							<div class="step-3__data-1">40</div>
						</div>

						<div class="step-3__users-detail-container d-flex flex-column">
							<img class="step-3__users-detail" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/users-detail.png'>
							<div class="step-3__data-1">23</div>
							<div class="step-3__data-2">23</div>
							<div class="step-3__data-3">0</div>
						</div>

						<div class="step-3__date-container d-flex flex-column">
							<img class="step-3__date" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/date.png'>
							<div class="step-3__hour">17:23</div>
							<div class="step-3__day">Quarta-feira, 1 de setembro de 2021</div>
						</div>

						<img class="step-3__monitoring" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-acceso/monitoring.png'>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
					<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
						<h2 class="gray mb-3 fw-bold">
							Relatórios instantâneos
						</h2>
						<p class="gray fw-light mb-3">
							Obtenha diferentes relatórios de acessos. Criação de perfis. Planejamento por dias, semanas e meses. Tudo em um só lugar
						</p>
					</div>
				</div>
			</section>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">
		<h2 class="text-center fw-bold gray section-title anime-fadein">Benefícios da GeoVictoria</h2>
		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-dollar.svg" />

						<h5>Reduza custos e tempos</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Economize tempo e dinheiro, otimizando os processos de controle de acesso
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/pc-check.svg" />

						<h5>Digitalize seus processos</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Não perca tempo anotando cada um dos acessos manualmente.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">


						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/shield-check.svg" />
						<h5>Segurança para sua empresa</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Seja na recepção, no depósito ou nos escritórios. Todas as áreas da sua empresa estarão protegidas.</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row d-flex justify-content-center">



			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/process-gear.svg" />

						<h5>Rastreabilidade de sua equipe</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">
							Acompanhe os seus colaboradores e terceiros nas diferentes áreas ou escritórios de sua empresa.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">

						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/ruler.svg" />

						<h5>Relatórios personalizados</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>

					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Obtenha relatórios de entradas e saídas, por locais ou datas. Tudo sempre à sua disposição.
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
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-usb.png" />
					<h6>Leitor de impressão digital </h6>
					<small>
						Baixo custo e fácil implementação. Esta é a marcação da impressão digital via conexão USB.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>O método de discagem por excelência via relógio de controle através de conexões LAN, 3G ou wi-fi. </small>
				</div>

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>Sensor sem contato, máscara e temperatura. Esta é a marcação com reconhecimento facial.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-palm.png" />
					<h6>
						Reconhecimento de Palma</h6>
					<small>
						Método de marcação biométrico preciso e sem contato.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-card.png" />
					<h6>Cartão RFID</h6>
					<small>Acesse as instalações com os cartões associados por meio de um chip inteligente.
					</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-id.png" />
					<h6>
						Carteira de identidade</h6>
					<small>
						Acesso verificado e individualizado graças ao cartão de identidade.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Um controle de acesso único </h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person.svg" />
				<h5 class="fw-bold">Perfis de usuários</h5>
				<p>
					Autorize o acesso de pessoas de acordo com suas funções na empresa
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/gear.svg" />
				<h5 class="fw-bold">Integrável com o controle de ponto</h5>
				<p>
					Encontre as informações de acesso e controle de ponto em um só lugar.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/paper.svg" />
				<h5 class="fw-bold">Planejamento de acessos</h5>
				<p>
					Determine os acessos por dias, semanas ou meses. Tudo com antecedência.
				</p>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos muito mais do que um controle de acesso</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/person-circled.svg" />
				<h5 class="fw-bold">Controle de visitas</h5>
				<p>
					Agende, autorize e verifique. Com a GeoVictoria você pode gerenciar e visualizar a lista de visitas que entram em sua empresa.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/arrow-out.svg" />
				<h5 class="fw-bold">Controle de externos</h5>
				<p>
					Empreiteiros, fornecedores ou pessoal terceirizado. Você terá controle de acesso de todo o pessoal externo.
				</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/construction-check.svg" />
				<h5 class="fw-bold">Acesso de veículos</h5>
				<p>
					Gerencie a entrada e saída de veículos que acessam sua empresa. Você saberá em tempo real as vagas disponíveis no seu estacionamento.
				</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3 anime-fadein-childs">
				<h2 class="white fw-bold mb-3">
					Pronto para fazer parte da mudança?
				</h2>

				<p class="white fw-light mb-3">
					Sabemos que toda transformação é um desafio. Mais de 5000 empresas já gerenciam seus acessos conosco.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">
					Experimentar gratuitamente!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex anime-pop">
				<img class="why-us__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>