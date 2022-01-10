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
</div>