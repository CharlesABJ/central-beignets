<div class="modal fade" id="newsletterSignUp" tabindex="-1" role="dialog" aria-labelledby="newsletterSignUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-title" id="newsletterSignUpLabel">
                <img src="<?= get_template_directory_uri() . '/img/icons/newsletter-icon.svg' ?>" alt="Newsletter">
                S'isncrire
            </div>
            <div class="modal-body">
                <div class="explain">
                    Abonnez-vous à notre newsletter pour recevoir les dernières actualités de la déchèterie Republique.
                </div>
                <?= do_shortcode('[contact-form-7 id="b1bb689" title="Inscription newsletter Mailjet"]'); ?>
            </div>
        </div>
    </div>
</div>