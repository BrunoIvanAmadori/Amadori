<!-- Modal -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pronto para iniciar nossa aliança?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Queremos saber mais sobre você e sua empresa e ajudá-lo a atingir seus objetivos! Preencha o formulário abaixo:</p>
                <?php
                // Program to display URL of current page.

                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $link = "https";
                else
                    $link = "http";

                // Here append the common URL characters.
                $link .= "://";

                // Append the host(domain name, ip) to the URL.
                $link .= $_SERVER['HTTP_HOST'];

                // Append the requested resource location to the URL
                $link .= $_SERVER['REQUEST_URI'];
                ?>

                <?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_id="potenciales-clientes" html_class="with-privacy-policy-and-marketing-consent" origen-zoho="' . $link . '"]'); ?>
            </div>
        </div>
    </div>
</div>