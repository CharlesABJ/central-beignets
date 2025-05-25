<div class="product-card-part <?= $has_available ? 'has-available' : 'has-not-available' ?>">
    <div class="cover">
        <?php if ($product_cover) : ?>
            <?= wp_get_attachment_image($product_cover['id'], 'medium') ?>
        <?php endif; ?>
    </div>
    <div class="content">
        <div class="name-and-price">
            <div class="product-name"><?= $product_name ?></div>
            <div class="product-price">
                <?php if ($product_price_france === "Gratuit") : ?>
                    Gratuit
                <?php elseif ($product_price_france === $product_price_suisse) : ?>
                    <?= $product_price_france ?> €/CHF
                <?php else : ?>
                    <?= $product_price_france ?> €/<?= $product_price_suisse ?> CHF
                <?php endif; ?>
            </div>
        </div>
        <div class="product-description">
            <?= $product_description ?>
        </div>
    </div>
</div>