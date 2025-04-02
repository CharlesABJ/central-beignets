<?php // partners_list | Liste des partenaires

// Variables :

$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$number_of_columns = get_sub_field('number_of_columns');
?>

<section id="<?= $bloc_id ?>" class=" Partners-list">

    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if (get_sub_field('add_partner', 'option')) : ?>
            <ul class="has-not-ul-style partner-list">
                <?php while (have_rows('add_partner', 'option')) : the_row(); ?>
                    <?php
                    // Variables :
                    $partner_logo = get_sub_field('partner_logo');
                    $partner_link = get_sub_field('partner_link');
                    ?>
                    <?php if ($partner_logo && $partner_link) : ?>
                        <li class="partner">
                            <a target="_blank" href="<?= $partner_link ?>">
                                <?= wp_get_attachment_image($partner_logo['ID'], 'full'); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>

</section>