<?php // call_to_action_button | Bouton d'appel à l'action

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');

$button_background_color = get_sub_field('button_background_color');
$booking_link = get_sub_field('booking_link');
$airbnb_link = get_sub_field('airbnb_link');
?>

<section id="<?= $bloc_id ?>" class=" Call-to-action-button">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if ($booking_link || $airbnb_link) : ?>
            <div class=" split-button">
                <div class="title button <?= $button_background_color ?>">Je réserve</div>
                <?php if ($booking_link) : ?>
                    <a
                        class="button link booking <?= $button_background_color ?>"
                        href="<?= $booking_link['url'] ?> "
                        target="<?= $booking_link['target'] ? $booking_link['target'] : '_self' ?>">
                        Booking.com
                    </a>
                <?php endif; ?>

                <?php if ($airbnb_link) : ?>
                    <a
                        class="button link airbnb <?= $button_background_color ?>"
                        href="<?= $airbnb_link['url'] ?>"
                        target="<?= $airbnb_link['target'] ? $airbnb_link['target'] : '_self' ?>">
                        AirBnB
                    </a>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    </div>
</section>