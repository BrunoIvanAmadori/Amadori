<?php
error_reporting(0);

//overwrite LAVILLA ALEJANDRO ASF

if($_GET['div'] != "USD") {
$iva_check 	 = "+ iva al mes";
$iva_check_2 = "+ iva por mes";
}

else
{
$iva_check 	 = "";
$iva_check_2 = "";
}


echo '
<!DOCTYPE html>  
   <html lang="en-US">
   <head>
   <meta charset="UTF-8">
   <title>Cotización GeoVictoria</title>
   <meta name="robots" content="index, follow">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>

   li.menu-item:not(:last-child) { 
	margin-bottom: 3px;  
 }

   @page {
            margin: 0px 0px 0px 0px !important;
	}
   h2,
   .h2 {
     font-size: 20px ;
     color:#4e4e4e;
   }
   h1,
   .h1 {
     font-size: 26px ;
     color:#4e4e4e;
      
   }
 
   .subproduct {
	font-weight:lighter;
}
	body {
		font-family: Denk One, sans-serif;
		color:#4e4e4e;
		background-image: url('. $base64 .');
		background-position: top left;
		background-repeat: no-repeat;
		background-size: 100%;
		width:100%;
		height:100%;
	}   
   body a {
     color:#00BFFF;
     background-color: transparent;
     text-decoration: none;
      
   }
   body a:hover {
     color:#FF7133;
     text-decoration: underline;
      
   }
   div.line{
      border-bottom: 2px solid #e4e4e4;
       
   }
 
   .j-container{
       
      box-sizing:border-box;
       
   }
 
   .j-main{
      width: 90%;
      margin:auto;
      padding:10px;
       
      text-align:justify;
      font-size: 1.2em;
       
      /*background-color:#FDE7F5;*/
   }
 
   /* -------------  Media -------------- */
   @media screen and (max-width:800px) {
   h2,
   .h2 {
     font-size: 20px ;
     color:#4e4e4e;
   }
   h1,
   .h1 {
     font-size: 26px ;
     color:#4e4e4e;
      
   }
     .j-main {
      width:99.99%;
      font-size:1.6em;  
     }
      
    .j-container{
       
      box-sizing:border-box;
      padding:0px 10px 0px 10px !important;*/
   }
 
   .footer {
  position: absolute;
  left: 500px;
  bottom: 200px;
  text-align: center;
  width:20px;
}

   .j-main{
       
      box-sizing:border-box;
      padding-right:10px !important;
   }
   }/* end @media screen */
 
   .my_content{
   font-size:14px;   
   }
   </style>
   </head>
   <body>

<div class="page">

	<div>
	   <img style="box-shadow: 2px 2px 10px 8px rgb(0 0 0 / 75%);background-color:white;" src="'. $base64_top .'">
	</div>	   
   <div class="j-container"> 
      <div class="j-main">
         <div class="my_content">
            <div style="vertical-align:middle;padding-top:2px;"><h1>Hola <span>'. $_GET['fn'] . " " . $_GET['fap'].',</span></h1></div><br>
            <div style="padding-bottom:10px">
				<div style="width: 80%; float:left">


				   <h1 style="display:inline-block">Total:* </h1><h1 style="margin:15px 0px 0px 10px;display:inline-block;max-width:400px;background-color:white;border:1px solid gray;padding:1px;border-radius:8px;" > '.$_GET['div'].' <span> '.$_GET['t'].' </span> '.$iva_check.' </h1>
				   <h2>Cantidad de empleados: <span>'. $_GET['uto'] .'</span> &nbsp;&nbsp;&nbsp;Tipo de plan: <span>'. $_GET['p'] .'</span></h2>
				</div>

				<div style="width: 20%; float:right" align="center">
					<p>Software válido por</p>
				   <img src="'. $base64_reg .'">
				</div>			
				
			</div>
			<br><br><br><br><br><br>
            <div>
				<h2>Desglose por servicio</h2>
			</div>';

		if($_GET['tas'] > 0 ){ 
			https://www.geovictoria.com/wp-content/themes/geovictoriacom/calculator-pdf-download.php?s=cl&i=ot&div=UF&p=Mensual&t=10.98&tas=0.51&tac=5.24&tco=5.24&tex=0.00&tpo=0.00&tre=0.00&tfo=0.00&top=0.00&tin=0.00&tso=0.00&uto=200&uas=0&uac=200&uco=200&uex=0&pas=15300&pac=785&pco=785&pex=0&fn=NONE&fm=NONE@hotmail.com&fe=NONE&ft=NONE
			echo'
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Asistencia</h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uas'] .'</span> empleados, un costo aproximado de $<span>'. $_GET['pas'] .'</span> por usuario al mes)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				<h2> '.$_GET['div'].'  <span>'. $_GET['tas'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>';
			}
			
			if($_GET['tac'] > 0) {

			echo '
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Acceso </h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uac'] .'</span> empleados, un costo aproximado de $<span>'. $_GET['pac'] .'</span> por usuario al mes)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				   <h2>'.$_GET['div'].' <span>'. $_GET['tac'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>';
		
			}
			
			if($_GET['tco'] > 0){

			echo'
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Comedor </h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uco'] .'</span> empleados, un costo aproximado de $<span>'. $_GET['pco'] .'</span> por usuario al mes)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['tco'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>'; }
			
			if($_GET['tex'] > 0){ echo '
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Externos </h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uex'] .'</span> empleados, un costo aproximado de $<span>'. $_GET['pex'] .'</span> por usuario al mes)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['tex'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>';
		
			} 
			
			if($_GET['tpo'] > 0) {
				
			echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Dashboard power BI </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'. $_GET['div'] .' <span>'. $_GET['tpo'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
		
			} 
			
			if($_GET['tre'] > 0){ 
				
				echo'
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Reportes personalizados </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'. $_GET['div'] .' <span>'. $_GET['tre'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
		} 
			
			if($_GET['tfo'] > 0){ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Formulario App </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['tfo'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
			}
			
			if($_GET['top'] > 0){ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct" >Optimizador de turnos </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['top'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>			
		';
	
		} if($_GET['tin'] > 0)
		
		{ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Integración con otros sistemas </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['tin'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>
		';
	
		} 
		if($_GET['tso'] > 0){ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Soporte 24/7 </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. $_GET['tso'] .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>				
		';
	
		} 	

			echo '
			<div style="font-size: smaller;">
				<p><i>* Este documento entrega valores aproximados. Hardware, instalaciones, personalizaciones e integraciones complejas no están incluidas. Le pedimos por favor conversar con uno de nuestros ejecutivos para obtener un valor definitivo. Valores referenciales utilizando la UF del día. Este cotizador entrega valores hasta 1000 usuarios.</i></p>
			</div>			

			
         </div>
      </div>
   </div>

		</div>

		<div class="j-container"> 
		<div class="j-main">
		<div class="my_content">
		

		
			<div>
			<div style="position:relative;margin-top:-10px;width: 46%; float:left;">
			   <h3>¿QUÉ HACE GEOVICTORIA?</h3>
			   <p>GeoVictoria es una herramienta de gestión de fuerza laboral,
				enfocados en mejorar su eficiencia operativa, a través de una
				plataforma que entrega información precisa en tiempo real</p>
				
				<img src="'. $base64_quehace .'">
			</div>	
			<div style="width:auto; float:right;">
				<h3>INTEGRADOS CON SOFTWARES DE ERP</h3>
				<ul style= "list-style-image: url(\''. $base64_check .'\')">
				  <li style="margin: 0 0 15px 0;">Contamos con una API de integración</li>
				  <li style="margin: 0 0 15px 0;">Integrable con sistemas de ERP de remuneraciones</li>
				  <li style="margin: 0 0 15px 0;">Soluciones 100% en la nube microsfot azure</li>
				  <li style="margin: 0 0 15px 0;">Más de 1 millón de usuarios</li>
				</ul>
			</div>	
		</div>	   
		
		<div style="position:absolute;top:35%;" align="center">
			   <img src="'.$base64_ind_main.'">

			                                     
			</div>	   
			<div style="left:45px;position:absolute;top:1410px;" align="center"> ';

			$case = $_GET['i'];
			$text1 = "<h2> EMPRESAS ";

			switch ($case) {
				case 'ct':
					$text1 .= "DE CONSTRUCCIÓN";
					break;

				case 'rt':
					$text1 .= "DE RETAIL";
					break;

				case 'sg':
					$text1 .= "DE SEGURIDAD";
					break;		
					
				case 'bc':
					$text1 .= "DE BANCA";
					break;				

				case 'sl':
					$text1 .= "DE SALUD";
					break;

				case 'ag':
					$text1 .= "DE AGROINDUSTRIA";
					break;

				default:
					$text1 .= "QUE TRABAJAN CON NOSOTROS";
					break;
			}



			echo 
			
			$text1.' 			</h2>

			<img src="'.$base64_ind_bar.'">



			</div>	 
			
		<div>
			   <img style="position:absolute;width:100%;bottom:35px;" src="'. $base64_foot .'">
			</div>	
		
		</div> 
		
		
		
   </body>
    </html>


	.';

	
	?>