</main>
<footer>
    <?php // Footer Variables
    $name = get_field('name', 'option');
    $short_description = get_field('short_description', 'option');
    $secondary_logo = get_field('secondary_logo', 'option');
    $address = get_field('address', 'option');
    $phone = get_field('phone', 'option');
    $email = get_field('email', 'option');
    ?>


    <div class="container-zone">
        <div class="top">
            <div class="social">
                <a href="<?= home_url("/"); ?>" class="logo">
                    <?php $parts_of_name = explode(' ', $name, 2); ?>
                    <span><?= $parts_of_name[0]; ?></span> <span><?= $parts_of_name[1]; ?></span>
                </a>
                <div class="description">
                    <?= $short_description; ?>
                </div>
                <?php // Variables :
                $social_networks = get_field('social_networks', 'option');
                ?>

                <ul class="has-not-ul-style social-networks">
                    <?php
                    $social_networks = get_field('social_networks', 'option');
                    $networks = $social_networks['social_networks_list'];

                    foreach ($networks as $network) :
                        $link = $social_networks[$network . '_link'];
                        if (!empty($link)) :
                    ?>
                            <li>
                                <a href="<?= esc_url($link); ?>" target="_blank">
                                    <?php if ($network === 'facebook') : ?>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    <?php else: ?>
                                        <i class="fa-brands fa-<?= $network; ?>"></i>
                                    <?php endif; ?>
                                </a>
                            </li>
                    <?php endif;
                    endforeach; ?>
                </ul>
            </div>
            <div class="products">
                <h3>Produits</h3>
                <?= wp_nav_menu([
                    'theme_location' => 'products-menu',
                    'container' => false,
                    'menu_class' => 'has-not-ul-style'
                ]) ?>
            </div>
            <div class="informations">
                <h3>Informations</h3>
                <?= wp_nav_menu([
                    'theme_location' => 'informations-menu',
                    'container' => false,
                    'menu_class' => 'has-not-ul-style'
                ]) ?>
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <ul class="has-not-ul-style ">
                    <?php if ($address) : ?>
                        <li> <a target="_blank" href="https://www.google.com/maps/place/<?= strip_tags(str_replace(' ', '+', $address)); ?>">
                                <?= $address ?>
                            </a></li>
                    <?php endif; ?>
                    <?php if ($phone) : ?>
                        <li> <a href="tel:<?= str_replace(' ', '', $phone); ?>"><?= $phone; ?></a></li>
                    <?php endif; ?>
                    <?php if ($email) : ?>
                        <li> <a href="mailto:<?= $email; ?>"><?= $email; ?></a></li>
                    <?php endif; ?>
                </ul>
                <div title="Changer le thème" class="toggle-theme">
                    <i class="fa-solid fa-moon"></i>
                    <i class="fa-solid fa-sun"></i>
                </div>
            </div>


        </div>
        <div class="bottom">
            © 2020 - 2025 NEW AF. Tous droits réservés.
        </div>
    </div>

</footer>
<script src="https://kit.fontawesome.com/a117eb47ea.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>

</html>