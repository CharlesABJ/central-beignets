<?php
// Template part for displaying breadcrumbs
?>

<section class="breadcrumbs-part">
    <a href="<?= home_url('/' . $archive_link . '/'); ?>"><?= $archive_title ?></a> <span class="chevron"></span> <span class="current-page"><?= strip_tags($title); ?></span>
</section>