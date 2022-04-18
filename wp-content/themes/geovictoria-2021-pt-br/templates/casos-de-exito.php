<?php

/*
Template Name: Casos de Exito (Portugués)
*/

get_header();
?>
<div class="bg-header" style="position: absolute; top:-150px; z-index:0;">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/bg-header.svg" />
</div>
<main id="primary" class="site-main">
    <section class="container">
        <div class="row d-flex flex-column flex-md-row justify-content-between align-items-center h-100 ">
            <div class="col-12 col-md-6 mb-5">
                <div class="align-self-center">
                    <h1 class="mb-3 fw-bold">
                        Nossos <br><span class="blue">Casos de Éxito</span>
                    </h1>
                    <p>
                        Conhece como impactamos com cada um dos nossos clientes, na gestão de Controle de Ponto.
                    </p>
                    <?php
                    // We save template directory first because of a problem retrieving template directory when in blog id 1.
                    // This is because of a fix I had to do previously called multiSiteUrlFix in functions.php
                    // in which I modify the URLs of the get_template_directory manually because couldn't solve multisite url on nginx
                    $template_directory = get_template_directory_uri();
                    // We switch to root blog where all the 'casos de exito' are stored.
                    switch_to_blog(1);
                    ?>

                    <?php

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = [
                        'post_type'        => 'caso_de_exito',
                        'posts_per_page' => -1,
                        'taxonomy' => ''
                    ];

                    $casos_de_exito_not_filtered = new WP_Query($args);
                    $selected_industria = $_GET['industria'];
                    $selected_servicio = $_GET['servicio'];

                    if (!empty($selected_servicio) && !empty($selected_industria)) {
                        $args['tax_query'] = array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'industria',
                                'field' => 'slug',
                                'terms' => $selected_industria,
                            ),
                            array(
                                'taxonomy' => 'servicio',
                                'field' => 'slug',
                                'terms' => $selected_servicio,
                            )
                        );
                    } else {
                        if (!empty($selected_industria)) {
                            $args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'industria',
                                    'field' => 'slug',
                                    'terms' => $selected_industria,
                                )
                            );
                        }

                        if (!empty($selected_servicio)) {
                            $args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'servicio',
                                    'field' => 'slug',
                                    'terms' => $selected_servicio,
                                )
                            );
                        }
                    }

                    if (!empty($_GET['pais'])) {
                        $selected_pais = $_GET['pais'];
                        $args['meta_query'] = array(
                            array(
                                'key' => 'pais_de_empresa',
                                'value' => $selected_pais,
                            )
                        );
                    }

                    $args['paged'] = $paged;
                    $args['posts_per_page'] = 6;

                    $casos_de_exito_filtered = new WP_Query($args);

                    $paises_totales = array();

                    if ($casos_de_exito_not_filtered->have_posts()) {

                        while ($casos_de_exito_not_filtered->have_posts()) {
                            $casos_de_exito_not_filtered->the_post();
                            $pais_de_empresa = get_post_meta($post->ID)["pais_de_empresa"][0];
                            array_push($paises_totales, $pais_de_empresa);
                        }
                    }

                    $paises_totales = array_unique($paises_totales);

                    if (($key = array_search("No especificado", $paises_totales)) !== false) {
                        unset($paises_totales[$key]);
                    }

                    ?>
                    <div class="row justify-content-center">
                        <?php
                        $industrias = get_terms(array(
                            'taxonomy' => 'industria', 'hide_empty' => false
                        ));

                        $servicios = get_terms(array(
                            'taxonomy' => 'servicio', 'hide_empty' => false
                        ));
                        ?>

                        <?php
                        $target_url_array = explode('/', $_SERVER['REQUEST_URI']);
                        $target_url = '/' . $target_url_array[1] . '/' . $target_url_array[2] ?>

                        <form action="<?php echo $target_url; ?>" method="get">
                            <div class="row mb-3">
                                <div class="col-6 mb-3">
                                    <label>Indústria</label>

                                    <select name="industria" class="search-filter">
                                        <option value="">
                                            <?php echo "Todas as indústrias" ?>
                                        </option>

                                        <?php foreach ($industrias as $industria) : ?>
                                            <?php $nombre_industria_pt = get_field('nombre_industria_pt', $industria); ?>
                                            <option <?php selected($industria->name, $selected_industria) ?> value="<?php echo $industria->name ?>">
                                                <?php echo ($nombre_industria_pt) ? $nombre_industria_pt : $industria->name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                    <label>País</label>
                                    <select name="pais" class="search-filter">
                                        <option value="">
                                            <?php echo "Todos os países" ?>
                                        </option>

                                        <?php foreach ($paises_totales as $pais) : ?>
                                            <option <?php selected($pais, $selected_pais) ?> value="<?php echo $pais ?>">
                                                <?php echo $pais ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label>Serviços</label>
                                    <select name="servicio" class="search-filter">
                                        <option value="">
                                            <?php echo "Todos os serviços" ?>
                                        </option>

                                        <?php foreach ($servicios as $servicio) : ?>
                                            <?php $nombre_servicio_pt = get_field('nombre_servicio_pt', $servicio); ?>
                                            <option <?php selected($servicio->name, $selected_servicio) ?>value="<?php echo $servicio->name ?>">
                                                <?php echo ($nombre_servicio_pt) ? $nombre_servicio_pt : $servicio->name  ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row px-2 justify-content-center">
                                <input class="btn button--bigblue" type="submit" value="Filtrar"></input>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <div class="hero__graphics--casos-de-exito col-12 col-md-6">
                <img class="anime-pop" src='<?php echo esc_url($template_directory); ?>/dist/img/casos-de-exito/header-casos-de-exito.png'>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row gy-4">
            <?php
            if ($casos_de_exito_filtered->have_posts()) :
                while ($casos_de_exito_filtered->have_posts()) {
                    $casos_de_exito_filtered->the_post();
                    get_template_part('template-parts/caso-de-exito-card', null, ['region' => 'pt-br', 'template_directory' => $template_directory]);
                }
            ?>
                <?php
                $paginated_links = wpdocs_get_paginated_links($casos_de_exito_filtered);
                $isFirstPage = $paged == 1;
                $isLastPage = $paged == count($paginated_links);
                $isOnlyOnePage = count($paginated_links) == 1;
                ?>

                <?php
                if (!$isOnlyOnePage) :
                ?>
                    <nav class="pagination-nav justify-content-center d-flex">
                        <ul class="pagination ms-0">

                            <?php
                            // We get the 'Anterior' button.
                            ?>

                            <li class="page-item <?php echo ($isFirstPage) ? 'disabled' : ''; ?>">
                                <a class="page-link" <?php echo ($isFirstPage) ? 'tabindex="-1"' : ''; ?> <?php echo (!$isFirstPage) ? 'href="' . $paginated_links[(int)$paged - 2]->url . '"' : '' ?>>
                                    <?php echo "Anterior"; ?>
                                </a>
                            </li>

                            <?php
                            // We show the pagination numbers.
                            ?>

                            <?php foreach (wpdocs_get_paginated_links($casos_de_exito_filtered) as $link) : ?>
                                <?php $isCurrentLinkActive = $link->isCurrent; ?>
                                <li class="page-item <?php echo ($isCurrentLinkActive) ? 'active' : ''; ?>">
                                    <a class="page-link" <?php echo ($isCurrentLinkActive) ? 'tabindex="-1"' : ''; ?> <?php echo (!$isCurrentLinkActive) ? 'href="' . $link->url . '"' : ''; ?>>
                                        <strong><?php echo $link->page; ?></strong>
                                    </a>
                                </li>
                            <?php endforeach; ?>

                            <?php
                            // We show the 'Siguiente' button.
                            ?>

                            <li class="page-item <?php echo ($isLastPage) ? 'disabled' : ''; ?>">
                                <a class="page-link" <?php echo ($isLastPage) ? 'tabindex="-1"' : ''; ?> <?php echo (!$isLastPage) ? 'href="' . $paginated_links[(int)$paged]->url . '"' : '' ?>>
                                    <?php echo "Seguinte"; ?>
                                </a>
                            </li>
                        </ul>
                    </nav>
                <?php endif; ?>
            <?php else : ?>
                <div class="row w-100 d-flex flex-column flex-md-row justify-content-between align-items-center h-100 mb-5">
                    <div class="col-12 col-md-6">
                        <div class="align-self-center pe-md-3">
                            <h2 class="gray mb-3 fw-bold">
                                Nenhum caso de éxito foi encontrado.
                            </h2>
                            <h4 class="fw-light mb-4 anime-fadein">
                                Tente novamente alterando os critérios de filtro.
                            </h4>
                        </div>
                    </div>
                    <div class="hero__graphics col-12 col-md-6">
                        <img class="anime-pop" src="<?php echo esc_url($template_directory); ?>/dist/img/error-500.svg">
                    </div>
                </div>
            <?php endif; ?>

            <?php
            // We close connection with root blog
            wp_reset_query();
            restore_current_blog();
            ?>
        </div>
    </section>
    < </main>
        <!-- #main -->

        <?php
        get_template_part('template-parts/modal', 'newsletter');
        get_footer();
        ?>