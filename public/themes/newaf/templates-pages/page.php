<?php
/*
Template Name: Page
*/
get_header();
?>

<?php if (have_rows('pages')) : ?>
    <?php while (have_rows('pages')) : ?>
        <?php the_row(); ?>
        <?php // On stocke tous les blocs flexibles dans un fichier séparé pour une meilleure réutilisabilité
        require(get_template_directory() . '/templates-parts/all-flexible-content-part.php'); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>
</main>

<?php get_footer(); ?>