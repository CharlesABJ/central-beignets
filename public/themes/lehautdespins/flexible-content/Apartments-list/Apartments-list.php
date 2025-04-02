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
    </div>
</section>