<div class="language_selector__button">
    <?php echo '<span><small>' . ucfirst($language->es_name) . '</small></span>'; ?>
    
        
    
    
    <?php ?>
</div>
    <div class="language-selector__list">				
        <?php 
            $language_table_json = include (get_template_directory() . "/inc/language_table.php");
            $language_table_array = json_decode($language_table_json);
        ?>
        <ul>
            <?php foreach (get_sites() as $site) : // Loopeo por todos los sitios?>
                <?php if (get_current_blog_id() == $site->blog_id) {
                    continue; // Si es el sitio actual, saltealo
                }
                $site_url_sanitized = str_replace('/', '', $site->path); // Obtengo la url para cada sitio ?>
                    <li>
                        <img class="language-selector__flag" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/<?php echo $site_url_sanitized; ?>.png">
                        <?php
                        foreach($language_table_array as $language) :
                            if ($language->code == $site_url_sanitized) : ?>
                                <a href="<?php echo $site->path; ?>">
                                    <?php echo '<span><small>' . ucfirst($language->es_name) . '</small></span>'; ?>
                                </a> <?php 
                            endif;
                        endforeach;
                        ?>
                    </li>
                <?php
            endforeach; ?>
        </ul> <?php	
        ?>
    </div> <!-- language-selector__list -->
</div>

