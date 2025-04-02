<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>


<?php
// Init Variables
$site_theme = get_field('site_theme', 'option');
$main_logo = get_field('main_logo', 'option');
$secondary_logo = get_field('secondary_logo', 'option');
$name = get_field('name', 'option');
$short_description = get_field('short_description', 'option');
$main_color = get_field('main_color', 'option');

// Header Variables
$header_background_color = get_field('header_background_color');
$header_banner_image = get_field('header_banner_image');

?>

<body data-main-color="<?= $site_theme ?>" <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>

        <div class="container-zone">

            <nav role="navigation">
                <ul class="has-not-ul-style">
                    <li>
                        <a href="<?= home_url('#about') ?>">À propos</a>
                    </li>
                    <li>
                        <a href="<?= home_url('#residence') ?>">La résidence</a>
                    </li>
                    <?php if ($main_logo) : ?>
                        <li class="logo">
                            <a href="<?= home_url('/') ?>">
                                <?= wp_get_attachment_image($secondary_logo['id'], 'full'); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?= home_url('#reservation') ?>">Réservation</a>
                    </li>
                    <li>
                        <a href="<?= home_url('#contact') ?>">Contact</a>
                    </li>
                </ul>
            </nav>

            <h1>
                <?php if ($secondary_logo) : ?>
                    <div class="logo">
                        <?= wp_get_attachment_image($secondary_logo['id'], 'full'); ?>
                    </div>
                <?php endif; ?>

                <?php if ($name) : ?>
                    <?= $name; ?>
                <?php endif; ?>
                <?php if ($short_description) : ?>
                    <p class="short-description"><?= $short_description; ?></p>
                <?php endif; ?>
            </h1>

            <?php if ($header_banner_image) : ?>
                <div class="banner">
                    <?= wp_get_attachment_image($header_banner_image['id'], 'full') ?>
                </div>
            <?php endif; ?>

        </div>

    </header>

    <main>