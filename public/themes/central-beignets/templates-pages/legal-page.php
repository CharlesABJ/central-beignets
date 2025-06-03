<?php
/*
Template Name: Legal page
*/

?>

<?php get_header(); ?>

<main class="legal-page">
    <?php // Variables 
    $legal_page_title = get_field('legal_page_title');
    $has_legal_description = get_field('has_legal_description');
    $legal_description = get_field('legal_description');
    $accordion_item_count = 0;
    ?>

    <?php if ($legal_page_title) : ?>
        <h2><?= $legal_page_title ?></h2>
    <?php endif; ?>

    <?php if ($has_legal_description && isset($legal_description)) : ?>
        <div class="legal-description">
            <?php echo $legal_description; ?>
        </div>
    <?php endif; ?>

    <?php if (have_rows('add_accordion_item')) : ?>
        <div class="accordion">
            <?php while (have_rows('add_accordion_item')) : the_row();
                // Variables :
                $accordion_item_count++;
                $accordion_title = get_sub_field('accordion_title');
                $accordion_content = get_sub_field('accordion_content');
            ?>
                <div class="accordion-item">
                    <span class="accordion-header">
                        <button
                            class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $accordion_item_count ?>" aria-expanded="false"
                            aria-controls="collapse<?= $accordion_item_count ?>">
                            <?= $accordion_title; ?>
                            <span class="arrow">
                                <svg fill="<?= get_field('header_section_background_color', 'option'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="800px" height="800px" viewBox="0 0 30.727 30.727"
                                    xml:space="preserve">
                                    <g>
                                        <path d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z" />
                                    </g>
                                </svg>
                            </span>
                        </button>
                    </span>
                    <div id="collapse<?= $accordion_item_count ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?= $accordion_content; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>

        </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>