<?php
/*
  Template part for displaying 'card-agenda.php'
*/
?>

<li class="card-agenda">
  <div class="card-description bg-<?= $description_background_color ?> <?= $has_card_illustration ? "has-card-illustration" : "" ?>">

    <?php if (get_field('has_card_illustration')) : ?>
      <div class="card-illustration illustration-<?= $has_card_style; ?> ">
        <?= $GLOBALS['classic'] ?>
      </div>
    <?php endif; ?>
    <div class="description-content">
      <div class="card-title"><?= $card_title ?></div>
      <div class="card-sub-title"><?= $card_sub_title ?></div>
      <a class="card-button bg-<?= $button_background_color; ?>" href="<?= esc_url($card_link_url) ?>" target="<?= esc_attr($card_link_target) ?>">
        <?= $card_button_title ?>
      </a>
    </div>
  </div>

  <div class="card-date bg-<?= $date_background_color; ?>">
    <p class="day"><?= $day ?></p>
    <div class="month-year">
      <p class="month"><?= $month ?></p>
      <p class="year"><?= $year ?></p>
    </div>
  </div>
</li>