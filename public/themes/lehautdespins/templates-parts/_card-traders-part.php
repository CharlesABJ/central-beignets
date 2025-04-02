<?php
// Template part pour afficher les cartes des commercants
?>

<div class="card-traders-part">
    <div class="cover">
        <img src="<?= $card_cover['url']; ?>" alt="<?= $card_cover['alt']; ?>">
    </div>
    <div class="content">
        <div class="title limited-tex"><?= $card_title; ?></div>
        <div class="category traders-category-<?= $cat_single_slug ?>"><?= $single_sub_title; ?></div>
        <a data-button-title="<?= $card_button_title; ?>" class="button border-<?= $card_button_border_color ?>" href="<?php the_permalink($key) ?>"><?= $card_button_title; ?></a>
    </div>
</div>