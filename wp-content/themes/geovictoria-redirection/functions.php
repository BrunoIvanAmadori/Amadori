
<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{

    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'parent-custom-style',
        get_template_directory_uri() . '/dist/fonts/fonts.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('geovictoria-2021'),
    );
}
