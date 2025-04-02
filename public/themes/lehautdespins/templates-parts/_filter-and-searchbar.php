  <!-- Filtres et barre de recherche -->
  <?php
    // Récupère tous les posts de type '$post_type' qui sont publiés
    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];
    $query = new WP_Query($args);
    $terms_id_list = [];
    ?>

  <?php if ($query->have_posts()) : ?>
      <section class="filters-and-searchbar">

          <?php if ($post_type === 'actualites') :
                // Titre H2 fac. pour les Actualités
            ?>
              <h2 class="ms-3">catégorie</h2>
          <?php endif; ?>

          <ul class="has-not-ul-style controls filters">

              <li class="filter-select">
                  <a class="control filter-button" data-filter="all" aria-label="<?= $text_all_posts ?>"><?= $text_all_posts ?></a>
              </li>

              <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <?php
                    // Récupère le retour du champs ACF "cat_single" de mon CPT
                    $terms = get_field($categories);

                    if ($terms) {
                        foreach ($terms as $term) {
                            // Si le term n'est pas déjà dans la liste, on l'ajoute à la liste
                            if (!in_array($term->term_id, $terms_id_list)) {
                                $terms_id_list[] = $term->term_id;
                            }
                        }
                    } ?>
              <?php endwhile; ?>


              <?php foreach ($terms_id_list as $term_id) {
                    $term = get_term($term_id);
                    $term_slug = $term->slug;
                    $term_name = $term->name;
                    $term_count = $term->count;
                ?>
                  <li class="filter-select">
                      <a class="control filter-select filter-button " data-filter=".<?= $term_slug; ?>" aria-label="<?= $term_name; ?>">
                          <?= $term_name . ' (' . $term_count . ')'; ?>
                      </a>
                  </li>
              <?php } ?>

          </ul>

          <form class="searchform mix-search" role="search">
              <button type="submit"><img loading="lazy" decoding="async" src="<?= esc_url(get_template_directory_uri()) ?>/img/icons/search.svg" alt="Loupe"></button>
              <input name="s" id="search-input" class="form-control" type="search" placeholder="<?= $search_placeholder ?>" aria-label="Search" value="">
          </form>

      </section>
  <?php endif; ?>