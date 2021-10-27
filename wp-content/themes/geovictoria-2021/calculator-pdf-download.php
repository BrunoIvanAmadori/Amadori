<?php
// supressing notices
error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_reporting', E_ALL);

include_once("variablesEntorno.php");

// Reference the Dompdf namespace //MUST COME AT TOP OF FILE IN PUBLIC SCOPE
use Dompdf\Dompdf;



$html = ""; // the variable to hold our html

//if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cf-submit'])) { 

// $html already has the my_html session variable
$html_to_process = get_html();
stream_pdf_file($html_to_process); // function to write the html to pdf and stream pdf

// uncomment following section and comment above two lines
//if you want html content to be loaded from a html file instead

/*
   //enter URL of html file, enter URL as http:// or https:// 
   //file can be php file with HTML output
   $fileUrl = "http://localhost/_s/scripts/wpArticles/test.php";
   //get file content after the script is server-side interpreted
   $fileContent = file_get_contents( $fileUrl ) ;
    stream_pdf_file($fileContent);
   */
//}

function stream_pdf_file($contents)
{

   // Include autoloader 
   require_once 'dompdf/autoload.inc.php';


   // Instantiate and use the dompdf class   

   $dompdf = new Dompdf();

   $dompdf->set_option('enable_html5_parser', TRUE);

   $dompdf->loadHtml($contents);

   // (Optional) Setup the paper size and orientation 
   //$dompdf->setPaper('legal', 'Portrait'); 
   $customPaper = array(0, 0, 612.00, 1200.0);
   $dompdf->set_paper($customPaper);
   //$dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'A4'); 


   // Render the HTML as PDF 
   $dompdf->render();




   $outputfile = 'Cotizacion-GeoVictoria.pdf';

   // Output the generated PDF to Browser/file

   //to file - file must not be open remember


   //$output = $dompdf->output();
   //file_put_contents($outputfile, $output); 

   //to browser
   ob_end_clean();


   if (isset($_POST["open_in_browser"])) {
      $dompdf->stream($outputfile, array("Attachment" => false));
   } else {
      $dompdf->stream($outputfile, array("Attachment" => true));
   }

   $nombre   = $_GET['fn'];
   $apellido = $_GET['fap'];
   $correo   = $_GET['fm'];
   $mail     = $_GET['fe'];
   $telefono = $_GET['ft'];
   $url      = $_GET['url'];


   $filename = base64_encode($nombre . $correo . $mail . $telefono) . ".pdf";
   $filename = str_replace("=", "a", $filename);
   $output = "cotizaciones" . "/" . $filename;
   $pdfoutput = $dompdf->output();
   $filename = $output;
   $fp = fopen($filename, "a");
   fwrite($fp, $pdfoutput);
   fclose($fp);
}
function get_html()
{

   // start bDIVISAfering html, dont send to browser, 
   // note no white space at start of html after php end tag.

   ob_start();

   $path = 'gvcalc/img/pdf_backg.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

   $path = 'gvcalc/img/pdf_reg_' . $_GET['s'] . '.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_reg = 'data:image/' . $type . ';base64,' . base64_encode($data);


   switch ($_GET['s']) {
      case 'pt-br':
         $path = 'gvcalc/img/pdf_top_br.jpg';

         break;

      case 'en':
         $path = 'gvcalc/img/pdf_top_en.jpg';

         break;

      default:
         $path = 'gvcalc/img/pdf_top.jpg';
         break;
   }

   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_top = 'data:image/' . $type . ';base64,' . base64_encode($data);

   switch ($_GET['s']) {
      case 'pt-br':
         $path = 'gvcalc/img/pdf_foot_br.jpg';

         break;

      case 'en':
         $path = 'gvcalc/img/pdf_foot_en.jpg';

         break;

      default:
         $path = 'gvcalc/img/pdf_foot.jpg';
         break;
   }

   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_foot = 'data:image/' . $type . ';base64,' . base64_encode($data);


   switch ($_GET['s']) {
      case 'pt-br':
         $path = 'gvcalc/img/pdf_' . $_GET['i'] . '_br.jpg';

         break;

      case 'en':
         $path = 'gvcalc/img/pdf_' . $_GET['i'] . '_en.jpg';

         break;

      default:
         $path = 'gvcalc/img/pdf_main_' . $_GET['i'] . '.jpg';
         break;
   }

   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_ind_main = 'data:image/' . $type . ';base64,' . base64_encode($data);

   $path = 'gvcalc/img/ind_' . $_GET['i'] . '.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_ind_bar = 'data:image/' . $type . ';base64,' . base64_encode($data);

   $path = 'gvcalc/img/pdf_check.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_check = 'data:image/' . $type . ';base64,' . base64_encode($data);



   switch ($_GET['s']) {
      case 'pt-br':
         $path = 'gvcalc/img/pdf_quehace_br.png';
         break;

      case 'en':
         $path = 'gvcalc/img/pdf_quehace_en.png';
         break;

      default:
         $path = 'gvcalc/img/pdf_quehace.png';
         break;
   }

   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $base64_quehace = 'data:image/' . $type . ';base64,' . base64_encode($data);

   $pdfLocation = "pdf_template" . strtoUpper($_GET['s']) . ".php";

   require($pdfLocation);



?>
   <?php
   //=========   HTML CODE BEGINS ENDS BEFORE THE BEGINING PHP TAG ====================

   global $html;
   $html = ob_get_contents(); // get all html in bDIVISAfer to the $html global variable
   ob_end_clean(); // clean the bDIVISAfer 
   return $html; // return html
}
