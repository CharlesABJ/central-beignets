<?php // apartments_list | Liste des appartements

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$has_description = get_sub_field('has_description');
$description = get_sub_field('description');
?>

<section id="<?= $bloc_id ?>" class=" Apartments-list">
    <div class="container-zone first">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>
        <?php if ($has_description && $description) : ?>
            <div class="description"><?= $description ?></div>
        <?php endif; ?>
    </div>

    <div class="container-zone second">
        <?php // Requete ACF 
        $args = array(
            'post_type' => 'appartements',
            'posts_per_page' => -1,
            'orderby' => 'rand'
        );
        $apartments = new WP_Query($args);

        ?>

        <?php if ($apartments->have_posts()): ?>
            <div class="swiper apartmentsSwiper">
                <ul class="has-not-ul-style apartments-list swiper-wrapper">
                    <?php while ($apartments->have_posts()) : $apartments->the_post(); ?>
                        <?php
                        // Variable : 
                        $apartment_id = get_the_ID();
                        $apartment_thematic = get_field('apartment_thematic', $apartment_id);
                        $apartment_name = get_field('apartment_name', $apartment_id);
                        $apartment_description = get_field('apartment_description', $apartment_id);
                        $apartment_cover = get_field('apartment_cover', $apartment_id);
                        $apartment_icon = get_field('apartment_icon', $apartment_id);
                        $apartment_link_booking = get_field('apartment_link_booking', $apartment_id);
                        $apartment_link_airbnb = get_field('apartment_link_airbnb', $apartment_id);


                        ?>
                        <li data-main-color="<?= $apartment_thematic ?>" class="apartment swiper-slide">
                            <?php if ($apartment_cover) : ?>
                                <div class="cover">
                                    <?php if ($apartment_icon) : ?>
                                        <div class="icon">
                                            <?= wp_get_attachment_image($apartment_icon['ID'], 'full') ?>
                                        </div>
                                    <?php endif; ?>
                                    <a
                                        href="<?= $apartment_cover['url'] ?>"
                                        data-fancybox="apartments-gallery"
                                        data-caption="<?= strip_tags($apartment_name) ?>"
                                        class="cover-image">
                                        <?= wp_get_attachment_image($apartment_cover['ID'], 'full') ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <h3 class="apartment-name"><?= $apartment_name ?></h3>
                                <div class="apartment-description">
                                    <?= $apartment_description ?>
                                </div>
                                <?php if ($apartment_link_booking || $apartment_link_airbnb) : ?>
                                    <div class="split-button-self">
                                        <div class="title button bg-color-classic text-color-classic">Je réserve</div>
                                        <?php if ($apartment_link_booking) : ?>
                                            <a
                                                class="button link booking bg-color-classic text-color-classic"
                                                href="<?= $apartment_link_booking['url'] ?> "
                                                target="<?= $apartment_link_booking['target'] ? $apartment_link_booking['target'] : '_self' ?>">
                                                Booking.com
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($apartment_link_airbnb) : ?>
                                            <a
                                                class="button link airbnb bg-color-classic text-color-classic"
                                                href="<?= $apartment_link_airbnb['url'] ?>"
                                                target="<?= $apartment_link_airbnb['target'] ? $apartment_link_airbnb['target'] : '_self' ?>">
                                                AirBnB
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                <?php endif; ?>
                                <div class="illustration">
                                    illustration
                                </div>
                            </div>

                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>
</section>