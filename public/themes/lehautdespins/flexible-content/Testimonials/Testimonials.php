<?php // testimonials | Témoignages

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
?>

<section id="<?= $bloc_id ?>" class=" Testimonials">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>

        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if (get_sub_field('add_testimonials')) : ?>
            <ul class="has-not-ul-style testimonials-list">
                <?php while (have_rows('add_testimonials')) : the_row(); ?>
                    <li></li>
            </ul>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

</section>