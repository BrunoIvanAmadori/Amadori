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

                <?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes gdpr" origen_zoho="' . getURLWithoutQuery() . '"]'); ?>
            </div>
        </div>
    </div>
</div>