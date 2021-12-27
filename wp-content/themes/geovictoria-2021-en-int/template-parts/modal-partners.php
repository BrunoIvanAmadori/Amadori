<!-- Modal -->

<div class="modal fade" id="partnersModal" tabindex="-1" aria-labelledby="partnersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="partnersModalLabel">Ready to start our alliance?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>We want to know more about your case. Write us!</p>

                <?php echo do_shortcode('[contact-form-7 id="136530" html_class="partners gdpr" title="Partners" origen_zoho="' . getURLWithoutQuery() . '"]'); ?>
            </div>
        </div>
    </div>
</div>