<div class="Media <?= $media_design ?> <?= $media_design === "design none" ? $media_hover_animation : '' ?>">

    <div class="media-content media-height <?= $media_height ?>">
        <?php if ($media_type === "image") : ?>
            <?php if ($has_enlarge_on_click && !$has_image_like_redirect_link) : ?>
                <a href="#" data-fancybox="<?= $flexible_content_name ?>-<?= $fancy_random ?>" data-src="<?= $image['url'] ?>" class="media-link">
                <?php endif; ?>
                <?php if ($has_image_like_redirect_link && !$has_enlarge_on_click) : ?>
                    <a href="<?= $image_redirect_link['url'] ?>" target="<?= $image_redirect_link['target'] ? '_blank' : '_self' ?>"
                        class="media-link">
                    <?php endif; ?>
                    <?= wp_get_attachment_image(
                        $image['id'],
                        'large',
                        false,
                        array(
                            'alt' => $image['alt'],
                        )
                    ); ?>
                    <?php if ($has_enlarge_on_click || $has_image_like_redirect_link) : ?>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($media_type === "video") : ?>
                <?php if ($has_video_hosted_in_wordpress) : ?>
                    <video title="Double cliquer pour agrandir" controls>
                        <source src="<?= wp_get_attachment_url($video_hosted_in_wordpress) ?>" type="video/mp4">
                    </video>
                <?php else : ?>
                    <iframe src="<?= $video_hosted_elsewhere; ?>" frameborder="0"></iframe>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($media_type === "iframe") : ?>
                <iframe src="<?= $iframe ?>" frameborder="0"></iframe>
            <?php endif; ?>

    </div>


    <?php if ($has_media_legend && $media_legend) : ?>
        <div class="media-legend <?= $media_legend_emplacement ?>">
            <?= $media_legend ?>
        </div>
    <?php endif; ?>
</div>