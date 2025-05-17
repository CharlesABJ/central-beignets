<?php // text_and_media | Bloc Texte + Média

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$has_description = get_sub_field('has_description');
$description = get_sub_field('description');
$has_media = get_sub_field('has_media');
$media_location = get_sub_field('media_location');
?>

<section id="<?= $bloc_id ?>" class=" Text-and-media <?= $background_color ?>">
    <div class="container-zone <?= $has_media ? 'has-media ' . $media_location : ''; ?>">
        <div class="text-content">
            <?php if ($has_label && $label) : ?>
                <div class="label"><?= $label ?></div>
            <?php endif; ?>
            <?php if ($has_title && $title) : ?>
                <h2><?= $title ?></h2>
            <?php endif; ?>
            <?php if ($has_description && $description) : ?>
                <div class="description"><?= $description ?></div>
            <?php endif; ?>
        </div>

        <?php if ($has_media) : ?>
            <?php if (have_rows('add_media')) : ?>
                <div class="medias-zone">
                    <?php while (have_rows('add_media')) : the_row(); ?>
                        <?php // Variables :
                        $media = get_sub_field('media');
                        ?>
                        <div class="media">
                            <img src="<?= $media['url'] ?>" alt="<?= $media['alt'] ?>">
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>