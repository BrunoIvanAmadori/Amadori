<?php /* Template Name: Calculator template */

include_once("variablesEntorno.php");


get_header();

?>
<link rel="preload" href="<?php echo get_template_directory_uri() ?>/gvcalc/gvcalc.css" as="style">



<?php include_once("calculator" . strtoupper($location) . ".php") ?>


<link href="<?php echo get_template_directory_uri() ?>/gvcalc/gvcalc.css" rel="stylesheet">
<!-- <script src="<?php // echo get_template_directory_uri() 
                    ?>/gvcalc/nouislider.js"></script> -->
<!-- <script src="<?php //echo get_template_directory_uri() 
                    ?>/gvcalc/gvcalc-core.js"></script> -->

<?php get_footer(); ?>