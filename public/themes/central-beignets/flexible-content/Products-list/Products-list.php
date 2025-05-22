<?php // products_list | Liste des produits

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
$has_description = get_sub_field('has_description');
$description = get_sub_field('description');
$products_to_display = get_sub_field('products_to_display');
$has_more_content = get_sub_field('has_more_content');
$more_content = get_sub_field('more_content');
?>

<?php


?>

<section
    id="<?= $bloc_id ?>"
    class=" Products-list <?= $background_color ?>">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>
        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>
        <?php if ($has_description && $description) : ?>
            <div class="description"><?= $description ?></div>
        <?php endif; ?>


        <?php // Requete ACF 
        $args = array(
            'post_type'      => 'produits',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'categorie',
                    'terms'    => $products_to_display
                )
            )
        );
        $products = new WP_Query($args);
        ?>

        <?php if ($products->have_posts()) : ?>
            <div class="products-zone">
                <?php while ($products->have_posts()) : $products->the_post(); ?>
                    <?php // Variables
                    $product_id = get_the_ID();
                    $product_name = get_field('product_name', $product_id);
                    $product_cover = get_field('product_cover', $product_id);
                    $product_price_france = get_field('product_price_france', $product_id);
                    $product_price_suisse = get_field('product_price_suisse', $product_id);
                    $product_description = get_field('product_description', $product_id);
                    ?>
                    <?php require(get_template_directory() . '/templates-parts/product-card-part/product-card-part.php'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

        <?php if ($has_more_content && $more_content) : ?>
            <div class="more">
                <?= $more_content ?>
            </div>
        <?php endif; ?>


    </div>


</section>