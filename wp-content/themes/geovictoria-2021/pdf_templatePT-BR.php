<?php
error_reporting(0);

//overwrite LAVILLA ALEJANDRO ASF


$iva_check 	 = "";
$iva_check_2 = "";

//Correción Brasil
if($_GET['p'] == "Mensual")
$_GET['p'] = "Mensal";

$total = number_format($_GET['t'], 0, '', '.');

echo '
<!DOCTYPE html>  
   <html lang="en-US">
   <head>
   <meta charset="UTF-8">
   <title>Relatorio GeoVictoria</title>
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
	   <img style="width:100%;box-shadow: 2px 2px 10px 8px rgb(0 0 0 / 75%);background-color:white;" src="'. $base64_top .'">
	</div>	   
   <div class="j-container"> 
      <div class="j-main">
         <div class="my_content">
            <div style="vertical-align:middle;padding-top:2px;"><h1>Olá <span>'. $_GET['fn'] ." ". $_GET['fap'].',</span></h1></div><br>
            <div style="padding-bottom:10px"> 
				<div style="width: 80%; float:left">


				   <h1 style="display:inline-block">Total:* </h1><h1 style="margin:15px 0px 0px 10px;display:inline-block;max-width:400px;background-color:white;border:1px solid gray;padding:1px;border-radius:8px;" > '.$_GET['div'].' <span> '.$total.' </span> '.$iva_check.' </h1>
				   <h2>Total de funcionarios: <span>'. $_GET['uto'] .'</span> &nbsp;&nbsp;&nbsp;Tipo de plano: <span>'. $_GET['p'] .'</span></h2>
				</div>

				<div style="width: 20%; float:right" align="center">
					<p>Software válido para</p>
				   <img src="'. $base64_reg .'">
				</div>			
				
			</div>
			<br><br><br><br><br><br>
            <div>
				<h2>Discriminação por serviço</h2>
			</div>';

		if($_GET['tas'] > 0 ){ 
			echo'
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Controle de ponto e escalas</h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uas'] .'</span> funcionários, um custo aproximado de R$<span>'. $_GET['pas'] .'</span> por usuário ao mês)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				<h2> '.$_GET['div'].'  <span>'. number_format($_GET['tas'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>';
			}
			
			if($_GET['tac'] > 0) {

			echo '
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Controle de acesso
                   </h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uac'] .'</span> funcionários, um custo aproximado de R$<span>'. $_GET['pac'] .'</span> por usuário ao mês)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				   <h2>'.$_GET['div'].' <span>'. number_format($_GET['tac'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>';
		
			}
			
			if($_GET['tco'] > 0){

			echo'
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Portal de refeitório e restaruante</h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uco'] .'</span> funcionários, um custo aproximado de R$<span>'. $_GET['pco'] .'</span> por usuário ao mês)</p>
				</div>		
				<div style="width:auto; float:right;margin-top: -65px;">
				   <h2>'.$_GET['div'] .' <span>'. number_format($_GET['tco'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>				
				<div class="line" style="height: 60px;"></div>
			</div>'; }
			
			if($_GET['tex'] > 0){ echo '
			<br>
            <div>
				<div style="width: 28%; float:left;margin-top: -20px;">
				   <h2>Portal de Externos </h2>
				</div>
				<div style="width: 66%;" align="center">
					<p>(para <span>'. $_GET['uex'] .'</span> funcionários, um custo aproximado de R$<span>'. $_GET['pex'] .'</span> por usuário ao mês)</p>
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
				   <h2 class="subproduct">Dashboard em power BI </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'. $_GET['div'] .' <span>'. number_format($_GET['tpo'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
		
			} 
			
			if($_GET['tre'] > 0){ 
				
				echo'
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Relatórios personalizados </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'. $_GET['div'] .' <span>'. number_format($_GET['tre'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
		} 
			
			if($_GET['tfo'] > 0){ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Formulários App </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. number_format($_GET['tfo'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>';
			}
			
			if($_GET['top'] > 0){ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct" >Otimizador de turnos </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. number_format($_GET['top'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>			
		';
	
		} if($_GET['tin'] > 0)
		
		{ echo '
            <div>
				<div style="width: 74%; float:left;">
				   <h2 class="subproduct">Integração com outros sistemas                   </h2>
				</div>	
				<div style="width:auto; float:right;">
				   <h2>'.$_GET['div'] .' <span>'. number_format($_GET['tin'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
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
				   <h2>'.$_GET['div'] .' <span>'. number_format($_GET['tso'],0,"",".") .'</span> <span style="font-weight:thin" >'.$iva_check_2.'</span></h2>
				</div>	
				
				<div class="line" style="height: 60px;"></div>
			</div>				
		';
	
		} 	

			echo '
			<div style="font-size: smaller;">
				<p><i>* Este documento fornece valores aproximados. Hardware complexo, instalações, personalizações e integrações não estão incluídos. Pedimos que fale com um de nossos executivos para obter um valor final. Valores de referência usando o UF do dia. Esta cotação oferece valores para até 1000 usuários.
                </i></p>
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
			   <h3>¿O QUE A GEOVICTORIA FAZ?</h3>
			   <p>GeoVictoria é uma ferramenta de gerenciamento de força de trabalho,
               focada na melhoria de sua eficiência operacional, por meio de um
               plataforma que fornece informações precisas em tempo real</p>
				
				<img src="'. $base64_quehace .'">
			</div>	
			<div style="width:auto; float:right;">
				<h3>INTEGRADOS CON SOFTWARES DE ERP</h3>
				<ul style= "list-style-image: url(\''. $base64_check .'\')">
				  <li style="margin: 0 0 15px 0;">Temos uma API de integração</li>
				  <li style="margin: 0 0 15px 0;">Integrável com sistemas de Folha de pagamento ERP                  </li>
				  <li style="margin: 0 0 15px 0;">100% soluções em nuvem microsfot azure                  </li>
				  <li style="margin: 0 0 15px 0;">Mais de 1 milhão de usuários                  </li>
				</ul>
			</div>	
		</div>	   
		
		<div style="position:absolute;top:35%;" align="center">
			   <img src="'.$base64_ind_main.'">

			                                     
			</div>	   
			<div style="left:45px;position:absolute;top:1410px;" align="center"> ';

			$case = $_GET['i'];
			$text1 = "<h2> o negócio ";

			switch ($case) {
				case 'ct':
					$text1 .= "de construção";
					break;

				case 'rt':
					$text1 .= "de varejo";
					break;

				case 'sg':
					$text1 .= "de segurança";
					break;		
					
				case 'bc':
					$text1 .= "bancário";
					break;				

				case 'sl':
					$text1 .= "de saúde";
					break;

				case 'ag':
					$text1 .= "agronegócio";
					break;

				default:
					$text1 .= "quem trabalha conosco";
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