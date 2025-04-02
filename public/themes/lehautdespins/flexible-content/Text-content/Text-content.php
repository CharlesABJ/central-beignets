<?php // text_content | Contenu textuel

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
?>

<section id="<?= $bloc_id ?>" class=" Text-content">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if (have_rows("add_content_zone")) : ?>
            <?php while (have_rows("add_content_zone")) : the_row(); ?>
                <?php
                // Variables :
                $display_on_x_columns = get_sub_field('display_on_x_columns');
                ?>
                <div class="content-zone <?= $display_on_x_columns ?>">

                    <?php if (have_rows("add_content_bloc")) : ?>
                        <?php while (have_rows("add_content_bloc")) : the_row(); ?>
                            <?php
                            // Variables :
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            ?>
                            <div class="content-bloc">
                                <?php if ($title) : ?>
                                    <h3><?= $title ?></h3>
                                <?php endif; ?>
                                <?php if ($content) : ?>
                                    <div><?= $content ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>