<section class="fondo-personaje">
		<img alt="Geo Victoria" src="/wp-content/themes/geovictoriacom/gvcalc/img/personaje-fondo.svg">
		<div class="title-precio">
			<h2>Prices</h2>
			<p>Adjusted to your company</p>
		</div>
	</section>

	<section class="topbox">
		<div class="gv-container"><h2 class="gv-h2 topbox-title">Calculate the price</h2><p class="topbox-description">Select the number of employees the modules that interest you <br> <b>You will get the price in just 3 clicks</b> We charge according to the number of active users</p></div>
	</section>

	<section class="calculator">
	<div class="columns">
	<div class="column is-70">

		<div class="gv-container" style="height: auto;">


			<div class="columns">
				<div class="column2 widthcolumna">
					<div class="buttons has-addons is-rounded">
						<button id="anual-bt" class="button" onclick="actionPeriodo('A')" style="border-radius: 15px 1px 1px 15px;">Annual</button>
						<button id="mensual-bt" class="button is-info is-selected" onclick="actionPeriodo('M')" style="border-radius: 1px 15px 15px 1px;">Monthly</button>
					</div>				
				</div>
				<div class="column2 gv-align-left">
					<span class="slide-labels2">Save up to 20% paying annuity</span>			
				</div>
				<div class="column2 gv-align-right mlauto">
					<span class="selecciona">Select your industry </span>
					<div class="select is-rounded">
					  <select id="industria-select" onchange="industryAction();" style="border-width: thin;">
						<option value="ct">Construction</option>
						<option value="rt">Retail</option>
						<option value="sg">Security</option>
						<option value="bc">Bank</option>
						<option value="sl">Healthcare</option>
						<option value="ag">Agroindustry</option>
						<option value="os">Outsourcing</option>
						<option value="ot">Other</option>
					  </select>
					</div>	
				</div>
			</div>
							
			
			<div class="calculator-info">
				<div class="columns is-vcentered">
					<div class="column is-3 gv-align-center quantity-container"><p>N° of employees</p><input class="input" id="total-empleados-input" oninput="totalEmpleadosAction()" placeholder="1" type="text"></div>
					
					<div class="column is-6">
						<div class="slide-labels" style="position:relative;">
							<span>1 employee</span> 
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
					
					<div class="column is-3 resumen active" id="resumen-text"><span>Total:</span><p class="total"><span id="currencyGV-box"></span> <span id="total-general">16,50</span> <?php echo $iva_check; ?> <span class="min-text">total per month</span></p><p id="total-asistencia-container">UF <span id="total-asistencia">0,00</span> <span class="min-text">At <span id="personas-asistencia">750</span> Attendance and shift control</span></p></div>
					
					<div class="column is-3 resumen" id="resumen-btn">
						<a style="background-color:#3298dc!important" class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="modalAction('cotizacion-modal')">Cotizar</a>
						<span class="text-cotizar">Contact us, we've <h4>a special price for you</h4></span>
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
						<span>Attendance and shift control</span>
					</div>
					<div><span class="mdi"></span> <span class="mdi"></span></div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Cant.:<input pattern="[0-9]*" class="input" id="total-empleados-asistencia-input" oninput="totalEmpleadosProductoAction('asist')" placeholder="0" type="text"></span></div>					
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Acceso', 'check-acces')" style="display: contents;">
                        <div class="btn-chk" id="check-acces"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/acces.png">
                        <span>Access control</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-acceso-input" oninput="totalEmpleadosProductoAction('acces')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Comedor', 'check-comed')" style="display: contents;">
                        <div class="btn-chk" id="check-comed"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/comed.png">
                        <span>Dinning room Portal</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-comedor-input" oninput="totalEmpleadosProductoAction('comed')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Externos', 'check-exter')" style="display: contents;">
                        <div class="btn-chk" id="check-exter"><span class="mdi mdi-check"></span></div>
                        <img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/exter.png">
                        <span>External Portal</span>
                    </div>
					<div><span class="mdi"></span> <span class="mdi"></span> <span><img alt="Cantidad" class="icono-persona" src="/wp-content/themes/geovictoriacom/gvcalc/img/icono-persona.svg"> Cant.:<input class="input" id="total-empleados-externos-input" oninput="totalEmpleadosProductoAction('exter')" placeholder="0" type="text" readonly="readonly"></span></div>
				</article>
				
			</div>
			
			<div class="elements-container columns">

                <article class="element column">
                    <div onclick="actionProducts('Powerbi', 'check-powerbi')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-powerbi"><span class="mdi mdi-check"></span></div>
                        <img alt="Dashboard in Power BI" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-10.svg">
                        <span>Power BI Dashboard</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Reporte', 'check-reporte')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-reporte"><span class="mdi mdi-check"></span></div>
                        <img alt="Reportes personalizados" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-11.svg">
                        <span>Custom Reports</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Formapp', 'check-formapp')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-formapp"><span class="mdi mdi-check"></span></div>
                        <img alt="Formulario App" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-12.svg">
                        <span>App Forms</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Optimizador', 'check-optimizador')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-optimizador"><span class="mdi mdi-check"></span></div>
                        <img alt="Optimizador de turnos" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-13.svg">
                        <span>Shift Optimized</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Integraerp', 'check-integraerp')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-integraerp"><span class="mdi mdi-check"></span></div>
                        <img alt="Integración con otros sistemas" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-14.svg">
                        <span>Integrations with other sistems</span>
                    </div>
				</article>

                <article class="element column">
                    <div onclick="actionProducts('Soporte', 'check-soporte')" style="display: contents;">
                        <div class="btn-chk btn-sub-chk" id="check-soporte"><span class="mdi mdi-check"></span></div>
                        <img alt="Soporte 24/7" class="imgmax" src="/wp-content/themes/geovictoriacom/gvcalc/img/Plataforma princing-15.svg">
                        <span>24/7 Support</span>
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
						<span class="slide-labels" style="margin-bottom: 0; text-align: left; font-size: 12px; line-height: 13px;">Our solution compiles with</span>
					</div>
					<div class="column is-2 gv-align-center" style="padding:0">
						<img alt="" class="img-dt" src="/wp-content/themes/geovictoriacom/gvcalc/img/reg_en.jpg" width="80px" height="80px">
					</div>	
				</div>
				<div id="banner-side" style="width: 100%; display: none;">
					<img alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/banner-side.png" onclick="modalAction('cotizacion-modal')" style="width: 100%; height:auto;">
				</div>
				<div id="calc-side" style="margin: inherit; width: 90%;">
					<div class="resumen active" id="resumen-text" style="width: 100%;">
						<p class="total">Total*: <span class="box-total"><span id="currencyGV-general">UF</span> <span id="total-general-box" style="vertical-align: unset;">16,50</span>  <?php echo $iva_check; ?> <span class="min-text">at month</span></span></p>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Attendance and shift control</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="asistencia-box" style="display: contents;">0</span> Total Per Month</span>
						</div>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Access Control</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="acceso-box" style="display: contents;">0</span> Total Per Month</span>
						</div>
					</div>

					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>Dinning room</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="comedor-box" style="display: contents;">0</span> Total Per Month</span>
						</div>
					</div>
					
					<div class="columns is-vcentered paddl0" style="border-bottom: 1px solid rgba(0, 0, 0, .25);width: 100%;">
						<div class="column is-5 gv-align-left" style="padding-bottom: unset;">
							<span class="slide-labels"><b>External</b></span>
						</div>
						<div class="column is-8 gv-align-right" style="padding-bottom: unset;">
							<span class="slide-labels">$<span id="externos-box" style="display: contents;">0</span> Total Per Month</span>
						</div>
					</div>		
				</div>
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<span class="slide-labels"><b>Additional Functionalities</b></span><span id="subproductos-box" class="slide-labels"></span>
				</div>
				
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<!-- <span class="slide-labels"><b><i>*Valores referenciales utilizando la UF del día</i></b></span> <!-->
				</div>
				
				<div class="gv-align-left" style="width: 100%;max-width: fit-content;">
					<span class="slide-labels">We work with companies in your industry</span>
				</div>
				<div class="is-vcentered" style="width: 100%;">
					<div class="gv-align-center">
						<img id="industria-img" alt="" class="" src="/wp-content/themes/geovictoriacom/gvcalc/img/ind_ot.png" style="width: 100%; height:auto;">
					</div>	
				</div>
				
				<div class="column is-3 resumen" id="cotization-pdf-btn" style="width: auto;">
					<a  class="gv-btn-medium gv-primary gv-text-color-white width-only-content" onclick="modalAction('cotizacion-modal')">Download detail report with values</a>
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
					<ul><li class="tab asist-contain is-active" id="asist-tab"><a onclick="activeTab('asist-contain', 'asist-tab')">Attendance and shift control</a></li><li class="tab acces-contain" id="acces-tab"><a onclick="activeTab('acces-contain', 'acces-tab')">Access control</a></li><li class="tab comed-contain" id="comed-tab"><a onclick="activeTab('comed-contain', 'comed-tab')">Dinning room Portal.</a></li><li class="tab extern-contain" id="extern-tab"><a onclick="activeTab('extern-contain', 'extern-tab')">External portal</a></li><li class="tab adicio-contain" id="adicio-tab"><a onclick="activeTab('adicio-contain', 'adicio-tab')">Adicionales</a></li></ul>
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
				<h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary" id="asist-cert-title">Attendance and shift control</h3>
				   <p class="gv-specific-features-body-text" id="asist-cert-txt"><?php echo $legislacionText; ?></p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Solutions by indsutry</h3>
				   <p class="gv-specific-features-body-text">We are experts in the service, construction, retail, banking, health and agribusiness, among others. This translates into short implementation periods, reporting, registration methods and specialized functionalities. As an example, GeoVictoria developed a solution to control rounds and timeouts for guards</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Multiple registration methods</h3>
				   <p class="gv-specific-features-body-text">At GeoVictoria we are experts in attendance control and management, being the company with the most variety of registration methods:<br>
•	<b>WEB:</b> registration from your computer. ideal for administrative staff<br>
•	<b>APP:</b> register from the GeoVictoria app with GPS and facil biometrics<br>
•	<b>CALL:</b> punch with voice biometrics from any landline or cell phone<br>
•	<b>USB:</b> Usb device that connects to a Windows computer<br>
•	<b>BOX:</b> record your attendance from a Multimedia Fingerprint device with or without contact (facial, palm or fingerprint biometrics) Ethernet connectivity, wifi 3/4g</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">HH.EE Massive Rules and Approval Flow</h3>
				   <p class="gv-specific-features-body-text">Configure the rules for authorization of overtime and time off, discount for delays, and weekly compensation for hours worked automatically.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Customization: A suite to your needs</h3>
				   <p class="gv-specific-features-body-text">n Latin America, Europe and Brazil, we are the control and assistance management company with the largest number of programmers. The software is 100% ours, so we can adjust it exactly to your needs. </p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Centralized Management</h3>
				   <p class="gv-specific-features-body-text">You will be able to manage the accesses to your facilities from a single place. It has the information on the connection status of the devices and avoids any incident or attempted breach of the system. Our system is accessible from any computer with Internet access</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Multiple validation methods</h3>
				   <p class="gv-specific-features-body-text">From the classic Multimedia Fingerprint device with reader, ID card reader or Identity card to the most modern ones with face recognition and even mask recognition and body temperature reading.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Complementary solutions</h3>
				   <p class="gv-specific-features-body-text">Being experts has allowed us to deepen the development of complementary solutions, such as control of visits and control of capacity and maximum capacity. If you are interested in these solutions, request them with an executive</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">100% integrated global solution</h3>
				   <p class="gv-specific-features-body-text">Our Access Control system integrates natively with any other GeoVictoria solution.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Post-sale and implementation team</h3>
				   <p class="gv-specific-features-body-text">We have a specialized support team that will support you in the use of the platform and hardware, as well as a great development team for any requirement of our client</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Real time management</h3>
				   <p class="gv-specific-features-body-text">Manage your company's food rations online and in real time. Be in control of who, how many and where you get your rations</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Custom reporting</h3>
				   <p class="gv-specific-features-body-text">Through our platform you will be able to define the people authorized to receive food, the type of food, time and place, so that your collaborators can generate a ticket, in one of the computers with biometric validation in the associated dining room. In addition, you can filter by date, user or type of report.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Planning and Saving</h3>
				   <p class="gv-specific-features-body-text">Generate proper planning and control of food rations for your employees, avoiding having food losses, employees without their corresponding ration or non-compliance with services, in the event that an external company provides the food service to your company</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Multiple validation methods</h3>
				   <p class="gv-specific-features-body-text">From the classic Multimedia Fingerprint device with reader, ID card reader or Identity card to the most modern ones with face recognition and even mask recognition and body temperature reading.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">100% integrated global solution</h3>
				   <p class="gv-specific-features-body-text">Our Dining Portal system integrates natively with any other GeoVictoria solution</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Real time monitoring</h3>
				   <p class="gv-specific-features-body-text">Consolidated information of the people who entered the premises of the company. All of this through biometric technology and consolidated from an online platform, which you can manage from anywhere.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Specialized reporting</h3>
				   <p class="gv-specific-features-body-text">Access specialized reporting on the flow of external personnel, such as: percentage of contract fulfillment by point.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Check that the staffing and hours agreed with the contractors and / or suppliers.</h3>
				   <p class="gv-specific-features-body-text">Compliance with contracts</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Multiple validation methods</h3>
				   <p class="gv-specific-features-body-text">From the classic Multimedia Fingerprint device with reader, ID card reader or Identity card to the most modern ones with face recognition and even mask recognition and body temperature reading</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">100% integrated global solution</h3>
				   <p class="gv-specific-features-body-text">Our Access Control system integrates natively with any other GeoVictoria solution.</p>
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
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Dashboards in Power BI</h3>
				   <p class="gv-specific-features-body-text">Visualize and manage your company's KPIs in a simple and centralized way. The price includes an attendance control dashboard. If you want a different one, you can quote it with your executive. At GeoVictoria we adjust to your needs.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Custom reports</h3>
				   <p class="gv-specific-features-body-text">At GeoVictoria we give you a tailored suit. If the reports that come by default do not fit your business, we will make all the reports you like. The plan includes 1 personalized report based on the information already available in GeoVictoria. If you want a different one, you can quote it with your executive. At GeoVictoria we adjust to your needs</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">App Forms</h3>
				   <p class="gv-specific-features-body-text">Creation of online forms that will help you collect data quickly and easily.</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Shift Optimizer</h3>
				   <p class="gv-specific-features-body-text">Defining and assigning work schedules are not simple tasks. At GeoVictoria we provide you with a tool that will allow you to optimize this process.</p>
				</div>
			 </div>
		  </div>
		  <div class="columns is-centered">
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Support 24/7/365</h3>
				   <p class="gv-specific-features-body-text">Access personalized support 24/7 365 days a year. The support schedule that is included free of charge is Monday through Friday from 8.30 a.m. to 6.30 p.m</p>
				</div>
			 </div>
			 <div class="column is-5">
				<div class="gv-specific-features-body">
				   <h3 class="gv-h4 gv-specific-features-body-title gv-text-color-primary">Integration with other systems</h3>
				   <p class="gv-specific-features-body-text">We have an API that allows easy integration with any ERP or system used in your company. Additionally, we have a team of over 70 programmers who will help with more difficult integrations and requests. The price includes a standard integration. This will be resolved in the technical survey.</p>
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
			<span id="step1-title"><h4 class="gv-h4">You're a <b>1 step</b> to download your report</h4></span><span id="step2-title" style="display: none"><h4 class="gv-h4">Cotización</h4></span>
			<button aria-label="close" class="modal-close" onclick="modalAction('cotizacion-modal')"></button>
		  </div>
		  <div class="gv-modal-card-body">
			<div class="gv-modal-card-body-content">
			  
				<div id="step1-content">

				<?php include_once("calculator_formEN.php"); ?>



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
					<p>Thank you for budget on GeoVictoria <br>you can download your report <a onclick="cotizationtoPdf()" style="color: var(--primary-color);">cotizacion.pdf</a></p>
					<p>For more information on equipment values,,<br>contact a <a target="_blank" href="https://api.whatsapp.com/send/?phone=56967308227&text=%C2%A1Hola!+me+gustaria+consultar+acerca+de+uno+de+sus+productos&app_absent=0">seller</a></p>
					
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