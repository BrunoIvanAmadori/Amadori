<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<section class="hero container justify-content-center mt-5">
	<div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100">
		<div class="col-12 col-md-6 text-center text-lg-start">
			<div class="align-self-center pe-md-3">
				<h1 class="gray mb-3 fw-bold">
					Precios
				</h1>
				<h4 class="fw-light mb-4 anime-fadein">
					A la medida de tu empresa.
				</h4>

			</div>
		</div>
		<div class="hero__graphics justify-content-end col-12 col-md-6">
			<img class="anime-pop header-calc" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/pricer/header-pricer.png'>
		</div>
	</div>
</section>

<section class="topbox">
	<div class="gv-container">
		<h2 class="gv-h2 topbox-title">Calcula tu tarifa</h2>
		<p class="topbox-description">Selecciona el número de empleados, los módulos que te interesan y tu industria <br> <b>Obtendrás el precio en sólo 3 clics.</b> Cobramos según la cantidad de usuarios activos.</p>
	</div>
</section>

<section class="calculator">
	<div class="columns">
		<div class="column is-70">

			<div class="gv-container" style="height: auto;">


				<div class="columns">
					<div class="column2 widthcolumna">
						<div class="buttons has-addons is-rounded">
							<button id="anual-bt" class="button" onclick="actionPeriodo('A')" style="border-radius: 15px 1px 1px 15px;">Anual</button>
							<button id="mensual-bt" class="button is-info is-selected" onclick="actionPeriodo('M')" style="border-radius: 1px 15px 15px 1px;">Mensual</button>
						</div>
					</div>
					<div class="column2 gv-align-left">
						<span class="slide-labels2">Ahorra hasta un 20% pagando la anualidad.</span>
					</div>
					<div class="column2 gv-align-right mlauto">
						<span class="selecciona">Selecciona tu industria: </span>
						<div class="select is-rounded">
							<select id="industria-select" onchange="industryAction();" style="border-width: thin;">
								<option value="ct">Construcción</option>
								<option value="rt">Retail</option>
								<option value="sg">Seguridad</option>
								<option value="bc">Banca</option>
								<option value="sl">Salud</option>
								<option value="ag">Agroindustria</option>
								<option value="os">Outsourcing</option>
								<option value="ot">Otra</option>
							</select>
						</div>
					</div>
				</div>


				<div class="calculator-info">
					<div class="columns is-vcentered">
						<div class="column is-3 gv-align-center quantity-container">
							<p>N° de empleados</p><input class="input" id="total-empleados-input" oninput="totalEmpleadosAction()" placeholder="1" type="text">
						</div>

						<div class="column is-6">
							<div class="slide-labels" style="position:relative;">
								<span>1 empleado</span>
								<span class="division hundred">300</span>
								<span class="division thousand">750</span>
								<span>+ 1000</span>
							</div>

							<div class="mall-slider-handles noUi-target noUi-ltr noUi-horizontal" data-end="58.90" data-max="78.9" data-min="50" data-start="50.00" data-target="price" id="myRange" style="width: 100%">
								<div class="noUi-base" style="display: none;">
									<div class="noUi-connects"></div>
									<div class="noUi-origin" style="transform: translate(-41.1111%, 0px); z-index: 4;">
										<div class="noUi-handle noUi-handle-lower" data-handle="1" tabindex="1" role="slider" aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="100.0" aria-valuenow="58.9" aria-valuetext="750.00"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="column is-3 resumen active" id="resumen-text"><span>Total:</span>
							<p class="total"><span id="currencyGV-box"></span> <span id="total-general">16,50</span> <?php echo $iva_check; ?> <span class="min-text">al mes</span></p>
							<p id="total-asistencia-container">UF <span id="total-asistencia">0,00</span> <span class="min-text">por <span id="personas-asistencia">750</span> Control de asistencia</span></p>
						</div>

						<div class="column is-3 resumen" id="resumen-btn">
							<a style="background-color:#3298dc!important" class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="modalAction('cotizacion-modal')">Cotizar</a>
							<span class="text-cotizar">Habla con nosotros, tenemos <h4>un precio especial para ti.</h4></span>
						</div>
					</div>
				</div>
			</div>

			<div class="gv-container has-text-centered">
				<div class="elements-container columns">
					<article class="element column active">
						<div onclick="actionProducts('Asistencia', 'check-asist')" style="display: contents;">
							<div class="btn-chk" id="check-asist"><span class="mdi mdi-check"></span></div>
							<img alt="" class="big-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_1.svg">
							<span>Asistencia y turnos</span>
						</div>
						<div><span class="mdi"></span> <span class="mdi"></span></div>
						<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icono-persona.svg"> Cant.:<input pattern="[0-9]*" class="input" id="total-empleados-asistencia-input" oninput="totalEmpleadosProductoAction('asist')" placeholder="0" type="text"></span></div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Acceso', 'check-acces')" style="display: contents;">
							<div class="btn-chk" id="check-acces"><span class="mdi mdi-check"></span></div>
							<img alt="" class="big-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_2.svg">
							<span>Gestión de acceso</span>
						</div>
						<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-acceso-input" oninput="totalEmpleadosProductoAction('acces')" placeholder="0" type="text" readonly="readonly"></span></div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Comedor', 'check-comed')" style="display: contents;">
							<div class="btn-chk" id="check-comed"><span class="mdi mdi-check"></span></div>
							<img alt="" class="big-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_3.svg">
							<span>Portal comedor y casino</span>
						</div>
						<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-comedor-input" oninput="totalEmpleadosProductoAction('comed')" placeholder="0" type="text" readonly="readonly"></span></div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Externos', 'check-exter')" style="display: contents;">
							<div class="btn-chk" id="check-exter"><span class="mdi mdi-check"></span></div>
							<img alt="" class="big-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_4.svg">
							<span>Portal externos</span>
						</div>
						<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-externos-input" oninput="totalEmpleadosProductoAction('exter')" placeholder="0" type="text" readonly="readonly"></span></div>
					</article>

				</div>

				<div class="elements-container columns flex-wrap">

					<article class="element column">
						<div onclick="actionProducts('Powerbi', 'check-powerbi')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-powerbi"><span class="mdi mdi-check"></span></div>
							<img alt="Dashboard en power BI" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_5.svg">
							<span>Dashboard BI</span>
						</div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Reporte', 'check-reporte')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-reporte"><span class="mdi mdi-check"></span></div>
							<img alt="Reportes personalizados" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_6.svg">
							<span>Reportes personalizados</span>
						</div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Formapp', 'check-formapp')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-formapp"><span class="mdi mdi-check"></span></div>
							<img alt="Formulario App" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_7.svg">
							<span>Formulario App</span>
						</div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Optimizador', 'check-optimizador')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-optimizador"><span class="mdi mdi-check"></span></div>
							<img alt="Optimizador de turnos" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_8.svg">
							<span>Optimizador de turnos</span>
						</div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Integraerp', 'check-integraerp')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-integraerp"><span class="mdi mdi-check"></span></div>
							<img alt="Integración con otros sistemas" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_9.svg">
							<span>Integración con otros sistemas</span>
						</div>
					</article>

					<article class="element column">
						<div onclick="actionProducts('Soporte', 'check-soporte')" style="display: contents;">
							<div class="btn-chk btn-sub-chk" id="check-soporte"><span class="mdi mdi-check"></span></div>
							<img alt="Soporte 24/7" class="small-icon" src="<?php echo get_template_directory_uri() ?>/gvcalc/img/icons/icon_10.svg">
							<span>Soporte 24/7</span>
						</div>
					</article>

				</div>

			</div>


		</div>
		<div class="column is-30">


			<div class="elements-container has-text-centered">

				<article class="element column ml0" style="height: auto;width: auto;margin-top: unset;">
					<div class="columns is-vcentered" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-7 gv-align-left paddl0">
							<img alt="" class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/gvcalc/img/logo-gv-nuevo.png">
						</div>
						<div class="column is-3 gv-align-right resumen">
							<span class="slide-labels" style="margin-bottom: 0; text-align: left; font-size: 12px; line-height: 13px;">Nuestra solución cumple con:</span>
						</div>
						<div class="column is-2 gv-align-center" style="padding:0">
							<img alt="" class="img-dt" src="https://i.imgur.com/QXczMjd.jpg" width="80px" height="80px">
						</div>
					</div>
					<div id="banner-side" style="width: 100%; display: none;">
						<img alt="" class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/gvcalc/img/banner-side.png" onclick="modalAction('cotizacion-modal')" style="width: 100%; height:auto;">
					</div>
					<div id="calc-side" style="margin: inherit; width: 90%;">
						<div class="resumen active" id="resumen-text" style="width: 100%;">
							<p class="total">Total*: <span class="box-total"><span id="currencyGV-general">UF</span> <span id="total-general-box" style="vertical-align: unset;">16,50</span> <?php echo $iva_check; ?> <span class="min-text">al mes</span></span></p>
						</div>

						<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
							<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
								<span class="slide-labels"><b>Asistencia:</b></span>
							</div>
							<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
								<span class="slide-labels">$<span id="asistencia-box" style="display: contents;">0</span> por usuario al mes</span>
							</div>
						</div>

						<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
							<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
								<span class="slide-labels"><b>Acceso:</b></span>
							</div>
							<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
								<span class="slide-labels">$<span id="acceso-box" style="display: contents;">0</span> por usuario al mes</span>
							</div>
						</div>

						<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
							<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
								<span class="slide-labels"><b>Comedor:</b></span>
							</div>
							<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
								<span class="slide-labels">$<span id="comedor-box" style="display: contents;">0</span> por usuario al mes</span>
							</div>
						</div>

						<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
							<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
								<span class="slide-labels"><b>Externos:</b></span>
							</div>
							<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
								<span class="slide-labels">$<span id="externos-box" style="display: contents;">0</span> por usuario al mes</span>
							</div>
						</div>
					</div>
					<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
						<span class="slide-labels"><b>Funcionalidades adicionales</b></span><span id="subproductos-box" class="slide-labels"></span>
					</div>

					<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
						<!-- <span class="slide-labels"><b><i>*Valores referenciales utilizando la UF del día</i></b></span> <!-->
					</div>

					<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
						<span class="slide-labels">Trabajamos con los de tu industria:</span>
					</div>
					<div class="is-vcentered" style="width: 100%;">
						<div class="gv-align-center">
							<img id="industria-img" alt="" class="" src="<?php echo esc_url(get_template_directory_uri()); ?>/gvcalc/img/ind_ot.png" style="width: 100%; height:auto;">
						</div>
					</div>

					<div class="column is-3 resumen" id="cotization-pdf-btn" style="width: auto;">
						<a class="btn btn-primary" onclick="modalAction('cotizacion-modal')">Descargar informe detalle con valores</a>
					</div>

				</article>
			</div>
		</div>
	</div>
</section>

<!-- TABBOX -->
<section class="tabs-container gv-tab">
	<div class="gv-container">
		<div class="tabs-inner-container">
			<div class="tab-action prev-tab-container hidden" id="prev-tab" onclick="prevTab()">
				<div class="inner-container"><span class="mdi mdi-chevron-left"></span></div>
			</div>
			<div class="tabs is-centered" id="tabs-list">
				<ul>
					<li class="tab asist-contain is-active" id="asist-tab"><a onclick="activeTab('asist-contain', 'asist-tab')">Control de asistencia y turnos</a></li>
					<li class="tab acces-contain" id="acces-tab"><a onclick="activeTab('acces-contain', 'acces-tab')">Control de Acceso</a></li>
					<li class="tab comed-contain" id="comed-tab"><a onclick="activeTab('comed-contain', 'comed-tab')">Portal de Comedor y Casino.</a></li>
					<li class="tab extern-contain" id="extern-tab"><a onclick="activeTab('extern-contain', 'extern-tab')">Portal de Externos</a></li>
					<li class="tab adicio-contain" id="adicio-tab"><a onclick="activeTab('adicio-contain', 'adicio-tab')">Adicionales</a></li>
				</ul>
			</div>
			<div class="tab-action next-tab-container" id="next-tab" onclick="nextTab()">
				<div class="inner-container"><span class="mdi mdi-chevron-right"></span></div>
			</div>
		</div>
	</div>
</section>

<section class="gv-specific-features tabs-contain active" id="asist-contain">
	<div class="gv-container">
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary" id="asist-cert-title">Legislación local</h3>
					<p class="gv-specific-features-body-text" id="asist-cert-txt"><?php echo $legislacionText; ?></p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Soluciones por industria</h3>
					<p class="gv-specific-features-body-text">Somos expertos en las industrias de servicios, construcción, retail, banca, salud, agroindustria, entre otras. Esto se traduce en cortos periodos de implementación, reportería, métodos de registro y funcionalidades especializados. Como ejemplo, GeoVictoria desarrollo una solución de control de rondas y tiempos muertos de los guardias.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiples métodos de registro</h3>
					<p class="gv-specific-features-body-text">En GeoVictoria somos expertos en control y gestión de asistencia, siendo la empresa con mayor variedad de métodos de registro:<br>
						• <b>WEB:</b> registro desde tu computadora. Ideal para personal administrativo.<br>
						• <b>APP:</b> registra desde la app de GeoVictoria con georreferencia y biometría facial.<br>
						• <b>CALL:</b> marcaje con biometría de voz desde cualquier teléfono de red fija o celular<br>
						• <b>USB:</b> lector usb que se conecta a un computador con Windows<br>
						• <b>BOX:</b> registra tu asistencia desde un reloj control con o sin contacto (biometría facial, de palma o huella dactilar). Conectividad Ethernet, wifi, 3/4g.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Reglas Masivas y Flujo de aprobación de HH.EE</h3>
					<p class="gv-specific-features-body-text">Configura las reglas de autorización de horas extra y permisos, descuento de atrasos, y compensación semanal de horas trabajadas automáticamente.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Customización: Un traje a tu medida</h3>
					<p class="gv-specific-features-body-text">Somos en América Latina, Europa y Brasil la empresa de control y gestión de asistencia con mayor cantidad de programadores. El software es 100% nuestro, por lo que podemos ajustarlo exactamente a tus necesidades. </p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary"></h3>
					<p class="gv-specific-features-body-text"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gv-specific-features tabs-contain" id="acces-contain">
	<div class="gv-container">
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Gestión Centralizada</h3>
					<p class="gv-specific-features-body-text">Podrás gestionar los accesos a tus instalaciones desde un solo lugar. Cuenta con la información del estado de conexión de los dispositivos y evita así cualquier incidente o intento de vulneración del sistema. Nuestro sistema es accesible desde cualquier computador con acceso a Internet</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiples métodos de validación</h3>
					<p class="gv-specific-features-body-text">Desde el clásico reloj control con lector de huella, lector de tarjeta de identificación o cédula de Identidad hasta los más modernos con reconocimiento de rostro e incluso reconocimiento de mascarilla y lectura de temperatura corporal.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Soluciones complementarias</h3>
					<p class="gv-specific-features-body-text">En ser expertos nos ha permitido profundizar en el desarrollo de soluciones complementarias, como por ejemplo el control de visitas y el control de aforo y aforo máximo. Si te interesan estas soluciones, solicítalas con un ejecutivo.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solución global 100% integrada</h3>
					<p class="gv-specific-features-body-text">Nuestro sistema de Control de Acceso se integra de manera nativa con cualquier otra solución de GeoVictoria.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Equipo de post-venta e implementación</h3>
					<p class="gv-specific-features-body-text">Contamos con un equipo de soporte especializado que te apoyará con el uso de la plataforma y hardware, además de un gran equipo de desarrollo para cualquier requerimiento de nuestros clientes.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary"></h3>
					<p class="gv-specific-features-body-text"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gv-specific-features tabs-contain" id="comed-contain">
	<div class="gv-container">
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Gestión en tiempo real</h3>
					<p class="gv-specific-features-body-text">Gestione de manera online y en tiempo real las raciones de alimento de su compañía. Tenga el control de quién, cuántas y dónde recibe sus raciones.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Reportería personalizada</h3>
					<p class="gv-specific-features-body-text">A través de nuestra plataforma podrás definir las personas habilitadas para recibir alimento, el tipo de comida, horario y lugar, para que tus colaboradores puedan generar un ticket, en uno de los equipos con validación biométrica en el comedor asociado. Además, podrás filtrar por fecha, usuario o tipo de reporte. </p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Planificación y ahorro</h3>
					<p class="gv-specific-features-body-text">Genera una correcta planificación y control de las raciones de comida para tus colaboradores, evitando tener mermas de alimentos, colaboradores sin su ración correspondiente o incumplimiento de los servicios, en caso de que una empresa externa preste el servicio de alimentación a tu empresa.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiples métodos de validación</h3>
					<p class="gv-specific-features-body-text">Desde el clásico reloj control con lector de huella, lector de tarjeta de identificación o cédula de Identidad hasta los más modernos con reconocimiento de rostro e incluso reconocimiento de mascarilla y lectura de temperatura corporal.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solución global 100% integrada</h3>
					<p class="gv-specific-features-body-text">Nuestro sistema de Portal de Comedor y Casino| se integra de manera nativa con cualquier otra solución de GeoVictoria.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary"></h3>
					<p class="gv-specific-features-body-text"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gv-specific-features tabs-contain" id="extern-contain">
	<div class="gv-container">
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Monitoreo en tiempo real</h3>
					<p class="gv-specific-features-body-text">Información consolidada de las personas que ingresaron a dependencias de la empresa mandante. Todo lo anterior mediante tecnología biométrica y consolidada desde una plataforma online, que podrás gestionar desde cualquier lugar.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Reportería especializada</h3>
					<p class="gv-specific-features-body-text">Acceda a reportería especializada sobre el flujo del personal externo como, por ejemplo: porcentaje de cumplimiento de contrato por punto.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Cumplimiento de contratos</h3>
					<p class="gv-specific-features-body-text">Corroborar que se cumplió con la dotación y horas pactadas con los contratistas y/o proveedores.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiples métodos de validación</h3>
					<p class="gv-specific-features-body-text">Desde el clásico reloj control con lector de huella, lector de tarjeta de identificación o cédula de Identidad hasta los más modernos con reconocimiento de rostro e incluso reconocimiento de mascarilla y lectura de temperatura corporal.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solución global 100% integrada</h3>
					<p class="gv-specific-features-body-text">Nuestro sistema de Portal de externos se integra de manera nativa con cualquier otra solución de GeoVictoria.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary"></h3>
					<p class="gv-specific-features-body-text"></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gv-specific-features tabs-contain" id="adicio-contain">
	<div class="gv-container">
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Dashboards en Power BI</h3>
					<p class="gv-specific-features-body-text">Visualiza y gestiona en forma sencilla y centralizada los KPI’s de tu empresa. El precio incluye un dashboard de control de asistencia. Si quieres uno distinto, lo puedes cotizar con tu ejecutivo. En GeoVictoria nos ajustamos a tus necesidades.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Reportes personalizados</h3>
					<p class="gv-specific-features-body-text">En GeoVictoria te entregamos un traje a la medida. Si los reportes que vienen por defecto en GeoVictoria no se ajustan a tu negocio, te haremos todos los reportes que gustes. El plan incluye 1 reporte personalizado en base a la información ya disponible en GeoVictoria. Si quieres uno distinto, lo puedes cotizar con tu ejecutivo. En GeoVictoria nos ajustamos a tus necesidades.</p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Formulario App</h3>
					<p class="gv-specific-features-body-text">Creación de formularios online que te ayudarán a recolectar datos de una manera rápida y sencilla.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Optimizador de turnos</h3>
					<p class="gv-specific-features-body-text">La definición y asignación de los horarios de trabajo no son tareas sencillas. En GeoVictoria te entregamos una herramienta que permitirá optimizar este proceso. </p>
				</div>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Soporte 24/7/365</h3>
					<p class="gv-specific-features-body-text">Accede a un soporte personalizado 24/7 los 365 días del año. El horario de soporte que viene incluido de manera gratuita es de lunes a viernes de 8.30 a 18.30 horas.</p>
				</div>
			</div>
			<div class="column is-5">
				<div class="gv-specific-features-body">
					<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Integración con otros sistemas</h3>
					<p class="gv-specific-features-body-text">Tenemos una API que permite la fácil integración con cualquier ERP o sistema utilizado en tu empresa. De forma adicional, tenemos un equipo de más de 70 programadores que ayudarán en integraciones y solicitudes más difíciles. El precio incluye una integración estándar. En el levantamiento técnico se resolverá esto. </p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal" id="cotizacion-modal">
	<div class="modal-background" onclick="modalAction('cotizacion-modal')" style="z-index: 1;"></div>
	<div class="modal-content">
		<div class="gv-modal-card" style="z-index: 2;width: 450px;">
			<div class="gv-modal-card-header">
				<span id="step1-title">
					<h6>Estás a <b>1 paso</b> de descargar tu informe</h6>
				</span><span id="step2-title" style="display: none">
					<h6>Cotización</h6>
				</span>
				<button aria-label="close" class="modal-close" onclick="modalAction('cotizacion-modal')"></button>
			</div>
			<div class="gv-modal-card-body">
				<div class="gv-modal-card-body-content">

					<div id="step1-content">

						<?php include_once("calculator_form.php"); ?>


						<!--					<form class="form-in-modal" id="cotizacion-form" onsubmit="return false;">
					<div class="field">
					  <label class="label">Nombre</label>
					  <div class="control">
						<input class="input" name="name" placeholder="Agregue su nombre completo aquí..." type="text" required>
					  </div>
					</div>
					<div class="field">
					  <label class="label">Correo</label>
					  <div class="control">
						<input onkeyup="validateEmail()" id="email" class="input" name="email" placeholder="Agregue su correo aquí..." type="email" required>
					  </div>
					</div>
					<div class="field">
					  <label class="label">Empresa</label>
					  <div class="control">
						<input class="input" name="company" placeholder="Agregue el nombre de su empresa..." type="text" required>
					  </div>
					</div>		
					<div class="field">
					  <label class="label">Teléfono</label>
					  <div class="control">
						<input class="input" name="phone" placeholder="Agregue su número de contacto..." type="number" required>
					  </div>
					</div> 
					
					<div class="gv-modal-card-body-action" style="justify-content: center;">
					  <button class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="cotizacionStep1()">Enviar información</button>
					</div>	
					</form>-->
					</div>
					<div id="step2-content" style="text-align: center; display: none">
						<p>Gracias por cotizar con GeoVictoria<br>ya puedes descargar tu <a onclick="cotizationtoPdf()" style="color: var(--primary-color);">cotizacion.pdf</a></p>
						<p>Para más información sobre valores de equipos,<br>comunícate con un <a target="_blank" href="https://api.whatsapp.com/send/?phone=56967308227&text=%C2%A1Hola!+me+gustaria+consultar+acerca+de+uno+de+sus+productos&app_absent=0">vendedor</a></p>

						<div class="gv-modal-card-body-action" style="justify-content: center;">
							<button class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="cotizationtoPdf()">Descargar</button>
						</div>

					</div>
				</div>

			</div>
			<div class="gv-modal-form-interaction-answer"></div>
		</div>
	</div>
</div>

<!-- FIN TABBOX -->