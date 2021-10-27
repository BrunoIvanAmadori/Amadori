<?php
// supressing notices
error_reporting(E_ALL & ~E_NOTICE);

$to = $_GET['fm'];



$html = ""; // the variable to hold our html

$html_to_process = get_html();

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
// More headers
//$headers .= "From: @gmail.com" . "\r\n";

$nombre   = $_GET['fn'];
$apellido = $_GET['fap'];

switch ($_GET['s']) {
   case 'cl':
      $subject = "Report GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: ventas@geovictoria.com" . "\r\n";
      break;

   case 'ar':
      $subject = "Report GeoVictoria for " . $nombre . " " . $apellido;
      $headers .= "CC: ventas.ar@geovictoria.com" . "\r\n";
      break;

   case 'en':
      $subject = "Report GeoVictoria for " . $nombre . " " . $apellido;
      $headers .= "CC: support@geovictoria.com" . "\r\n";
      break;

   case 'co':
      $subject = "Cotizacion GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: ventas.co@geovictoria.com" . "\r\n";
      break;

   case 'pt-br':
      $subject = "Cotação GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: contato@geovictoria.com" . "\r\n";
      break;

   case 'pe':
      $subject = "Cotizacion GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: ventasperu@geovictoria.com" . "\r\n";
      break;

   case 'mx':
      $subject = "Cotizacion GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: ventasmx@geovictoria.com" . "\r\n";
      break;

   default:
      $subject = "Cotizacion GeoVictoria para " . $nombre . " " . $apellido;
      $headers .= "CC: ventas@geovictoria.com" . "\r\n";
      break;
}




// send email
mail($to, $subject, $html_to_process, $headers/*, '-f noreply@geovictoria.com -F GeoVictoria'*/);

//mail($to_email, $subject, $body) or die("error!");

?>

<?php

function get_html()
{

   // start buffering html, dont send to browser, 
   // note no white space at start of html after php end tag.

   ob_start();

   if ($_GET['s'] == "pt-br") {
      $template_initial = "<p>Muito bom dia!</p>
   <p>
   Será uma honra para nós trabalhar com você. Ao clicar no link a seguir, você encontrará uma cotação feita com base no que você selecionou em nossa plataforma. Igualmente, um executivo entrará em contato com você para esclarecer quaisquer dúvidas que possa ter.
   </p>  ";
      $download_part = "Baixar cotação";
      $greetings_part = "<p>Que tenha um excelente dia!   </p>

   <p>Atenciosamente equipe GeoVictoria.</p>";
      $recived_data = "DADOS RECEBIDOS";
      $template_end1 = "Nome:";
      $template_end2 = "E-mail:";
      $template_end3 = "Empresa:";
      $template_end4 = "Telefone:";
      $template_end5 = "Número de funcionários:";
      $template_end6 = "País:";
   } else {
      $template_initial = "<p>¡Muy buenos días!</p>
   <p>
   Para nosotros sería un honor poder trabajar con ustedes.
   Clickeando en el siguiente link encontrará una cotización realizada en base a lo que seleccionó en nuestra plataforma. De todas maneras, un ejecutivo lo contactará para aclarar cualquier duda que tenga.</p>";
      $download_part = "Descargar Cotización";
      $greetings_part = "<p>Que tenga un excelente día!</p>

   <p>Lo saluda el equipo de GeoVictoria.</p>";
      $recived_data = "DATOS RECIBIDOS:";
      $template_end1 = "Nombre:";
      $template_end2 = "Correo:";
      $template_end3 = "Empresa:";
      $template_end4 = "Telefono:";
      $template_end5 = "Cantidad de Empleados:";
      $template_end6 = "Pais:";
   }

   if ($_GET['s'] == "en") {
      $template_initial = "<p>Hi there!!</p>
   <p>
   Thanks for submitting your info, we’d love to work together. By clicking on the following link you will find your quote based on what you selected on our pricing tool. We want to know more about your needs, an executive will contact you so we can clarify all the questions you may have.
   </p>  ";
      $download_part = "Download Quote";
      $greetings_part = "<p>Have a great day!   </p>

   <p>Greetings from GeoVictoria team.</p>";
      $recived_data = "DATA RECEIVED:";
      $template_end1 = "Name:";
      $template_end2 = "E-mail:";
      $template_end3 = "Company:";
      $template_end4 = "Telephone:";
      $template_end5 = "Number of employees:";
      $template_end6 = "Country:";
   }

   $nombre   = $_GET['fn'];
   $correo   = $_GET['fm'];
   $mail     = $_GET['fe'];
   $telefono = $_GET['ft'];
   $url = $_GET['url'];

   //codificamos a base64 para que haya diferentes PDF descargables y no se pisen uno con otros, así hacerlo de forma univoca
   $token = base64_encode($nombre . $correo . $mail . $telefono) . ".pdf";
   $token = str_replace("=", "a", $token);

   $base64_top = './gvcalc/img/pdf_top.png';

?>
   <!DOCTYPE html>
   <html>

   <?php echo $template_initial; ?>


   <p><a href="<?php echo $url; ?>/cotizaciones/<?php echo $token; ?> "><?php echo $download_part; ?></a></p>



   <?php
   switch ($_GET['s']) {
      case 'cl':
         $pais = "Chile";
         break;

      case 'ar':
         $pais = "Argentina";
         break;

      case 'en':
         $pais = "USA";
         break;

      case 'pt-br':
         $pais = "Brasil";
         break;

      case 'pe':
         $pais = "Peru";
         break;

      case 'mx':
         $pais = "Mexico";
         break;

      default:
         $pais = "Indefinido";
         break;
   }

   ?>

   <p>
      <?php echo $recived_data; ?> <br>
      <?php echo $template_end1 . " " . $_GET['fn']; ?><br>
      <?php echo $template_end2 . " " . $_GET['fm']; ?><br>
      <?php echo $template_end3 . " " . $_GET['fe']; ?><br>
      <?php echo $template_end4 . " " . $_GET['ft']; ?><br>
      <?php echo $template_end5 . " " . $_GET['uto']; ?><br>
      <?php echo $template_end6 . " " . $pais; ?><br>


   </p>

   </html>
<?php
   //=========   HTML CODE BEGINS ENDS BEFORE THE BEGINING PHP TAG ====================

   global $html;
   $html = ob_get_contents(); // get all html in buffer to the $html global variable
   ob_end_clean(); // clean the buffer 
   return $html; // return html
}
