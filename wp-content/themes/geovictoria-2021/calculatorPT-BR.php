<section class="fondo-personaje">
		<img alt="Geo Victoria" src="/wp-content/themes/geovictoriacom/gvcalc/img/personaje-fondo.svg">
		<div class="title-precio">
			<h2>Preços</h2>
			<p>sob medida para sua empresa</p>
		</div>
	</section>

	<section class="topbox">
		<div class="gv-container"><h2 class="gv-h2 topbox-title">Monte Seu Plano</h2><p class="topbox-description">Selecione o número de funcionários, os módulos que interessam a você e ao seu setor. Você obterá o preço em apenas 3 cliques. Cobramos de acordo com o número de usuários ativos.</div>
	</section>

	<section class="calculator">
	<div class="columns">
	<div class="column is-70">

		<div class="gv-container" style="height: auto;">


			<div class="columns">
				<div class="column2 widthcolumna">
					<div class="buttons has-addons is-rounded">
						<button id="anual-bt" class="button" onclick="actionPeriodo('A')" style="border-radius: 15px 1px 1px 15px;">Anual</button>
						<button id="mensual-bt" class="button is-info is-selected" onclick="actionPeriodo('M')" style="border-radius: 1px 15px 15px 1px;">Mensal</button>
					</div>				
				</div>
				<div class="column2 gv-align-left">
					<span class="slide-labels2">Economize até 20% ao escolher o plano anual</span>			
				</div>
				<div class="column2 gv-align-right mlauto">
					<span class="selecciona">Escolha a sua industria </span>
					<div class="select is-rounded">
					  <select id="industria-select" onchange="industryAction();" style="border-width: thin;">
						<option value="ct">Construção</option>
						<option value="rt">Varejo</option>
						<option value="sg">Segurança</option>
						<option value="bc">Bancário</option>
						<option value="sl">Saúde</option>
						<option value="ag">Agronegócio</option>
						<option value="os">Terceirização</option>
						<option value="ot">Outro</option>
					  </select>
					</div>	
				</div>
			</div>
							
			
			<div class="calculator-info">
				<div class="columns is-vcentered">
					<div class="column is-3 gv-align-center quantity-container"><p>N° de funcionários</p><input class="input" id="total-empleados-input" oninput="totalEmpleadosAction()" placeholder="1" type="text"></div>
					
					<div class="column is-6">
						<div class="slide-labels" style="position:relative;">
							<span>Funcionário</span> 
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
					
					<div class="column is-3 resumen active" id="resumen-text"><span>Total:</span><p class="total"><span id="currencyGV-box"></span> <span id="total-general">16,50</span> <?php echo $iva_check; ?> <span class="min-text">ao mês</span></p><p id="total-asistencia-container">UF <span id="total-asistencia">0,00</span> <span class="min-text">por <span id="personas-asistencia">750</span> Control de asistencia</span></p></div>
					
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
						<img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/asist.png">
						<span>Controle de ponto e escalas</span>
					</div>
					<div><span class="mdi"></span> <span class="mdi"></span></div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Quant.:<input pattern="[0-9]*" class="input" id="total-empleados-asistencia-input" oninput="totalEmpleadosProductoAction('asist')" placeholder="0" type="text"></span></div>					
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Acceso', 'check-acces')" style="display: contents;">
                        <div class="btn-chk" id="check-acces"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/acces.png">
                        <span>Controle de acesso</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Quant.:<input class="input" id="total-empleados-acceso-input" oninput="totalEmpleadosProductoAction('acces')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Comedor', 'check-comed')" style="display: contents;">
                        <div class="btn-chk" id="check-comed"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/comed.png">
                        <span>Portal de refeitório e restaruante</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Quant.:<input class="input" id="total-empleados-comedor-input" oninput="totalEmpleadosProductoAction('comed')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Externos', 'check-exter')" style="display: contents;">
                        <div class="btn-chk" id="check-exter"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/exter.png">
                        <span>Controle de Visitas</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Quant.:<input class="input" id="total-empleados-externos-input" oninput="totalEmpleadosProductoAction('exter')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>
				
			</div>
			
			<div class="elements-container columns">

                <article class="element column">
                    <div onclick="actionProducts('Powerbi', 'check-powerbi')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-powerbi"><span class="mdi mdi-check"></span></div>
                        <img alt="Dashboard en power BI" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-10.svg">
                        <span>Dashboard em Power BI</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Reporte', 'check-reporte')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-reporte"><span class="mdi mdi-check"></span></div>
                        <img alt="Reportes personalizados" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-11.svg">
                        <span>•	Relatórios personalizados</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Formapp', 'check-formapp')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-formapp"><span class="mdi mdi-check"></span></div>
                        <img alt="Formulario App" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-12.svg">
                        <span>Formulários App</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Optimizador', 'check-optimizador')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-optimizador"><span class="mdi mdi-check"></span></div>
                        <img alt="Optimizador de turnos" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-13.svg">
                        <span>Otimizador de turno</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Integraerp', 'check-integraerp')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-integraerp"><span class="mdi mdi-check"></span></div>
                        <img alt="Integración con otros sistemas" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-14.svg">
                        <span>Integração com outros sistemas</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Soporte', 'check-soporte')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-soporte"><span class="mdi mdi-check"></span></div>
                        <img alt="Soporte 24/7" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-15.svg">
                        <span>Suporte 24/7</span>
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
						<img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/LOGO-GV-NUEVO.svg">
					</div>
					<div class="column is-3 gv-align-right resumen">
						<span class="slide-labels" style="margin-bottom: 0; text-align: left; font-size: 12px; line-height: 13px;">Nossa solução cumpre com</span>
					</div>
					<div class="column is-2 gv-align-center" style="padding:0">
						<img alt="" class="img-dt" src="/wp-content/themes/geovictoriacom/gvcalc/img/reg_pt-br.jpg" width="80px" height="80px">
					</div>	
				</div>
				<div id="banner-side" style="width: 100%; display: none;">
					<img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/banner-side.png" onclick="modalAction('cotizacion-modal')" style="width: 100%; height:auto;">
				</div>
				<div id="calc-side" style="margin: inherit; width: 90%;">
					<div class="resumen active" id="resumen-text" style="width: 100%;">
						<p class="total">Total*: <span class="box-total"><span id="currencyGV-general">UF</span> <span id="total-general-box" style="vertical-align: unset;">16,50</span>  <?php echo $iva_check; ?> <span class="min-text">ao mês</span></span></p>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Controle de ponto e escalas</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="asistencia-box" style="display: contents;">0</span> por usuário ao mês</span>
							


							
						</div>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Controle de acesso</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="acceso-box" style="display: contents;">0</span> por usuário ao mês</span>
							

							
						</div>
					</div>

					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Portal de refeitório e restaurante</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="comedor-box" style="display: contents;">0</span> por usuário ao mês</span>
							

							
						</div>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Controle de visitas</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="externos-box" style="display: contents;">0</span> por usuário ao mês</span>
							

							
						</div>
					</div>		
				</div>
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<span class="slide-labels"><b>Funcionalidades adicionais</b></span><span id="subproductos-box" class="slide-labels"></span>
				</div>
				
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<!-- <span class="slide-labels"><b><i>*Valores referenciales utilizando la UF del día</i></b></span> <!-->
				</div>
				
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<span class="slide-labels">Trabalhamos com outras empresas da sua indústria</span>
				</div> 
				<div class="is-vcentered" style="width: 100%;">
					<div class="gv-align-center">
						<img id="industria-img" alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/ind_ot.png" style="width: 100%; height:auto;">
					</div>	
				</div>
				
				<div class="column is-3 resumen" id="cotization-pdf-btn" style="width: auto;">
					<a  class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="modalAction('cotizacion-modal')">Baixar informação com os valores</a>
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
					<ul><li class="tab asist-contain is-active" id="asist-tab"><a onclick="activeTab('asist-contain', 'asist-tab')">Controle de Ponto e Escalas</a></li><li class="tab acces-contain" id="acces-tab"><a onclick="activeTab('acces-contain', 'acces-tab')">Controle de Acesso</a></li><li class="tab comed-contain" id="comed-tab"><a onclick="activeTab('comed-contain', 'comed-tab')">Gestão de Refeitorio.</a></li><li class="tab extern-contain" id="extern-tab"><a onclick="activeTab('extern-contain', 'extern-tab')">Controle de visita</a></li><li class="tab adicio-contain" id="adicio-tab"><a onclick="activeTab('adicio-contain', 'adicio-tab')">Modulos Complementares</a></li></ul>
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
				<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary" id="asist-cert-title">Portarias 1510/2009 e 373/2011</h3>
				   <p class="gv-specific-features-body-text" id="asist-cert-txt"><?php echo $legislacionText; ?></p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Soluções por Setor</h3>
				   <p class="gv-specific-features-body-text">Somos especialistas nos setores de serviços, construção, varejo, bancos, saúde e agronegócio, entre outros. Isso se traduz em curtos períodos de implementação, relatórios, métodos de registro e funcionalidades especializadas. Como exemplo, a GeoVictoria desenvolveu uma solução para controlar rondas e timeouts dos guardas.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Multiplos métodos de registro</h3>
				   <p class="gv-specific-features-body-text">Na GeoVictoria somos especialistas em controle e gestão de ponto, sendo a empresa com a maior variedade de métodos de registro:<br>
•	<b>WEB:</b> registro direto do computador. Ideal para pessoal administrativo<br>
•	<b>APP:</b> registro de ponto no aplicativo GeoVictoria com georreferenciamento e biometria facial.<br>
•	<b>CALL:</b> registro com biometria de voz de qualquer telefone fixo ou celular<br>
•	<b>USB:</b> leitor usb conectado a um computador Windows<br>
•	<b>REP:</b> registro de ponto a partir de um relógio de controle com ou sem contato (biometria facial, palma ou digital). Conectividade Ethernet, wi-fi, 3 / 4g.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Regras massivas e fluxo de aprovação de Horas Extras</h3>
				   <p class="gv-specific-features-body-text">Configure as regras de autorização de horas extras e permissões, desconto de atrasos e compensação semanal de horas trabalhadas automaticamente.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Customização: Feito sob medida para suas necessidades</h3>
				   <p class="gv-specific-features-body-text">Na América Latina, Europa e Brasil, somos a empresa de controle e gestão de ponto com maior número de programadores. O software é 100% nosso, portanto podemos ajustá-lo exatamente às suas necessidades.

</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Gestão Centralizada</h3>
				   <p class="gv-specific-features-body-text">Poderá gerenciar os acessos às suas instalações a partir de um único local. Conte com as informações sobre o estado de conexão dos dispositivos e, assim, evite qualquer incidente ou tentativa de violação do sistema. Nosso sistema pode ser acessado de qualquer computador com acesso à Internet</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiplos métodos de validação</h3>
				   <p class="gv-specific-features-body-text">Desde o clássico relógio de controle com leitor de impressão digital, carteira de identidade ou crachá de identificação, até os mais modernos com reconhecimento facial e até mesmo reconhecimento de máscara e medição da temperatura corporal.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Soluções complementares</h3>
				   <p class="gv-specific-features-body-text">Ser especialistas tem nos permitido aprofundar o desenvolvimento de soluções complementares, como controle de visitas e controle de capacidade e capacidade máxima. Se você está interessado nessas soluções, peça-as a um executivo.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solução global 100% integrada</h3>
				   <p class="gv-specific-features-body-text">Nosso sistema de controle de acesso se integra nativamente com qualquer outra solução da GeoVictoria.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Equipe de pós-venda e implementação</h3>
				   <p class="gv-specific-features-body-text">Contamos com uma equipe de suporte especializada que lhe dará apoio no uso da plataforma e do hardware, além de uma ótima equipe de desenvolvimento para qualquer necessidade de nossos clientes.</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Gestão em tempo real</h3>
				   <p class="gv-specific-features-body-text">Faça a gestão das refeições de sua empresa online e em tempo real. Esteja no controle de quem, quantos e onde recebem suas refeições.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Relatórios personalizados</h3>
				   <p class="gv-specific-features-body-text">Através de nossa plataforma você pode definir as pessoas autorizadas a receber alimentos, o tipo de comida, hora e local, para que seus colaboradores possam emitir um voucher, em um dos equipamentos com validação biométrica no refeitório associado. Além disso, você pode filtrar por data, usuário ou tipo de relatório.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Planejamento e economia</h3>
				   <p class="gv-specific-features-body-text">Gere um correto planejamento e controle de refeições para seus funcionários, evitando perdas de alimentos, funcionários sem a respectiva refeição ou não conformidade com os serviços, caso uma empresa externa forneça o serviço de alimentação à sua empresa</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiplos métodos de validação</h3>
				   <p class="gv-specific-features-body-text">Desde o clássico relógio de controle com leitor de impressão digital, carteira de identidade ou crachá de identificação, até os mais modernos com reconhecimento facial e até mesmo reconhecimento de máscara e medição da temperatura corporal.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solução global 100% integrada</h3>
				   <p class="gv-specific-features-body-text">Nosso sistema de Portal de Refeitório e Restaurante | integra-se nativamente com qualquer outra solução GeoVictoria.</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Monitoramento em tempo real</h3>
				   <p class="gv-specific-features-body-text">Informação consolidada das pessoas que entraram nas instalações da empresa cliente. Tudo isso por meio de tecnologia biométrica e consolidado a partir de uma plataforma online, que você pode gerenciar de qualquer lugar.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Relatórios especializados</h3>
				   <p class="gv-specific-features-body-text">Acesse relatórios especializados sobre o fluxo de pessoal externo, como: percentual de cumprimento do contrato por ponto.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Conformidade de contratos</h3>
				   <p class="gv-specific-features-body-text">Corroborar que o quadro de funcionários e horários acordados com as contratadas e / ou fornecedores foram atendidos</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Múltiplos métodos de validação</h3>
				   <p class="gv-specific-features-body-text">Desde o clássico relógio de controle com leitor de impressão digital, carteira de identidade ou crachá de identificação, até os mais modernos com reconhecimento facial e até mesmo reconhecimento de máscara e medição da temperatura corporal.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solução global 100% integrada</h3>
				   <p class="gv-specific-features-body-text">Nosso sistema de Portal de Externo se integra nativamente com qualquer outra solução GeoVictoria</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Dashboards em Power BI</h3>
				   <p class="gv-specific-features-body-text">Visualize e gerencie os KPIs de sua empresa de forma simples e centralizada. O preço inclui dashboard de controle de presença. Se você quiser um diferente, pode consultá-lo com seu executivo. Na GeoVictoria nos ajustamos às suas necessidades.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Relatórios personalizados</h3>
				   <p class="gv-specific-features-body-text">Na GeoVictoria lhe entregamos um relatório sob medida. Se os relatórios que vêm por padrão na GeoVictoria não forem adequados ao seu negócio, faremos todos os relatórios que você desejar. O plano inclui 1 relatório personalizado com base nas informações já disponíveis na GeoVictoria. Se você quiser um diferente, pode consultá-lo com seu executivo. Na GeoVictoria nos ajustamos às suas necessidades</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Formulario App</h3>
				   <p class="gv-specific-features-body-text">Criação de formulários online que o ajudarão a coletar dados de forma rápida e fácil</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Otimizador de turnos</h3>
				   <p class="gv-specific-features-body-text">A definição e atribuição dos horários de trabalho não são tarefas simples. Na GeoVictoria colocamos à sua disposição uma ferramenta que lhe permitirá otimizar este processo </p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Suporte 24/7/365</h3>
				   <p class="gv-specific-features-body-text">Acesse o suporte personalizado 24 horas por dia, 7 dias por semana, 365 dias por ano. O horário de suporte gratuito é de segunda a sexta-feira, das 8h30 às 18h30</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Integração com outros sistemas</h3>
				   <p class="gv-specific-features-body-text">Possuímos uma API que permite uma fácil integração com qualquer ERP ou sistema utilizado na sua empresa. Além disso, temos uma equipe de mais de 70 programadores que ajudarão com integrações e solicitações mais difíceis. O preço inclui uma integração padrão. Isso será resolvido na pesquisa técnica.</p>
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
			<span id="step1-title"><h4 class="gv-h4">Você está a 1 passo de fazer o download do seu relatório</h4></span><span id="step2-title" style="display: none"><h4 class="gv-h4">Cotização</h4></span>
			<button aria-label="close" class="modal-close" onclick="modalAction('cotizacion-modal')"></button>
		  </div>
		  <div class="gv-modal-card-body">
			<div class="gv-modal-card-body-content">
			  
				<div id="step1-content">

				<?php

				include_once("calculator_formBR.php");

				?>


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
					<p>Obrigado por se cadastrar na GeoVictoria<br>agora você pode baixar o seu <a onclick="cotizationtoPdf()" style="color: var(--primary-color);">cotizacion.pdf</a></p>
					<p>Para obter mais informações sobre os valores,<br>contate um  <a target="_blank" href="https://api.whatsapp.com/send/?phone=56967308227&text=%C2%A1Hola!+me+gustaria+consultar+acerca+de+uno+de+sus+productos&app_absent=0">vendedor</a></p>
					
					<div class="gv-modal-card-body-action" style="justify-content: center;">
					  <button class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="cotizationtoPdf()">Download</button>
					</div>				

				</div>	
			</div>

		  </div>
		  <div class="gv-modal-form-interaction-answer"></div>
		</div>
	  </div>
	</div>

	<!-- FIN TABBOX -->	