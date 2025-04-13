<?php // testimonials | Témoignages

// Variables :
$bloc_id = get_sub_field('bloc_id');
$background_color = get_sub_field('background_color');
$has_label = get_sub_field('has_label');
$label = get_sub_field('label');
$has_title = get_sub_field('has_title');
$title = get_sub_field('title');
?>

<section id="<?= $bloc_id ?>" class=" Testimonials">
    <div class="container-zone">
        <?php if ($has_label && $label) : ?>
            <div class="label"><?= $label ?></div>
        <?php endif; ?>

        <?php if ($has_title && $title) : ?>
            <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php  // Requette ACF 
        $args = array(
            'post_type' => 'temoignages',
            'posts_per_page' => -1,
            'orderby' => 'rand'
        );

        $testimonials = get_posts($args);
        $testimonials_chunks = array_chunk($testimonials, 8);
        ?>
        <?php
        $count = 0;
        $list_count = 0;
        if (!empty($testimonials)) :
        ?>
            <div class="swiper testimonialsSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials_chunks as $index => $chunk) : ?>
                        <ul
                            class="has-not-ul-style accordion testimonials-list swiper-slide"
                            id="testimonials-list<?= $list_count ?>">

                            <?php foreach ($chunk as $testimonial) :
                                global $post;
                                $post = $testimonial;
                                setup_postdata($testimonial); ?>
                                <?php // Variable : 
                                $count++;
                                $testimonial_id = get_the_ID();

                                $testimonial_thematic = get_field('testimonial_thematic', $testimonial_id);
                                $testimonial_name = get_field('testimonial_name', $testimonial_id);
                                $testimonial_content = get_field('testimonial_content', $testimonial_id);
                                $testimonial_date = get_field('testimonial_date', $testimonial_id);
                                ?>

                                <li
                                    data-main-color="<?= $testimonial_thematic ?>"
                                    class="accordion-item testimonial">
                                    <div class="accordion-header">
                                        <button
                                            class="accordion-button <?= $count == 1 ? '' : 'collapsed' ?>"
                                            type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?= $count ?>"
                                            aria-expanded="<?= $count == 1 ? 'true' : 'false' ?>"
                                            aria-controls="collapse<?= $count ?>">
                                            <div class="icon">
                                                Icône
                                            </div>
                                            <div class="name-and-date">
                                                <div class="name"><?= $testimonial_name ?></div>
                                                <div class="date">Le <?= $testimonial_date ?></div>
                                            </div>
                                            <div class="toggle"></div>
                                        </button>
                                    </div>
                                    <div
                                        id="collapse<?= $count ?>"
                                        class="accordion-collapse collapse <?= $count == 1 ? 'show' : '' ?>" data-bs-parent="#testimonials-list<?= $list_count ?>">
                                        <div class="accordion-body">
                                            <?= $testimonial_content ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        <?php endif; ?>
    </div>

</section>