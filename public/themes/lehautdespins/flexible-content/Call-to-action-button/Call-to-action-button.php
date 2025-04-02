<?php // call_to_action_button | Bouton d'appel à l'action

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
?>

<section id="<?= $bloc_id ?>" class=" Call-to-action-button">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>
    </div>
</section>