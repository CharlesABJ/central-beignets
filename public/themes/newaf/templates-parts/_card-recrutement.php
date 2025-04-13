<?php
/*
  Template-part for displaying 'card-recrutement.php'
*/
// J'utilise le slug de taxonomy du Post (en minuscules) pour ajouter une classe à l'élément à afficher (utilisation de Mixitup)
?>

<li class="card-agenda mix <?= ($cat_single_slug) ? strtolower($cat_single_slug) : '' ?>">

  <div class="card-description bg-<?= $card_background_color ?> <?= $has_card_illustration ? "has-card-illustration" : "" ?>">

    <?php if (get_field($has_card_illustration)) : ?>
      <div class="card-illustration illustration-<?= $card_illustration_style; ?> ">
        <?= $GLOBALS['classic'] ?>
      </div>
    <?php endif; ?>
    <div class="description-content">
      <div class="card-title"><?= $card_title ?></div>
      <div class="card-sub-title text-<?= $cat_single_color ?>"><?= ($card_sub_title) ?></div>
      <a class="card-button bg-<?= $card_button_background_color; ?>" href="<?= esc_url($card_link_url) ?>" target="<?= esc_attr($card_link_target) ?>">
        <?= $card_button_title ?>
      </a>
    </div>
  </div>
</li>