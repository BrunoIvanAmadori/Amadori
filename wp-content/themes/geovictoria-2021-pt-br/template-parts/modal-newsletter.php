<!-- Modal -->

<div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsletterModalLabel">Você está a um passo de se inscrever!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deixe seu email e receba as últimas novidades da Geovictoria.</p>
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

                <?php echo do_shortcode('[contact-form-7 id="136804" title="Newsletter" html_class="with-privacy-policy-and-marketing-consent" html_id="newsletter" origen-zoho="' . $link . '"]'); ?>
            </div>
        </div>
    </div>
</div>