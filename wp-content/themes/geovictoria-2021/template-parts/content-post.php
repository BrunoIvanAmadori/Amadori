<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geovictoria_2021
 */

?>


<div class="row">
	<div class="col-lg-12">
		<header class="entry-header">
			<div class="blog-card__tag-container">
				<?php foreach (get_the_category() as $category) : ?>
					<span class="blog-card__tag">
						<a href=<?php echo esc_url(get_category_link($category->term_id)) ?>><?php echo $category->name ?></a>
					</span>
				<?php endforeach; ?>
			</div>
			<?php
			the_title('<h1 class="entry-title">', '</h1>');

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">

					<img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
					<?php echo (esc_html_x('Por', 'Speaking of author', 'geovictoria-2021')) ?>
					<span class="fw-bold pe-2"><?php the_author() ?></span>
					<i class="far fa-calendar-alt"></i>
					<?php echo get_the_date('m/d/y') ?>

				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
</div>


<div class="col-lg-8 pe-lg-5">
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'geovictoria-2021'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'geovictoria-2021'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<div class="entry-banner mb-4 d-flex justify-content-center">

		<!--HubSpot Call-to-Action Code --><span class="hs-cta-wrapper" id="hs-cta-wrapper-c07de3bc-047c-49d0-9d1f-ab21791589bc"><span class="hs-cta-node hs-cta-c07de3bc-047c-49d0-9d1f-ab21791589bc" id="hs-cta-c07de3bc-047c-49d0-9d1f-ab21791589bc">
				<!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a href="https://cta-redirect.hubspot.com/cta/redirect/7742864/c07de3bc-047c-49d0-9d1f-ab21791589bc" target="_blank" rel="noopener"><img class="hs-cta-img" id="hs-cta-img-c07de3bc-047c-49d0-9d1f-ab21791589bc" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/7742864/c07de3bc-047c-49d0-9d1f-ab21791589bc.png" alt="Nueva llamada a la acción" /></a>
			</span>
			<script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script>
			<script type="text/javascript">
				hbspt.cta.load(7742864, 'c07de3bc-047c-49d0-9d1f-ab21791589bc', {
					"useNewLoader": "true",
					"region": "na1"
				});
			</script>
		</span><!-- end HubSpot Call-to-Action Code -->
		<?php // $path = explode('/', $_SERVER["REQUEST_URI"]); 
		?>

		<!-- <a href="<?php // echo '/' . $path[1]; 
						?>/calculadora/?utm_source=pricing+&utm_medium=banner+calculadora&utm_campaign=campa%C3%B1a+pricing">
<img class="d-none d-md-flex" src="<?php // echo esc_url(get_template_directory_uri()); 
									?>/dist/img/blog/banner-pricer.png">
<img class="d-flex d-md-none" src="<?php // echo esc_url(get_template_directory_uri()); 
									?>/dist/img/blog/banner-pricer-mobile.png">
</a> -->
	</div>
</div>