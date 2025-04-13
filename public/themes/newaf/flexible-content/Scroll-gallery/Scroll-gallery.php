<?php // scroll_gallery | Gallery scrollable
?>
<?php
$images = ["1", "2", "3", "4", "5", "6", "7", "8"];

?>

<section class="Scroll_gallery">
    <div class="container-zone">
        <?php if (count($images) === 8) : ?>
            <div class="gallery">
                <?php foreach ($images as $image) : ?>
                    <a data-fancybox="scroll-gallery" href="#" class="item">
                        <?= wp_get_attachment_image($image, 'full'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>