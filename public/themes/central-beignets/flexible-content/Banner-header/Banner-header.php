<?php // banner-header| Bannière d'en-tête

// Variables :

$background_color = get_sub_field('background_color');
$has_big_banner = get_sub_field('has_big_banner');
$has_illustration = get_sub_field('has_illustration');
$title = get_sub_field('title');
$description = get_sub_field('description');


?>

<section
    data-main-color="<?= $background_color ?>"
    class="Banner-header  <?= $has_big_banner && $has_illustration ? 'has-illustration' : '' ?>">
    <div class="container-zone <?= $has_big_banner ? 'has-big-banner' : '' ?>">
        <div class="text-content">
            <?php if ($title) : ?>
                <h1><?= $title ?></h1>
            <?php endif; ?>
            <?php if ($description) : ?>
                <div class="description"><?= $description ?></div>
            <?php endif; ?>
            <?php if ($has_big_banner && have_rows('add_button')) : ?>
                <div class="buttons-zone">
                    <?php while (have_rows('add_button')) : the_row(); ?>
                        <?php // Variables :
                        $has_order_button = get_sub_field('has_order_button');
                        $button_link = get_sub_field('button_link');
                        $button_label = get_sub_field('button_label');
                        ?>
                        <a
                            target="<?= $button_link['target'] ?>"
                            href="<?= $button_link['url'] ?>"
                            class="rect-button <?= $has_order_button ? 'has-order-button' : 'default-button' ?>">
                            <?= $button_label ?> <?= $has_order_button ? '<i class="fa-solid fa-arrow-right"></i>' : '' ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($has_big_banner) : ?>
            <div class="cover-images-zone">
                <?php while (have_rows('add_cover_image')) : the_row(); ?>
                    <?php // Variables :
                    $image = get_sub_field('image');
                    ?>
                    <div class="cover-image">
                        <?= wp_get_attachment_image($image['ID'], 'full') ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>