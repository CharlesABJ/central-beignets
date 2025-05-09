<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <span class="blur"></span>
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
                        <a href="tel:<?= $phone_france; ?>"> <i class="fa-solid fa-phone"></i><?= $phone_france; ?></a>
                        <a href="tel:<?= $phone_suisse; ?>"> <i class="fa-solid fa-phone"></i><?= $phone_suisse; ?></a>
                        <a href="mailto:contact@central-beignets.fr"> <i class="fa-solid fa-envelope"></i> contact@central-beignets.fr</a>
                    </div>
                </div>
            </nav>

        </div>

    </header>



    <main>