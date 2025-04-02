</main>
<footer>
    <?php // Footer Variables
    $name = get_field('name', 'option');
    $short_description = get_field('short_description', 'option');
    $address = get_field('address', 'option');
    $phone = get_field('phone', 'option');
    $email = get_field('email', 'option');
    ?>


    <div class="top container-zone">
        <div class="logo">

        </div>
        <div class="title"><?= $name; ?></div>
        <p><?= $short_description; ?></p>
        <div class="contact">
            <ul class="has-not-ul-style ">
                <?php if ($address) : ?>
                    <li> <a target="_blank" href="https://www.google.com/maps/place/<?= strip_tags(str_replace(' ', '+', $address)); ?>">
                            <?= str_replace(',', ',<br>', $address); ?>
                        </a></li>
                <?php endif; ?>
                <?php if ($phone) : ?>
                    <li> <a href="tel:<?= str_replace(' ', '', $phone); ?>"><?= $phone; ?></a></li>
                <?php endif; ?>
                <?php if ($email) : ?>
                    <li> <a href="mailto:<?= $email; ?>"><?= $email; ?></a></li>
                <?php endif; ?>
            </ul>
        </div>


        <div class="follow-us">
            <?php
            // Appel de la fonction de récupération des réseaux sociaux
            ?>

        </div>

    </div>
    <div class="bottom">
        <ul class="has-not-ul-style legals">
            <li><a href="<?= esc_url(home_url('/mentions-legales/')) ?>">Mentions légales</a></li>
            <li><a href="<?= esc_url(home_url('/politique-de-confidentialite/')) ?>">Politique de confidentialité</a></li>
        </ul>

        <div class="signature">
            <p class="signature-content">
                <a href="https://www.sequane.fr" target="_blank"><span class="site">site </span>S<span class="relever">é</span>q<span class="relever">uaNe</span></a>
            </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>