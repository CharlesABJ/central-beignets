<?php // partners_list | Liste des partenaires

// Variables :

$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$display_on_x_columns = get_sub_field('display_on_x_columns');
?>

<section id="<?= $bloc_id ?>" class=" Partners-list">

    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php // Requete ACF 
        $args = array(
            'post_type' => 'partenaires',
            'posts_per_page' => -1,
            'orderby' => 'rand'
        );

        $partners = new WP_Query($args);

        ?>


        <?php if ($partners->have_posts()) : ?>
            <div class="swiper partnersSwiper ">

                <ul class="has-not-ul-style swiper-wrapper" data-display_on_x_columns="<?= $display_on_x_columns ?>">
                    <?php while ($partners->have_posts()) : $partners->the_post(); ?>
                        <?php
                        // Variable : 
                        $partner_id = get_the_ID();

                        $partner_thematic = get_field('partner_thematic', $partner_id);
                        $partner_name = get_field('partner_name', $partner_id);
                        $partner_logo = get_field('partner_logo', $partner_id);
                        $partner_link = get_field('partner_link', $partner_id);

                        ?>
                        <li class="partner swiper-slide">
                            <a
                                class="logo"
                                href="<?= $partner_link['url'] ?>"
                                target="<?= $partner_link['target'] ? $partner_link['target'] : '_self' ?>">

                                <?= wp_get_attachment_image($partner_logo['ID'], 'full') ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>

            </div>
            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>

</section>