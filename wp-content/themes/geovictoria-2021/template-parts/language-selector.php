<?php
$language_table_json = include(get_template_directory() . "/inc/language_table.php");
$language_table = json_decode($language_table_json);

$sites = [];

// Obtengo urls de los sitios para los links

foreach (get_sites() as $site) : // Loopeo por todos los sitios 
?>
<?php
    if (get_current_blog_id() == $site->blog_id || $site->blog_id == 1) :
        $site_url_sanitized = str_replace('/', '', $site->path);
        if ($site_url_sanitized) {
            $current_site_path = $site_url_sanitized;
        } else {
            $current_site_path = 'cl';
        }

    // Si no es el sitio actual, agregalo a la lista
    else :
        $site_url_sanitized = str_replace('/', '', $site->path);
        $sites[] = [$site_url_sanitized];
    endif;
endforeach;

// Obtengo idioma actual del sitio para saber en que idioma mostrar el nombre del lenguaje
switch (substr(get_locale(), 0, 2)) {
    case "en":
        $lang_name = 'en_name';
        break;
    case "es":
        $lang_name = 'es_name';
        break;
    case "pt":
        $lang_name = 'pt_name';
        break;
}

// obtengo el nombre del lenguaje
for ($i = 0; $i < count($sites); $i++) {
    foreach ($language_table as $language) :
        if ($language->code == $sites[$i][0]) {
            $sites[$i][1] = $language->$lang_name;
        }
    endforeach;
}
// obtengo la url de la bandera de cada sitio

$current_site_flag_url = esc_url(get_template_directory_uri() . '/dist/img/flags/' . $current_site_path . '.png');

for ($i = 0; $i < count($sites); $i++) {
    $sites[$i][2] = esc_url(get_template_directory_uri() . '/dist/img/flags/' . $sites[$i][0] . '.png');
}
?>
<div class="language-selector">

    <button class="btn language-selector__button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="language-selector__flag" src="<?php echo esc_url($current_site_flag_url); ?>">
    </button>

    <ul class="language-selector__menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <?php for ($i = 0; $i < count($sites); $i++) : ?>
            <a href="<?php echo '/' . $sites[$i][0]; ?>">
                <li>
                    <img class="language-selector__flag" src="<?php echo $sites[$i][2] ?>">
                    <span><small> <?php echo ucfirst($sites[$i][1]); ?> </span></small>
                </li>

            </a>
        <?php endfor; ?>
    </ul>
</div>