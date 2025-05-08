<?php
// Template part pour afficher les cartes des actualités

?>
<div class="card-news-part">
    <div class="cover">
        <img src="<?= $card_cover['url']; ?>" alt="<?= $card_cover['alt']; ?>">
    </div>
    <div class="content">
        <div class="category category-<?= $cat_single_slug ?>"><?= $single_sub_title; ?></div>
        <div class="date underline-color1"><?= $card_date; ?></div>
        <div class="title "><?= $card_title; ?></div>
        <a data-button-title="<?= $card_button_title; ?>" class="button border-<?= $card_button_border_color ?>" href="<?= $card_permalink ?>"><?= $card_button_title; ?></a>
    </div>
</div>