<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>


<?php
// Init Variables
$main_logo = get_field('main_logo', 'option');
$secondary_logo = get_field('secondary_logo', 'option');
$name = get_field('name', 'option');
$short_description = get_field('short_description', 'option');


?>

<body data-theme="light" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header data-transparent="false">

        <div class="container-zone">

            <nav role="navigation">
                <div class="toggle is-menu-hidden">
                    <div class="burger">
                        <i></i>
                        <i></i>
                    </div>
                    <span>Menu</span>
                </div>

                <div class="has-not-ul-style menu-container">
                    <div class="toggle-container">
                        <div class="toggle is-menu-visible">
                            <div class="burger">
                                <i></i>
                                <i></i>
                            </div>
                            <span>Fermer</span>
                        </div>
                    </div>
                    <?= wp_nav_menu(
                        [
                            'theme_location' => 'main-menu',
                            false,
                            'container' => false,
                            'menu_class' => 'has-not-ul-style menu'
                        ]
                    ) ?>
                </div>
            </nav>

            <a href="<?= esc_url(home_url('/')) ?>" class="logo">
                <?php $parts_of_name = explode(' ', $name, 2); ?>
                <span><?= $parts_of_name[0]; ?></span> <span><?= $parts_of_name[1]; ?></span>

            </a>

            <ul class="has-not-ul-style search-user-cart">
                <li class="search">

                    <?php get_search_form(['placeholder' => '     <i class="fa-solid fa-magnifying-glass"></i> Rechercher']); ?>
                </li>
                <li class="user">
                    <a href="<?= esc_url(wc_get_account_endpoint_url("wishlist")) ?>">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                </li>
                <li class="cart">
                    <a href="<?= esc_url(wc_get_cart_url()) ?>"><i class="fa-solid fa-bag-shopping"></i></a>
                </li>
            </ul>

        </div>

    </header>


    <?php

    // Header Variables
    $has_header_banner_image = get_field('has_header_banner_image');
    $has_big_header_banner_image = get_field('has_big_header_banner_image');

    $header_title = get_field('header_title', 'option') ?? get_the_title();

    $has_header_title_label = get_field('has_header_title_label');
    $header_title_label = get_field('header_title_label');

    $has_header_description = get_field('has_header_description');
    $header_description = get_field('header_description');

    $has_header_button = get_field('has_header_button');


    ?>

    <section
        class="header-banner
    <?= $has_header_banner_image ? 'has-header-banner-image' : '' ?> 
    <?= $has_big_header_banner_image ? 'has-big-header-banner-image' : '' ?>">
        <div class="overlay"></div>
        <div class="container-zone swiper headerBannerSwiper">
            <div class="swiper-wrapper">
                <?php if ($has_header_banner_image) : ?>
                    <?php // Variables :
                    $nb_of_header_banner_image = 0;
                    ?>

                    <?php if (have_rows("add_header_banner_image")) : ?>
                        <?php while (have_rows("add_header_banner_image")) : the_row(); ?>
                            <?php // Variables :
                            $header_banner_image = get_sub_field("header_banner_image");
                            $header_banner_image_title = get_sub_field("header_banner_image_title");
                            $has_header_banner_image_label = get_sub_field("has_header_banner_image_label");
                            $header_banner_image_label = get_sub_field("header_banner_image_label");
                            $has_header_banner_image_description = get_sub_field("has_header_banner_image_description");
                            $header_banner_image_description = get_sub_field("header_banner_image_description");
                            $has_header_banner_image_button = get_sub_field("has_header_banner_image_button");
                            ?>
                            <?php $nb_of_header_banner_image++ ?>
                            <div class="swiper-slide">
                                <div class="text-content">
                                    <?php if ($has_header_banner_image_label) : ?>
                                        <h3 class="label"><?= $header_banner_image_label ?></h3>
                                    <?php endif; ?>
                                    <?php if ($header_banner_image_title) : ?>
                                        <?php if ($nb_of_header_banner_image == 1) : ?>
                                            <h1 class="title"><?= $header_banner_image_title ?></h1>
                                        <?php else : ?>
                                            <h2 class="title"><?= $header_banner_image_title ?></h2>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ($has_header_banner_image_description) : ?>
                                        <div class="description"><?= $header_banner_image_description ?></div>
                                    <?php endif; ?>
                                    <?php if ($has_header_banner_image_button) : ?>
                                        <div class="header-banner-buttons-zone">
                                            <?php while (have_rows("add_header_banner_image_button")) : the_row(); ?>
                                                <a href="<?= esc_url(get_sub_field("header_banner_image_button_url")) ?>" class="button"><?= get_sub_field("header_banner_image_button_text") ?></a>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="overlay"></div>
                                <div class="header-banner-image">
                                    <?= wp_get_attachment_image($header_banner_image["id"], "full") ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <main>