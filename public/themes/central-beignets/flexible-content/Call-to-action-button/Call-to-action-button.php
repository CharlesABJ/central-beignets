<?php // call_to_action_button | Bouton d'appel à l'action

// Variables :
$bloc_id = get_sub_field('bloc_id');
$title = get_sub_field('title');
$description = get_sub_field('description');


?>

<section id="<?= $bloc_id ?>" class="Call-to-action-button">
    <div class="container-zone">
        <div class="call-to-action-button">
            <h2><?= $title ?></h2>
            <div class="description"><?= $description ?></div>
            <?php if (have_rows('add_button')) : ?>
                <div class="button-zone">
                    <?php while (have_rows('add_button')) : the_row(); ?>
                        <?php // Variables 
                        $has_order_button = get_sub_field('has_order_button');
                        $button_link = get_sub_field('button_link');
                        $button_label = get_sub_field('button_label');
                        ?>
                        <?php if ($has_order_button && $button_link && $button_label) : ?>
                            <a target="<?= $button_link['target'] ?>" href="<?= $button_link['url'] ?>" class="rect-button has-order-button"><?= $button_label ?></a>
                        <?php else : ?>
                            <a target="<?= $button_link['target'] ?>" href="<?= $button_link['url'] ?>" class="default-button rect-button"><?= $button_label ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>