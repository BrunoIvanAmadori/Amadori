<div class="col-12 col-md-6 col-lg-4">
    <div class="caso-de-exito-card card">
        <a class="caso-de-exito-card__link" target="_blank" href="<?php echo get_field("url_de_video_de_youtube") ?>"></a>
        <div class="caso-de-exito-card__img d-flex justify-content-center align-items-center" style="background-image:url('<?php echo get_field('previsualizacion_de_video_de_youtube'); ?>')">
            <div class="caso-de-exito-card__play-bg">
                <div class="caso-de-exito-card__play"><img src="<?php echo get_template_directory_uri() . '/dist/img/casos-de-exito/play-solid.svg' ?>"></div>
            </div>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="caso-de-exito-card__content">
                <div class="d-flex justify-content-between">
                    <div class="caso-de-exito-card__tag-container">
                        <?php $industria = get_the_terms($post->ID, 'industria');
                        $nombre_industria_pt = get_field('nombre_industria_pt', $industria[0]);
                        if ($industria) :
                        ?>
                            <span class="caso-de-exito-card__tag">
                                <?php
                                echo ($args['region'] == 'pt-br' && $nombre_industria_pt) ? $nombre_industria_pt : $industria[0]->name;
                                ?>
                            </span>

                        <?php endif; ?>
                    </div>

                    <?php
                    $region_code = getRegionCodeByRegionName(get_field("pais_de_empresa"));

                    if (get_field("pais_de_empresa") != "No especificado") :
                    ?>
                        <div class="caso-de-exito__flag">
                            <img src="<?php echo getFlagUrlByRegionCode($region_code); ?>">
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
                $testimonio_del_interlocutor_pt = get_field('testimonio_del_interlocutor_pt');
                $testimonio_del_interlocutor = get_field('testimonio_del_interlocutor');

                if (!empty($testimonio_del_interlocutor_pt) || !empty($testimonio_del_interlocutor)) :
                ?>
                    <div class="card-text mb-2">
                        <small>
                            <i>
                                <?php
                                $selected_testimonio = ($args['region'] == 'pt-br' && !empty($testimonio_del_interlocutor_pt)) ? $testimonio_del_interlocutor_pt : $testimonio_del_interlocutor;
                                echo '"' . wp_trim_words($selected_testimonio, 18) . '"';
                                ?>
                            </i>
                            <a class="d-inline-block" href=""><span><img width="15" class="mb-2 ms-1" src="<?php echo get_template_directory_uri() . '/dist/img/casos-de-exito/simbolo-nueva-ventana.png' ?>"></span> Ver video </a>
                        </small>
                    </div>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>