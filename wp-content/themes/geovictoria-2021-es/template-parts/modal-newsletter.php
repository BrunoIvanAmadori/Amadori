<!-- Modal -->

<div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsletterModalLabel">¡Estás a un paso de suscribirte!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deja tu email y recibe las últimas novedades de Geovictoria.</p>

                <?php echo do_shortcode('[contact-form-7 id="136804" title="Newsletter" html_class="newsletter gdpr" origen_zoho="' . getURLWithoutQuery() . '"]'); ?>
            </div>
        </div>
    </div>
</div>