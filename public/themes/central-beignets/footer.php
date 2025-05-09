</main>
<footer>
    <?php // Footer Variables
    $name = get_field('name', 'option');
    $short_description = get_field('short_description', 'option');
    $secondary_logo = get_field('secondary_logo', 'option');
    $location = get_field('location', 'option');
    $phone_france = get_field('phone_france', 'option');
    $phone_suisse = get_field('phone_suisse', 'option');
    $email = get_field('email', 'option');
    ?>


    <div class="container-zone">
        <div class="top">
            <div class="logo-and-description">
                <a href="<?= home_url(); ?>" class="logo">
                    <span class="blur"></span>
                    <?= $name; ?><span class="dot"></span>
                </a>
                <div class="description">
                    <?= $short_description; ?>
                </div>
            </div>
            <div class="quick-links">
                <h3>Liens utiles</h3>
                <?php
                wp_nav_menu([
                    'theme_location' => 'quick-links-menu',
                    'container' => false,
                    'menu_class' => 'quick-links-menu has-not-ul-style',
                ]);
                ?>
            </div>
            <div class="contact-us">
                <h3>Contactez-moi</h3>
                <ul class="contact-info has-not-ul-style">
                    <li class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <?= $location; ?>
                    </li>
                    <li class="mail">
                        <a href="mailto:<?= $email; ?>">
                            <i class="fa-solid fa-envelope"></i>
                            <?= $email; ?>
                        </a>
                    </li>
                    <li class="phone">
                        <a href="tel:<?= $phone_france; ?>">
                            <i>🇫🇷</i>
                            <?= $phone_france; ?>
                        </a>
                    </li>
                    <li class="phone">
                        <a href="tel:<?= $phone_suisse; ?>">
                            <i>🇨🇭</i>
                            <?= $phone_suisse; ?>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="bottom">
            © 2025 <?= $name; ?>. Tous droits réservés.
        </div>
    </div>

</footer>
<script src="https://kit.fontawesome.com/a117eb47ea.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>

</html>