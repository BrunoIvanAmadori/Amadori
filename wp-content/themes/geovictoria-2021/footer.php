<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geovictoria_2021
 */

?>

	<footer id="colophon" class="site-footer container-fluid">
		<div class="container d-flex justify-content-between">
			<div class="col-3">
				<div class="site-branding mb-3">
					<?php the_custom_logo(); ?>		
				</div>
				<?php dynamic_sidebar('footer-sidebar-1'); ?>
			</div>
			<div class="col-3">
				<?php dynamic_sidebar('footer-sidebar-2'); ?>
			</div>
			<div class="col-3">
				<?php dynamic_sidebar('footer-sidebar-3'); ?>
			</div>
			<div class="col-3">
			<?php dynamic_sidebar('footer-sidebar-4'); ?>
				<div class='d-flex flex-column mb-3'>
					<div class="contact-phone pe-3">
						<i class="far fa-phone-alt blue"></i>
						<small><?php echo get_theme_mod('geovictoria-2021_info_contacto_telefono')?></small>
					</div>

					<div class="contact-email">
						<i class="far fa-envelope blue"></i>
						<small><?php echo get_theme_mod('geovictoria-2021_info_contacto_email')?></small>
					</div>
				</div>
				
			</div>
		
			<?php 
			
			?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
