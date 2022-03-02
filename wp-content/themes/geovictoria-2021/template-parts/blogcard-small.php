<div class="blog-card--small card">
    <a class="blog-card__link" href="<?php the_permalink() ?>"></a>
    <div class="blog-card__img" style="background-image:url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'medium')); ?>')"></div>

    <div class="card-body d-flex flex-column justify-content-between">
        <div class="blog-card__content">
            <div class="blog-card__tag-container">
                <?php foreach (get_the_category() as $category) : ?>
                    <span class="blog-card__tag">
                        <a href=<?php echo esc_url(get_category_link($category->term_id)) ?>><?php echo $category->name ?></a>
                    </span>
                <?php endforeach; ?>
            </div>
            <?php the_title('<h6 class="card-title">', '</h6>'); ?>
            <div class="blog-card__author-container d-flex card-text">
                <div class="col-12 text-end">
                    <span class="blog-card__date"><i class="far fa-calendar-alt"></i><?php the_date() ?></span>
                </div>
            </div>
        </div>
    </div>
</div>