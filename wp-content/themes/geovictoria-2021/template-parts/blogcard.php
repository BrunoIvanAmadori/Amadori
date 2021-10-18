<div class="col-12 col-lg-4">
    <div class="blog-card card">
        <a class="blog-card__link" href="<?php the_permalink() ?>"></a>
        <div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>')"></div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="blog-card__content">
                <div class="blog-card__tag-container">
                    <?php foreach (get_the_category() as $category) : ?>
                        <span class="blog-card__tag">
                            <a href=<?php echo esc_url(get_category_link($category->term_id)) ?>><?php echo $category->name ?></a>
                        </span>
                    <?php endforeach; ?>
                </div>
                <?php the_title('<h5 class="card-title">', '</h5>'); ?>
                <small class="card-text">
                    <?php the_excerpt(); ?>
                </small>

            </div>
            <div class="blog-card__author-container d-flex card-text">
                <div class="col-8">
                    <img class="blog-card__logo-icon" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/blog/logo-gv.svg'>
                    <?php echo (esc_html_x('Por', 'Speaking of author', 'geovictoria-2021')) ?>
                    <span class="fw-bold pe-2"><?php echo "Nicolas Cortés" ?></span>
                </div>
                <div class="col-4 text-end">
                    <i class="far fa-calendar-alt"></i>
                    <?php echo get_the_date('m/d/y') ?>
                </div>
            </div>
        </div>
    </div>
</div>