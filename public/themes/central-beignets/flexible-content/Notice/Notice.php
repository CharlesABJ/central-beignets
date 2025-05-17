<?php // notice | Bloc Notice

$has_full_width = get_sub_field('has_full_width');
$title = get_sub_field('title');
$description = get_sub_field('description');

?>

<section class="Notice">
    <div class="container-zone">
        <div class="notice-content <?php echo $has_full_width ? 'has-full-width' : ''; ?>">
            <?php if ($title) : ?>
                <h2><?= $title ?></h2>
            <?php endif; ?>
            <?php if ($description) : ?>
                <div class="notice-content__description"><?= $description ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>