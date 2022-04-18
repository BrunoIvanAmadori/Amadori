<?php

/*
Template Name: Home
*/

get_header();
?>
<div class="bg-header">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>

<div class="container d-flex d-md-none align-items-center mt-3 justify-content-center">
	<span class="me-3">Contato comercial:</span>

	<?php
	$contacto_ventas_1 = get_theme_mod('geovictoria-2021_info_contacto_ventas_1');
	$contacto_ventas_1_sanitized = preg_replace('/\D/', '', $contacto_ventas_1);

	$contacto_email_ventas = get_theme_mod('geovictoria-2021_info_contacto_email_ventas');
	$contacto_email_ventas_sanitized = esc_html($contacto_email_ventas);
	?>

	<a href="tel:<?php echo $contacto_ventas_1_sanitized ?>">
		<div class="contact-icon d-flex justify-content-center align-items-center"><i class="fas fa-phone"></i></div>
	</a>

	<a href="mailto:<?php echo $contacto_email_ventas_sanitized ?>">
		<div class="contact-icon d-flex justify-content-center align-items-center"><i class="fas fa-envelope"></i></div>
	</a>
</div>

<main id="primary" class="site-main">
	<section class="hero container-fluid">
		<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center h-100 text-center text-md-start">
			<div class="col-12 col-md-6 mb-5">
				<div class="align-self-center pe-md-3">
					<h1 class="gray mb-3 fw-bold">
						O software de assistência e controle de ponto por excelência
					</h1>
					<p class="gray fw-light mb-3">
						Solução integral 100% na nuvem.
						Gerencie, elabore relatórios, obtenha métricas
						e economize dinheiro. Tudo em um só lugar.

					</p>
					<button class="button--bigblue bounce fw-bold w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
						<span class="white">Experimentar gratuitamente!</span>
					</button>
				</div>
			</div>
			<div class="col-12 col-md-6 mb-5">
				<img class="anime-pop" src='<?php echo esc_url(get_template_directory_uri());
											?>/dist/img/gv-home.png'>
			</div>
		</div>
	</section>
	<div class="position-relative">
		<div class="bg-curve--top-250">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-head-gray.svg" />
			<div class="bg-tail-gray"></div>
		</div>
		<section class="container col-12 trusting-companies mb-3">
			<h2 class="text-center gray section-title fw-light">Nossos clientes
				<br><span class="fw-bold">potencializam suas equipes conosco</span>
			</h2>
			<div class="d-flex flex-wrap justify-content-around">

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/securitas-logo.png'>

					</div>

				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/starbucks-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small> “É uma ferramenta que melhora a gestão dos gerentes de loja”</small></i>
					</div>
				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/adecco-logo.png'>

					</div>

				</div>


				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center">
						<img class="trusting-companies__logo--scotiabank" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/scotiabank-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>“Com GeoVictoria marcamos com segurança de nossas casas e locais de trabalho”</small></i>
					</div>
				</div>

				<div class="trusting-companies__container position-relative col-12 col-md-auto d-flex justify-content-center">
					<div class="trusting-companies__content d-flex flex-column align-items-center" type="button">
						<img class="trusting-companies__logo--cocacola" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/logos/coca-logo.png'>
						<div class="trusting-companies__arrow"><i class="fal fa-chevron-up"></i></div>
					</div>
					<div class="trusting-companies__description">
						<i><small>“Graças a este sistema, o trabalhador sabe sempre a duração do seu dia”</small></i>
					</div>
				</div>

			</div>
		</section>
	</div>

	<section class='container products mb-5'>

		<h2 class="text-center gray section-title anime-fadein"><span class="fw-light">Conheça todas as</span><br> <b>nossas soluções</b></h2>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">
				<a class="product--box <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>" href="servicos/controle-de-ponto">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-asistencia.svg" />
						<h4 class="fw-bold">Controle <br>de Ponto</h4>
						Ver mais
					</div>
				</a>
				<a class="product--box <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>" href="servicos/controle-de-acesso">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-acceso.svg" />
						<h4 class="fw-bold">Controle <br>de Acesso</h4>
						Ver mais
					</div>
				</a>
				<a class="product--box <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>" href="servicos/gestao-de-refeitorio">
					<div class=' d-flex flex-column align-content-center'>
						<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-comedor.svg" />
						<h4 class="fw-bold">Controle<br>de Refeitório</h4>
						Ver mais
					</div>
				</a>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col d-flex flex-column flex-md-row justify-content-between">
				<a class="product--card" href="servicos/business-intelligence">
					<div class="d-flex flex-column align-items-center anime-fadein">
						<div class='row'>
							<div class="col justify-content-center text-end">
								<img class="product__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/product-business.svg" />
							</div>
							<div class="col d-flex flex-column justify-content-center text-start">
								<h4 class="fw-bold">Business Intelligence</h4>
								Ver mais
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>


	<section class="d-flex flex-column container justify-content-between features">
		<div class="row">
			<h2 class="text-center gray section-title anime-fadein"><b>Economize, atualize-se, simplifique.</b><br><span class="fw-light"> Bem-vindo a um mundo de gestão</span><br> </h2>
		</div>

		<div class="row <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">
			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/report.svg" />
				<h5 class="fw-bold">Relatórios personalizados</h5>
				<p>Horas extras, atrasos, escalas. Todos os relatórios que você precisa em um só lugar.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/form.svg" />
				<h5 class="fw-bold">Formulários online</h5>
				<p>Crie, gerencie e baixe diferentes tipos de formulários conforme suas necessidades. </p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/optimizer.svg" />
				<h5 class="fw-bold">Otimizador de turnos</h5>
				<p>Não desperdice mais dinheiro! Calcule suas escalas
					de acordo com as operações do seu negócio.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/integration.svg" />
				<h5 class="fw-bold">Integração de sistemas</h5>
				<p>Nossa API se integra a todos os softwares de recursos humanos.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/cloud.svg" />
				<h5 class="fw-bold">Backup na nuvem</h5>
				<p>Informação segura e instantânea.
					Esta é a nossa nuvem de armazenamento.</p>
			</div>

			<div class="d-flex col-12 col-md-6 col-lg-4 px-4 mt-4 flex-column <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
				<img class="features__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/geo.svg" />
				<h5 class="fw-bold">Alocação inteligente</h5>
				<p>A pessoa que você precisa no local e hora indicados.</p>
			</div>
		</div>
	</section>


	<section class='container'>
		<h2 class="text-center gray mb-3 anime-fadein"><span class="fw-light">Estamos com você em toda a sua
			</span><br> experiência com a GeoVictoria</h2>
		<!-- Para mobile -->

		<div class="progressMobile__section d-flex flex-column d-lg-none text-center">
			<div class="step-1 mb-4">
				<div class="progressMobile__bg step-1 mb-4 ">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Contato</h3>
						</div>
					</div>
				</div>

				<h6 class="fw-light">Responderemos suas dúvidas,
					avaliaremos suas necessidades
					e vamos indicar o
					melhor caminho para começar nossa parceria.</h6>

			</div>

			<div class="step-2 mb-4">
				<div class="progressMobile__bg step-2 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold small-title-on-mobile">Planejamento</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Nos reuniremos para definir o escopo do que for
					contratado. Você conhecerá a equipe de trabalho e as etapas de implementação.</h6>
			</div>

			<div class="step-3 mb-4">
				<div class="progressMobile__bg step-3 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
						<div class="progressMobile__text--left">
							<h4 class="fw-bold small-title-on-mobile">Implementação</h4>
						</div>
					</div>
				</div>
				<h6 class="fw-light">A qualquer momento, nossa equipe sempre estará preparada para instalar os equipamentos e métodos de marcação solicitados.</h6>
			</div>

			<div class="step-4 mb-4">
				<div class="progressMobile__bg step-4 mb-4">
					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold small-title-on-mobile">Configurações</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Nós ajudaremos você a configurar
					seu sistema de marcação
					para que esteja ativo o mais breve possível. </h6>
			</div>

			<div class="step-5 mb-4">
				<div class="progressMobile__bg step-5 mb-4">

					<div class="progressMobile__circle">
						<img class="progressMobile__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
						<div class="progressMobile__text--left">
							<h3 class="fw-bold">Suporte</h3>
						</div>
					</div>
				</div>
				<h6 class="fw-light">Você contará com uma equipe que irá apoiá-lo
					em todos os momentos. </h6>
			</div>
		</div>

		<!-- Para desktop -->
		<div class="progress__section d-none justify-content-between d-lg-flex">
			<div class="progress__bg step-1">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-1.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Contato</h6>
						<p class="fw-light text-resize">Responderemos suas dúvidas,
							avaliaremos suas necessidades
							e vamos indicar o
							melhor caminho para começar nossa parceria.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-2 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-2.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Planejamento</h6>
						<p class="fw-light text-resize">Nos reuniremos para definir o escopo do que for
							contratado. Você conhecerá a equipe de trabalho e as etapas de implementação.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-3">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-3.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold title-resize">Implementação</h6>
						<p class="fw-light text-resize">A qualquer momento, nossa equipe sempre estará preparada para instalar os equipamentos e métodos de marcação solicitados. </p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-3" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-4 align-self-end">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-4.gif" />
					<div class="progress__text--down">
						<h6 class="fw-bold">Configurações</h6>
						<p class="fw-light text-resize">Nós ajudaremos você a configurar
							seu sistema de marcação
							para que esteja ativo o mais breve possível.</p>
					</div>
				</div>
			</div>
			<div class="align-self-center">
				<img class="progress__arrow step-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/process-arrow.svg" />
			</div>
			<div class="progress__bg step-5">
				<div class="progress__circle d-flex justify-content-center align-items-center">
					<img class="progress__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/progress-logo-step-5.gif" />
					<div class="progress__text--up">
						<h6 class="fw-bold">Suporte</h6>
						<p class="fw-light text-resize">Você contará com uma equipe que irá apoiá-lo
							em todos os momentos.</p>
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
			<div class="col-12 col-md-6 text-center text-start align-self-center pe-3 <?php if (!wp_is_mobile()) echo 'anime-fadein-childs'; ?>">
				<h1 class="white fw-bold mb-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					Porque escolher a GeoVictoria?
				</h1>
				<div class="row mb-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/ruler.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Solução sob medida:</h6>
						<small class="fw-light">Na GeoVictoria nos adaptamos ao seu negócio.
							Faremos o que você precisar.</small>
					</div>
				</div>

				<div class="row mb-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/integration.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Suporte a todo momento:</h6>
						<small class="fw-light">Estaremos 24 horas por dia, 7 dias por semana, para responder a todas as suas perguntas e orientá-lo no uso de nossa plataforma.</small>
					</div>
				</div>

				<div class="row mb-3 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/portal.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Tecnologia biométrica:</h6>
						<small class="fw-light">Contamos com a melhor tecnologia biométrica: registro de impressão digital,
							leitura da palma da mão, reconhecimento facial. Marcações 100% verificadas.</small>
					</div>
				</div>

				<div class="row mb-3 mb-lg-1 <?php if (wp_is_mobile()) echo 'anime-fadein'; ?>">
					<div class="col-3 d-flex justify-content-end flex-row align-self-center">
						<img class="why-us__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icons/white/dollar.svg" />
					</div>
					<div class="col py-2 text-start">
						<h6>Pague pelo que usar:</h6>
						<small class="fw-light">Quer sejam dez, cem ou mil usuários. Você só vai pagar pelo
							número de trabalhadores que devem registrar o ponto. Sem custos adicionais!</small>
					</div>
				</div>

				<button class="fw-bold button--bigwhite mt-3 anime-fadein w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
					Entre em contato conosco agora
				</button>
			</div>
			<div class="col-5 h-100 justify-content-center d-none d-md-flex">
				<img class="why-us__img anime-pop" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/soporte-personalizado.png" />
			</div>
		</section>
	</div>

	<section class="d-flex justify-content-center container call-to-action anime-fadein">
		<div class="col-12 col-lg-6 text-center my-3">
			<img class="call-to-action__arrow" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
			<img class="call-to-action__arrow--left" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/call-to-action/arrow.svg'>
			<h2 class="fw-bold mb-4">
				Pronto para ser <br>parte da mudança?
			</h2>
			<button class="button--bigblue bounce" data-bs-toggle="modal" data-bs-target="#contactModal">
				<span class="white fw-bold w-100">Experimentar gratuitamente!</span>
			</button>
		</div>

	</section>
</main><!-- #main -->
<?php
get_template_part('template-parts/modal', 'contacto', ['origin' => 'front-page']);
get_footer();
?>