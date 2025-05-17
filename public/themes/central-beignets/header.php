<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/illustrations/favicon-1.png">

    <?php wp_head(); ?>
</head>



<?php // Header Variables
$name = get_field('name', 'option');
$short_description = get_field('short_description', 'option');
$secondary_logo = get_field('secondary_logo', 'option');
$location = get_field('location', 'option');
$phone_france = get_field('phone_france', 'option');
$phone_suisse = get_field('phone_suisse', 'option');
$email = get_field('email', 'option');
?>


<body data-main-color="original" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>

        <div class="container-zone">

            <a href="<?= home_url(); ?>" class="logo">
                <?= $name; ?><span class="dot"></span>
            </a>
            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'main-menu has-not-ul-style',
                ]);
                ?>
                <div class="order-now">
                    <button href="<?= home_url(); ?>/commande"> <i class="fa-solid fa-cart-shopping"></i> Commander</button>
                    <div class="choices">
                        <?php if ($phone_france) : ?>
                            <a href="tel:<?= $phone_france; ?>">🇫🇷 <span><?= $phone_france; ?></span></a>
                        <?php endif; ?>
                        <?php if ($phone_suisse) : ?>
                            <a href="tel:<?= $phone_suisse; ?>">🇨🇭 <span><?= $phone_suisse; ?></span></a>
                        <?php endif; ?>
                        <?php if ($email) : ?>
                            <a href="mailto:<?= $email; ?>"> <i class="fa-solid fa-envelope"></i><span><?= $email; ?></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>

        </div>

    </header>



    <main>