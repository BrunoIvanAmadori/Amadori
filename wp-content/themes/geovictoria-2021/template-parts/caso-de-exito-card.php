<div class="col-12 col-md-6 col-lg-4">
    <div class="blog-card card">
        <a class="blog-card__link" href="<?php echo get_field("url_de_video_de_youtube") ?>"></a>
        <div class="blog-card__img" style="background-image:url('<?php echo get_field('previsualizacion_de_video_de_youtube'); ?>')"></div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="blog-card__content">
                <div class="d-flex justify-content-between">
                    <?php $servicio = get_the_terms($post->ID, 'servicio');

                    if ($servicio) :
                    ?>
                        <div class="blog-card__tag-container">
                            <span class="blog-card__tag">
                                <?php
                                echo $servicio[0]->name;
                                ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php
                    if (get_field("pais_de_empresa")) :
                    ?>
                        <div class="caso-de-exito__flag">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/img/flags/' . $sites[$i][0] . '.png'); ?>">
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
                <div class="d-flex">
                    <?php
                    if (get_field("logo_de_empresa")) :
                    ?>
                        <div class="caso-de-exito__logo me-3">
                            <img src="<?php echo get_field("logo_de_empresa"); ?>">
                        </div>
                    <?php
                    endif;
                    ?>

                    <?php the_title('<h5 class="align-self-center card-title">', '</h5>'); ?>
                </div>


                <?php
                if (get_field("testimonio_del_interlocutor")) :
                ?>
                    <div class="card-text mb-2">
                        <small>
                            <i>
                                <?php echo '"' . get_field("testimonio_del_interlocutor") . '"'; ?>
                            </i>
                        </small>
                    </div>
                <?php
                endif;
                ?>

                <?php
                if (get_field("nombre_del_interlocutor")) :
                ?>
                    <div class="card-text">
                        <small>
                            <b>
                                <?php echo get_field("nombre_del_interlocutor") . " - " . get_field("cargo_del_interlocutor"); ?>
                            </b>
                        </small>
                    </div>
                <?php
                endif;
                ?>


            </div>

        </div>
    </div>
</div>