<?php

/**
 * Function to create custom post type for Success Stories
 */

function register_caso_de_exito_cpt()
{
    $labels = array(
        'name' => _x('Casos de éxito', 'Post type general name', 'caso_de_exito'),
        'singular_name' => _x('Caso de éxito', 'Post type singular name', 'caso_de_exito'),
        'menu_name' => _x('Casos de éxito', 'Admin Menu text', 'caso_de_exito'),
        'name_admin_bar' => _x('Caso de éxito', 'Add New on Toolbar', 'caso_de_exito'),
        'add_new' => __('Agregar Nuevo', 'caso_de_exito'),
        'add_new_item' => __('Agregar Nuevo caso de éxito', 'caso_de_exito'),
        'new_item' => __('Agregar caso de éxito', 'caso_de_exito'),
        'edit_item' => __('Editar caso de éxito', 'caso_de_exito'),
        'view_item' => __('Ver caso de éxito', 'caso_de_exito'),
        'all_items' => __('Todos los casos de éxito', 'caso_de_exito'),
        'search_items' => __('Buscar casos de éxito', 'caso_de_exito'),
        'not_found' => __('No se han encontrado casos de éxito.', 'caso_de_exito'),
        'archives' => _x('Archivo de casos de éxito', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'caso_de_exito'),
        'insert_into_item' => _x('Insertar en caso de éxito', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'caso_de_exito'),
        'uploaded_to_this_item' => _x('Subido a este caso de éxito', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'caso_de_exito'),
        'filter_items_list' => _x('Filtrar lista de casos de éxito', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'caso_de_exito'),
        'items_list_navigation' => _x('Navegación por lista de casos de éxito', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'caso_de_exito'),
        'items_list' => _x('Lista de casos de éxito', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'caso_de_exito'),
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Custom post type para casos de éxito.',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'caso_de_exito'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => [''],
        'taxonomies' => array('industria', 'servicio'),
        'show_in_rest' => false,
        // 'register_meta_box_cb' => 'add_metaboxes',
    );

    register_post_type(sanitize_key('caso_de_exito'), $args);
}

add_action('init', 'register_caso_de_exito_cpt');

add_filter('manage_caso_de_exito_posts_columns', 'filter_posts_columns');

function filter_posts_columns($columns)
{
    $columns = [
        'cb' => $columns['cb'],
        'empresa' => __('Empresa'),
        'pais' => __('Pais'),
        'servicio' => __('Servicio'),
        'industria' => __('Industria'),
        'imagen' => __('Imagen')
    ];

    return $columns;
}

add_action('manage_caso_de_exito_posts_custom_column', 'caso_de_exito_column', 10, 2);

function caso_de_exito_column($column, $post_id)
{
    // Pais column
    if ('pais' === $column) {
        echo get_field('pais_de_empresa', $post_id);
    }

    // Empresa column
    if ('empresa' === $column) {
        echo get_field('nombre_de_empresa', $post_id);
    }

    // Industria column
    if ('industria' === $column) {
        echo get_the_terms($post_id, 'industria')[0]->name;
    }

    // Servicio column
    if ('servicio' === $column) {
        echo get_the_terms($post_id, 'servicio')[0]->name;
    }

    // Servicio column
    if ('imagen' === $column) {
        echo '<img height="80" src="' . get_field('previsualizacion_de_video_de_youtube') . '">';
    }
}

/**
 * Function to create Industries custom taxonomy
 */

//create a custom taxonomy name it subjects for your posts

function register_industries_taxonomy()
{

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x('Industrias', 'taxonomy general name'),
        'singular_name' => _x('Industria', 'taxonomy singular name'),
        'search_items' => __('Buscar Industrias'),
        'all_items' => __('Todas las Industrias'),
        'parent_item' => __('Industria Padre'),
        'parent_item_colon' => __('Industria Padre:'),
        'edit_item' => __('Editar Industria'),
        'update_item' => __('Actualizar Industria'),
        'add_new_item' => __('Agregar Nueva Industria'),
        'new_item_name' => __('Agregar nuevo nombre de Industria'),
        'menu_name' => __('Industrias'),
    );

    // Now register the taxonomy
    register_taxonomy('industria', array('caso_de_exito'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => false,
    ));
}

//hook into the init action and call create_book_taxonomies when it fires

add_action('init', 'register_industries_taxonomy', 0);

/**
 * Function to create soluciones custom taxonomy
 */

//create a custom taxonomy name it subjects for your posts

function register_soluciones_taxonomy()
{

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x('Servicios', 'taxonomy general name'),
        'singular_name' => _x('Servicio', 'taxonomy singular name'),
        'search_items' => __('Buscar Servicios'),
        'all_items' => __('Todos las Servicios'),
        'parent_item' => __('Servicio Padre'),
        'parent_item_colon' => __('Servicio Padre:'),
        'edit_item' => __('Editar Servicio'),
        'update_item' => __('Actualizar Servicio'),
        'add_new_item' => __('Agregar Nueva Servicio'),
        'new_item_name' => __('Agregar nuevo nombre de Servicio'),
        'menu_name' => __('Servicios'),
    );

    // Now register the taxonomy
    register_taxonomy('servicio', array('caso_de_exito'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => false,
    ));
}


//hook into the init action and call create_book_taxonomies when it fires

add_action('init', 'register_soluciones_taxonomy', 0);

// Add custom fields for Custom Post types and Taxonomies

if (function_exists('acf_add_local_field_group')) :

    // INDUSTRIA

    acf_add_local_field_group(array(
        'key' => 'group_6245f15337453',
        'title' => 'Traducción de Industria',
        'fields' => array(
            array(
                'key' => 'field_6245f15d7340c',
                'label' => 'Nombre (portugues)',
                'name' => 'nombre_industria_pt',
                'type' => 'text',
                'instructions' => 'El nombre que aparecerá en la versión en portugués.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'industria',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    // SOLUCION

    acf_add_local_field_group(array(
        'key' => 'group_6245f231a61a7',
        'title' => 'Traducción de solución',
        'fields' => array(
            array(
                'key' => 'field_6245f2385b464',
                'label' => 'Nombre (Portugués)',
                'name' => 'nombre_servicio_pt',
                'type' => 'text',
                'instructions' => 'El nombre que aparecerá en la versión en portugués.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'servicio',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    // CASO DE EXITO

    acf_add_local_field_group(array(
        'key' => 'group_6243269913d10',
        'title' => 'Datos de Empresa',
        'fields' => array(
            array(
                'key' => 'field_624326c9ca289',
                'label' => 'Nombre de Empresa',
                'name' => 'nombre_de_empresa',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_624326e3ca28a',
                'label' => 'Logo de Empresa',
                'name' => 'logo_de_empresa',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_6243270bca28b',
                'label' => 'País de Empresa',
                'name' => 'pais_de_empresa',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'No especificado' => 'No especificado',
                    'Chile' => 'Chile',
                    'Colombia' => 'Colombia',
                    'Argentina' => 'Argentina',
                    'Perú' => 'Perú',
                    'Brasil' => 'Brasil',
                    'México' => 'México',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'caso_de_exito',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_6243280984201',
        'title' => 'Datos del Interlocutor',
        'fields' => array(
            // array(
            // 'key' => 'field_624328099dc97',
            // 'label' => 'Nombre del Interlocutor',
            // 'name' => 'nombre_del_interlocutor',
            // 'type' => 'text',
            // 'instructions' => '',
            // 'required' => 0,
            // 'conditional_logic' => 0,
            // 'wrapper' => array(
            // 'width' => '',
            // 'class' => '',
            // 'id' => '',
            // ),
            // 'default_value' => '',
            // 'placeholder' => '',
            // 'prepend' => '',
            // 'append' => '',
            // 'maxlength' => '',
            // ),
            array(
                'key' => 'field_62432809a19f4',
                'label' => 'Testimonio del Interlocutor',
                'name' => 'testimonio_del_interlocutor',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_62432809a19f5',
                'label' => 'Testimonio del Interlocutor (Portugués)',
                'name' => 'testimonio_del_interlocutor_pt',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            // array(
            // 'key' => 'field_624328099dc98',
            // 'label' => 'Cargo del Interlocutor',
            // 'name' => 'cargo_del_interlocutor',
            // 'type' => 'text',
            // 'instructions' => '',
            // 'required' => 1,
            // 'conditional_logic' => 0,
            // 'wrapper' => array(
            // 'width' => '',
            // 'class' => '',
            // 'id' => '',
            // ),
            // 'default_value' => '',
            // 'placeholder' => '',
            // 'prepend' => '',
            // 'append' => '',
            // 'maxlength' => '',
            // ),
            // array(
            // 'key' => 'field_624328099dc99',
            // 'label' => 'Cargo del Interlocutor (portugués)',
            // 'name' => 'cargo_del_interlocutor_pt',
            // 'type' => 'text',
            // 'instructions' => '',
            // 'required' => 1,
            // 'conditional_logic' => 0,
            // 'wrapper' => array(
            // 'width' => '',
            // 'class' => '',
            // 'id' => '',
            // ),
            // 'default_value' => '',
            // 'placeholder' => '',
            // 'prepend' => '',
            // 'append' => '',
            // 'maxlength' => '',
            // ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'caso_de_exito',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_6243282b39e6a',
        'title' => 'Datos del Video',
        'fields' => array(
            array(
                'key' => 'field_6243282b4daac',
                'label' => 'URL de video de YouTube',
                'name' => 'url_de_video_de_youtube',
                'type' => 'url',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'https://www.youtube.com/XXXXXXX',
            ),
            array(
                'key' => 'field_6243283735840',
                'label' => 'Imagen de previsualización de video de Youtube',
                'name' => 'previsualizacion_de_video_de_youtube',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'caso_de_exito',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

endif;

// Update title with Nombre de Empresa when saving post
function ACF_title_updater()
{
    global $post;
    $my_post = array();
    $my_post['ID'] = $post->ID;
    $my_post['post_title'] = get_field("nombre_de_empresa");
    wp_update_post($my_post);
}

add_action('acf/save_post', 'ACF_title_updater', 20);


add_filter('wp_lazy_loading_enabled', '__return_false');

/**
 * Obtain pagination links in an array, so I can stylize it in a custom fashion
 */

function wpdocs_get_paginated_links($query)
{
    // When we're on page 1, 'paged' is 0, but we're counting from 1,
    // so we're using max() to get 1 instead of 0
    $currentPage = max(1, get_query_var('paged', 1));

    // This creates an array with all available page numbers, if there
    // is only *one* page, max_num_pages will return 0, so here we also
    // use the max() function to make sure we'll always get 1
    $pages = range(1, max(1, $query->max_num_pages));

    // Now, map over $pages and return the page number, the url to that
    // page and a boolean indicating whether that number is the current page
    return array_map(function ($page) use ($currentPage) {
        return (object) array(
            "isCurrent" => $page == $currentPage,
            "page" => $page,
            "url" => get_pagenum_link($page)
        );
    }, $pages);
}

function eliminar_tildes($cadena)
{

    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    $cadena = utf8_encode($cadena);

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena
    );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena
    );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena
    );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena
    );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}

add_action('admin_menu', 'remove_caso_de_exito_if_not_root');

function remove_caso_de_exito_if_not_root()
{
    if (get_current_blog_id() != 1) {
        remove_menu_page('edit.php?post_type=caso_de_exito');
    }
}
