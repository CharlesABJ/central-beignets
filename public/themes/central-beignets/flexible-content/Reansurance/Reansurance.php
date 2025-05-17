<?php // reansurance| Réassurance

// Variables :

$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$has_description = get_sub_field('has_description');
$description = get_sub_field('description');
$display_on_x_columns = get_sub_field('display_on_x_columns');
?>

<section id="<?= $bloc_id ?>" class=" Reansurance">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>

        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if ($has_description && $description) : ?>
            <div class="description"><?= $description ?></div>
        <?php endif; ?>

        <?php if (have_rows('add_reansurance')) : ?>
            <ul class="has-not-ul-style reansurance-list <?= $display_on_x_columns ?>">
                <?php while (have_rows('add_reansurance')) : the_row(); ?>
                    <?php
                    // Variables :
                    $icon = get_sub_field('icon');
                    $description = get_sub_field('description');
                    ?>
                    <li class="reansurance-item">
                        <?php if ($icon) : ?>
                            <div class="icon">
                                <?= wp_get_attachment_image($icon['ID'], 'full') ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <div class="description">
                                <?= $description ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>

        <?php endif; ?>
    </div>

</section>