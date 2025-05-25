<?php get_header('404'); ?>

<main class="Error-404">
    <h1>404</h1>
    <p>Oups, cette page est introuvable.</p>

    <img src="<?= get_template_directory_uri() ?>/illustrations/beignet-sad.png" alt="Central – Beignet triste">

    <div class="description">
        Vous êtes perdu ? Pas de panique... <br>
        Cliquez ci-dessous pour retrouver nos délicieux beignets faits maison !

    </div>
    <a href="<?= home_url() ?>" class="rect-button">
        Accueil
    </a>
</main>

<?php get_footer('404'); ?>