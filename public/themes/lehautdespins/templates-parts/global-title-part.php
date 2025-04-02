<div class="global-title-part title-emplacement title-is-<?= $global_title_emplacement ?>">
    <h2 class="title<?= $has_global_title_label ? ' has-title-label' : '' ?>">
        <?php if ($has_global_title_label) : ?>
            <span class="global-title-label">
                <?= $global_title_label ?>
            </span>
        <?php endif; ?>
        <?php if ($has_global_title_animation) : ?>
            <?php if ($global_title_animation === "matrix-animation") : ?>
                <div style="display: none;"
                    class="matrix-container-hidden">
                    <?php while (have_rows('add_title_fragment')) : the_row(); ?>
                        <?php
                        // Variables
                        $title_fragment = get_sub_field('title_fragment');
                        $title_fragment_color = get_sub_field('title_fragment_color');
                        $has_title_fragment_strong = get_sub_field('title_fragment_strong');
                        ?>
                        <span class="matrix-phrase text-<?= $title_fragment_color ?> <?= $has_title_fragment_strong ? "strong" : "" ?> "><?= $title_fragment ?></span>
                    <?php endwhile; ?>
                </div>
                <div class="matrix-effect">

                </div>
            <?php endif; ?>
        <?php else : ?>
            <div class="global-title">
                <?= $global_title ?>
            </div>
        <?php endif; ?>

    </h2>
</div>