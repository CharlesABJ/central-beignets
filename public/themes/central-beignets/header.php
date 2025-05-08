<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>


<?php
// Init Variables

?>

<body data-main-color="original" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>

        <div class="container-zone">

            <a href="<?= home_url(); ?>" class="logo">
                <span class="blur"></span>
                Central<span class="dot"></span>
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
                        <a href="tel:+33666666666"> <i class="fa-solid fa-phone"></i> 06 66 66 66 66</a>
                        <a href="mailto:contact@central-beignets.fr"> <i class="fa-solid fa-envelope"></i> contact@central-beignets.fr</a>
                    </div>
                </div>
            </nav>

        </div>

    </header>



    <main>