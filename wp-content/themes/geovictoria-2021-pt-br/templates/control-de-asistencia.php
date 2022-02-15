<?php

/*
Template Name: Control de asistencia
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
					Controle de ponto em tempo real para sua empresa
				</h1>
				<p class="gray fw-light mb-3 fs-6 fs-md-3 anime-fadein">
					Somos o sistema mais simples, amigável e eficiente para gerenciar sua equipe.
				</p>
			</div>
			<button class="button--bigblue w-100 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold">Experimentar gratuitamente!</span>
			</button>



		</div>
		<div class="hero__graphics col-12 col-md-6">
			<img class="header anime-pop" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/header-asistencia.png'>
		</div>
	</section>




	<?php if (wp_is_mobile()) : ?>

		<section class="d-flex container step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">

			<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference">
				<div class="resizer">
					<div class="step-1__ripple">
					</div>

					<div class="step-1__entry-type">
						<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-type.png'>
						<div class="step-1__entry-selector">
						</div>
					</div>

					<div class="step-1__app-screen">
						<img class="screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/app-screen.png'>
						<img class="step-1__phone-camera" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/phone-camera.png'>
						<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry.png'>
						<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry-line.png'>
					</div>

					<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>

				</div>
			</div>

			<div class="col-12 col-md-6 mb-5 step-1 step-1__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Registre seu ponto
					</h1>
					<p class="gray fw-light mb-3">
						Dependendo do método que você escolher, seus trabalhadores
						poderão registrar o ponto e será verificado
						graças à nossa tecnologia biométrica.
					</p>
				</div>
			</div>

		</section>

		<section class="d-flex container step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-2 step-2__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Sempre na nuvem!
					</h1>
					<p class="gray fw-light mb-3">
						Os dados dos registros de ponto serão protegidos na nuvem. As informações serão armazenadas em
						tempo real. E estarão isponíveis para quando você precisar!
					</p>
				</div>
			</div>

			<div class="col-12 col-md-6 step-2 step-2__graphics resizer-reference">
				<div class="resizer">
					<img class="step-2__entry-id--size-1" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
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
		</section>

		<section class="d-flex container step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
			<div class="col-12 col-md-6 mb-5 step-3 step-3__graphics d-flex resizer-reference">
				<div class="resizer">
					<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/platform.png'>
					<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/report-action.png'>
					<div class="step-3__ripple">
					</div>

					<div class="step-3__meter-container atrasos">
						<div class="step-3__meter-title">
							<h6>Atrasados</h6>
						</div>
						<div class="step-3__meter--orange">
							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>
							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--orange">
							</span>
							<small>Presente</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Planejado</small>
						</div>
					</div>

					<div class="step-3__meter-container asistencia-total">
						<div class="step-3__meter-title">
							<h6>Presença total</h6>
						</div>

						<div class="step-3__meter--blue">

							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>

						<div class="step-3__meter-left-data-container">
							<span class="step-3__meter-left-data--blue">
							</span>
							<small>Atrasados</small>
						</div>
						<div class="step-3__meter-right-data-container">
							<span class="step-3__meter-right-data">
							</span>
							<small>Presente</small>
						</div>
					</div>

					<div class="step-3__meter-container ausentismo-total">
						<div class="step-3__meter-title">
							<h6>Absenteísmo total</h6>
						</div>

						<div class="step-3__meter--orange">

							<span class="step-3__meter-num-progress"></span>
							<span class="step-3__meter-start-value">0%</span>
							<span class="step-3__meter-end-value">100%</span>

							<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
							<div class="step-3__meter-fill-mask">
								<div class="step-3__meter-bg"></div>
								<div class="step-3__meter-fill--left"></div>
								<div class="step-3__meter-fill--right"></div>
							</div>
						</div>
					</div>

					<div class="step-3__assist-bars">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-global.png'>
						<div class="step-3__bar-group">
							<div class="step-3__bar--1">100%</div>
							<div class="step-3__bar--2">100%</div>
							<div class="step-3__bar--3">100%</div>
							<div class="step-3__bar--4">100%</div>
							<div class="step-3__bar--5">100%</div>
							<div class="step-3__bar--6">100%</div>
						</div>
					</div>

					<div class="step-3__assist-line">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-line.png'>
						<img class="step-3__line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
					</div>

					<div class="step-3__plan-bars">
						<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-plan-bars.png'>
						<div class="step-3__bar-group">
							<div class="step-3__bars--1">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--2">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--3">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--4">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--5">
								<div class="step-3__bar--gray">
								</div>
								<div class="step-3__bar--blue">
								</div>
							</div>

							<div class="step-3__bars--6">
								<div class="step-3__bar--gray-small">
								</div>
								<div class="step-3__bar--blue-small">
								</div>
							</div>

							<div class="step-3__bars--7">
								<div class="step-3__bar--gray-small">
								</div>
								<div class="step-3__bar--blue-small">
								</div>
							</div>


						</div>
					</div>


				</div>
			</div>
			<div class="col-12 col-md-6 mb-5 step-3 step-3__text">
				<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
					<h1 class="gray mb-3 fw-bold">
						Relatórios instantâneos
					</h1>
					<p class="gray fw-light mb-3">
						Você obterá todos os tipos de relatórios e poderá exportá-los no
						formato que você precisar. Horas extras, turnos consolidados,
						escalas e licenças. Tudo em um só lugar!
					</p>
				</div>
			</div>
		</section>
	<?php else : ?>

		<div class="animation-container invisible container">
			<div class="animation-slider">
				<section class="d-flex step-1 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
					<div class="step-1__bg-curve">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
						<div class="bg-tail-gray"></div>
					</div>
					<div class="col-12 col-md-6 step-1 step-1__graphics resizer-reference mb-5">
						<div class="resizer">
							<div class="step-1__ripple">
							</div>

							<div class="step-1__entry-type">
								<img src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-type.png'>
								<div class="step-1__entry-selector">
								</div>
							</div>

							<div class="step-1__app-screen">
								<img class="screen" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/app-screen.png'>
								<img class="step-1__phone-camera" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/phone-camera.png'>
								<img class="step-1__biometry" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry.png'>
								<img class="step-1__biometry-line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/biometry-line.png'>
							</div>

							<img class="step-1__entry-id" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/entry-id.png'>
						</div>
					</div>

					<div class="col-12 col-md-6 step-1 step-1__text">
						<div class="align-self-center pe-md-3 text-center text-md-start">
							<h1 class="gray mb-3 fw-bold anime-fadein">
								Registre seu ponto
							</h1>
							<p class="gray fw-light mb-3 anime-fadein">
								Dependendo do método que você escolher, seus trabalhadores
								poderão registrar o ponto e será verificado
								graças à nossa tecnologia biométrica.
							</p>
						</div>
					</div>
				</section>

				<section class="d-flex step-2 animation-asistencia flex-column-reverse flex-md-row align-items-center justify-content-center">
					<div class="col-12 col-md-6 step-2 step-2__text">
						<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
							<h1 class="gray mb-3 fw-bold">
								Sempre na nuvem!
							</h1>
							<p class="gray fw-light mb-3">
								Os dados dos registros de ponto serão protegidos na nuvem. As informações serão armazenadas em
								tempo real. E estarão isponíveis para quando você precisar!
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

				<section class="d-flex step-3 animation-asistencia flex-column flex-md-row align-items-center justify-content-center">
					<div class="col-12 col-md-6 step-3 step-3__graphics resizer-reference mb-5 pb-4">
						<div class="resizer">
							<img class="step-3__platform" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/platform.png'>
							<img class="step-3__report-action" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/report-action.png'>
							<div class="step-3__ripple">
							</div>

							<div class="step-3__meter-container atrasos">
								<div class="step-3__meter-title">
									<h6>Atrasados</h6>
								</div>
								<div class="step-3__meter--orange">
									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>
									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>
								<div class="step-3__meter-left-data-container">
									<span class="step-3__meter-left-data--orange">
									</span>
									<small>Presente</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Planejado</small>
								</div>
							</div>

							<div class="step-3__meter-container asistencia-total">
								<div class="step-3__meter-title">
									<h6>Presença total</h6>
								</div>

								<div class="step-3__meter--blue">

									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>

									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>

								<div class="step-3__meter-left-data-container">
									<span class="step-3__meter-left-data--blue">
									</span>
									<small>Atrasados</small>
								</div>
								<div class="step-3__meter-right-data-container">
									<span class="step-3__meter-right-data">
									</span>
									<small>Presente</small>
								</div>
							</div>

							<div class="step-3__meter-container ausentismo-total">
								<div class="step-3__meter-title">
									<h6>Absenteísmo total</h6>
								</div>

								<div class="step-3__meter--orange">

									<span class="step-3__meter-num-progress"></span>
									<span class="step-3__meter-start-value">0%</span>
									<span class="step-3__meter-end-value">100%</span>

									<img class="step-3__meter-mask" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/meter-bg.png'>
									<div class="step-3__meter-fill-mask">
										<div class="step-3__meter-bg"></div>
										<div class="step-3__meter-fill--left"></div>
										<div class="step-3__meter-fill--right"></div>
									</div>
								</div>
							</div>

							<div class="step-3__assist-bars">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-global.png'>
								<div class="step-3__bar-group">
									<div class="step-3__bar--1">100%</div>
									<div class="step-3__bar--2">100%</div>
									<div class="step-3__bar--3">100%</div>
									<div class="step-3__bar--4">100%</div>
									<div class="step-3__bar--5">100%</div>
									<div class="step-3__bar--6">100%</div>
								</div>
							</div>

							<div class="step-3__assist-line">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-assist-line.png'>
								<img class="step-3__line" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/bars-assist-line.svg'>
							</div>

							<div class="step-3__plan-bars">
								<img class="step-3__graph" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/graph-plan-bars.png'>
								<div class="step-3__bar-group">
									<div class="step-3__bars--1">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--2">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--3">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--4">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--5">
										<div class="step-3__bar--gray">
										</div>
										<div class="step-3__bar--blue">
										</div>
									</div>

									<div class="step-3__bars--6">
										<div class="step-3__bar--gray-small">
										</div>
										<div class="step-3__bar--blue-small">
										</div>
									</div>

									<div class="step-3__bars--7">
										<div class="step-3__bar--gray-small">
										</div>
										<div class="step-3__bar--blue-small">
										</div>
									</div>


								</div>
							</div>


						</div>
					</div>
					<div class="col-12 col-md-6 step-3 step-3__text">
						<div class="align-self-center pe-md-3 anime-fadein-childs text-center text-md-start">
							<h1 class="gray mb-3 fw-bold">
								Relatórios instantâneos
							</h1>
							<p class="gray fw-light mb-3">
								Você obterá todos os tipos de relatórios e poderá exportá-los no
								formato que você precisar. Horas extras, turnos consolidados,
								escalas e licenças. Tudo em um só lugar!
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>



		<section class="animation-space">
		</section>

	<?php endif; ?>

	<section class="container benefits text-center d-flex flex-column">

		<h2 class="text-center gray fw-bold section-title anime-fadein">
			Porque escolher nosso controle de ponto?
		</h2>

		<div class="row d-flex justify-content-center">

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/hand-coin.svg" />
						<h5>Pague os salários corretamente </h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Conheça os dados reais
							do registro de jornada de seus
							colaboradores para o
							pagamento exato de suas horas trabalhadas.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/clock-folder.svg" />
						<h5>Economize tempo e dinheiro</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Não gaste demais em
							recursos e pessoal para a
							gestão do ponto!
							A GeoVictoria faz isso por você.</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-4 benefits__flippable-card-container d-flex flex-column justify-content-center">
				<div class="benefits__flip-card">
					<div class="benefits__flip-card-front flex-column align-items-center">
						<img class="benefits__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/bullseye.svg" />
						<h5>Tomada de decisões imediata</h5>
						<div class="benefits__arrow"><i class="fal fa-chevron-down"></i></div>
					</div>

					<div class="benefits__flip-card-back flex-column align-items-center px-4">
						<p class="fs-5 fw-light">Em caso de faltas e
							imprevistos, você poderá tomar decisões certas
							e em tempo real. </p>
					</div>
				</div>
			</div>

		</div> <!-- row -->
	</section> <!-- benefits -->

	<section class="container-fluid bg-blue-2 logging-types ">
		<div class="container">
			<div class="row mb-5">
				<h2>
					Você pode escolher entre diferentes tipos de marcação</h2>
			</div>
			<div class="row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs' ?>">

				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start<?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-web.png" />
					<h6>Web</h6>
					<small>Marcação de qualquer computador com acesso à Internet.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-usb.png" />
					<h6>Huellero USB</h6>
					<small>Baixo custo e fácil implementação. Esta é a marcação da impressão digital via conexão USB.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-app.png" />
					<h6>GeoVictoria App</h6>
					<small>Ideal para trabalhadores de campo. Marcação de <i>selfies</i> e georreferenciamento.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-box.png" />
					<h6>GeoVictoria Box</h6>
					<small>
						O método de discagem por excelência via relógio de controle através de conexões LAN, 3G ou wi-fi.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-call.png" />
					<h6>GeoVictoria Call</h6>
					<small>
						Um método de marcação simples e eficaz por telefone.</small>
				</div>
				<div class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-start <?php if (wp_is_mobile()) echo 'anime-fadein' ?> mb-5 mb-lg-0">
					<img class="logging-types__icon mb-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/animation-asistencia/logging-face.png" />
					<h6>GeoVictoria Face</h6>
					<small>
						Sensor sem contato, máscara e temperatura. Esta é a marcação com reconhecimento facial.
					</small>
				</div>
			</div>
		</div>
	</section>

	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein">Somos mais do que um controle de ponto</h2>
		</div>

		<div class="row anime-fadein-childs">
			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.svg" />
				<h5 class="fw-bold">Plataforma na nuvem</h5>
				<p>Fácil acesso de qualquer dispositivo com internet. Com a GeoVictoria você não perderá informações importantes.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h5 class="fw-bold">Acompanhamento</h5>
				<p>Estamos com você em todo o processo,
					desde o primeiro contato, até
					finalizar a implementação. O que
					você precisar, conte conosco.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 mt-4 flex-column text-center text-md-start">
				<img class="features__icon align-self-center align-self-md-start" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h5 class="fw-bold">Adaptabilidade</h5>
				<p>Cada indústria trabalha de uma maneira diferente. Nós nos adaptamos a cada uma delas.</p>
			</div>
		</div>
	</section>

	<div>
		<img class="bg-head-blue" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-blue.svg" />
	</div>

	<div class="container-fluid bg-blue-2">
		<section class="d-flex justify-content-between container why-us">
			<div class="col-12 col-md-6 text-center text-md-start align-self-center pe-3">
				<h1 class="white fw-bold mb-3 anime-fadein">
					Pronto para ser
					parte da mudança?
				</h1>

				<p class="white fw-light mb-3 anime-fadein">
					Sabemos que toda transformação é
					um desafio. Mais de 5000 empresas já
					gerencia o ponto eletrônico conosco.
				</p>

				<button class="fw-bold w-100 button--bigwhite mt-3 anime-fadein" data-bs-toggle="modal" data-bs-target="#contactModal">
					Experimentar gratuitamente!
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/footer-sales.png" />
			</div>
		</section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto');
get_footer();
?>