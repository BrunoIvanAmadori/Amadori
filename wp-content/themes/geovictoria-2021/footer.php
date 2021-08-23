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
			<div class="col-4">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="col-2">
				<?php dynamic_sidebar('footer-sidebar-1'); ?>
			</div>
			<div class="col-2">
				<?php dynamic_sidebar('footer-sidebar-2'); ?>
			</div>
			<div class="col-2">
				<?php dynamic_sidebar('footer-sidebar-3'); ?>
			</div>
			<div class="col-2">
				<?php dynamic_sidebar('footer-sidebar-4'); ?>
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
