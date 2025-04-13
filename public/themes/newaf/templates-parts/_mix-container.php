<!-- contenu d'une page Listing -->

<section class="mix-container <?= $post_type === 'commercants' ? 'traders-page' : '' ?>">

    <?php
    $myArray = [];
    if ($query->have_posts()) :
        $nb_of_posts = $query->found_posts;
        $illustration_class = $nb_of_posts % 2 === 0 ? '' : 'illustration-bottom-left';

    ?>
        <ul class="cards-zone has-not-ul-style">

            <?php if ($post_type === 'commercants') : ?>
                <div class="title-emplacement">
                    <div class="illustration illustration-top">
                        <?= $GLOBALS['heaume-bottom'] ?>
                    </div>

                </div>
            <?php endif; ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php
                // Récupère le titre SANS les balises HTML du WYSIWYG et l'ID du Post pour les stocker dans un tableau
                $myArray[get_the_ID()] = strip_tags(get_field($card_title_field));
                ?>
            <?php endwhile;
            // Tri du tableau par ordre alphabétique
            // pas besoin car ordre de tri défini par un plugin de tri
            // asort($myArray);
            ?>

            <?php
            // Je parcoure le tableau trié pour afficher les Posts
            foreach ($myArray as $key => $value) :
                // Variables pour affichage des Cards dans le Listing
                $card_cover = get_field($card_cover_field, $key);
                $card_title = get_field($card_title_field, $key);
                $card_sub_title = get_field($card_sub_title_field, $key);
                $card_button_title = get_field($card_button_title_field, $key);
                $card_button_border_color = get_field($card_button_border_color, $key);

                // Récuperer la date de l'article pour les Actualités
                $card_date = get_the_date('d/m/Y', $key);

                // Récupérer le lien vers l'article du Post
                $card_permalink = get_permalink($key);

                // Récupère le retour du champs ACF 'cat_single' (c'est un type Objet !)
                $cat_single = get_field($categories, $key);

                // Je récupère le(s) slug(s) de taxonomy du Post pour l'(les) ajouter comme classe(s) dans l'élément Card à afficher pour l'utilisation de Mixitup
                $cat_single_slug_list = [];
                $cat_single_name_list = [];
            ?>
                <?php if ($cat_single) : ?>
                    <?php foreach ($cat_single as $term) :
                        $cat_single_slug_list[] = $term->slug;
                        $cat_single_name_list[] = $term->name; ?>
                    <?php endforeach; ?>
                    <?php
                    // Je récupère un String comportant un espace suivi de tous les slugs de taxonomies séparés par un espace.
                    $cat_single_slug = implode(' ', $cat_single_slug_list);

                    // Je récupère un String comportant tous les noms de taxonomies séparés par un espace
                    // OU ...la valeur du champs ACF 'card_sub_title' si elle existe) pour affichage dans le template !
                    $single_sub_title = $card_sub_title ? $card_sub_title : implode(' | ', $cat_single_name_list);
                    ?>

                    <li class="classic-card mix <?= ($cat_single_slug) ? strtolower($cat_single_slug) : '' ?>">
                        <?php
                        if ($post_type === 'commercants') {
                            // si on est sur la page Listing Commerçants
                            require(get_template_directory() . '/templates-parts/card-traders-part.php');
                        } else {
                            // sinon affichage des cartes Actualités
                            require(get_template_directory() . '/templates-parts/card-news-part.php');
                        }
                        ?>
                    </li>
                    <?php wp_reset_postdata(); ?>

                <?php endif; ?>
            <?php endforeach; ?>

            <?php if ($post_type === 'commercants') : ?>
                <div class="last-element">
                    <div class="illustration illustration-bottom <?= $illustration_class ?>">
                        <?= $GLOBALS['heaume-bottom'] ?>
                    </div>
                </div>
            <?php endif; ?>
        </ul>

    <?php else : ?>
        <p class="no-results"><?= $no_results ?></p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

</section>