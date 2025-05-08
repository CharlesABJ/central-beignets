<?php

// Bouton d'appel à l'action || call_to_action_button
if (get_row_layout() == 'call_to_action_button') :
    require(locate_template('flexible-content/Call-to-action-button/Call-to-action-button.php'));

// Contenu textuel || text_content 
elseif (get_row_layout() == 'text_content') :
    require(locate_template('flexible-content/Text-content/Text-content.php'));

// Galerie scrollable || scroll-gallery
elseif (get_row_layout() == 'scroll_gallery') :
    require(locate_template('flexible-content/Scroll-gallery/Scroll-gallery.php'));

// Liste des appartements || apartments_list
elseif (get_row_layout() == 'apartments_list') :
    require(locate_template('flexible-content/Apartments-list/Apartments-list.php'));

// Liste des partenaires || partners_list
elseif (get_row_layout() == 'partners_list') :
    require(locate_template('flexible-content/Partners-list/Partners-list.php'));
// Réassurance || reansurance
elseif (get_row_layout() == 'reansurance') :
    require(locate_template('flexible-content/Reansurance/Reansurance.php'));
// Témoignages || testimonials
elseif (get_row_layout() == 'testimonials') :
    require(locate_template('flexible-content/Testimonials/Testimonials.php'));



// =========================== BLOC FLEXIBLES NON UTILISÉS ===========================


// // Bloc polyvalent || polyvalent_bloc
// elseif (get_row_layout() == 'polyvalent_bloc') :
//     require(locate_template('flexible-content/polyvalent-bloc/polyvalent-bloc.php'));

// // Bloc Galeries || gallery_bloc
// elseif (get_row_layout() == 'gallery_bloc') :
//     require(locate_template('flexible-content/gallery-bloc/gallery-bloc.php'));

// // Bloc de listing || listing_bloc
// elseif (get_row_layout() == 'listing_bloc') :
//     require(locate_template('flexible-content/listing-bloc/listing-bloc.php'));

// // Bloc réassurance || reassurance_bloc
// elseif (get_row_layout() == 'reassurance_bloc') :
//     require(locate_template('flexible-content/reassurance-bloc/reassurance-bloc.php'));

// //Formulaires de contact || contact_form_bloc
// elseif (get_row_layout() == 'contact_form_bloc') :
//     require(locate_template('flexible-content/contact-form-bloc/contact-form-bloc.php'));

// // Ajouter les avis Google || google_reviews
// elseif (get_row_layout() == 'google_reviews') :
//     require(locate_template('flexible-content/google-reviews/google-reviews.php'));

// // Bloc Bannière texte et médias || banner-text-and-medias
// elseif (get_row_layout() == 'banner_text_and_medias') :
//     require(locate_template('flexible-content/banner-text-and-medias/banner-text-and-medias.php'));

// // Bloc de redirection || redirection_bloc
// elseif (get_row_layout() == 'redirection_bloc') :
//     require(locate_template('flexible-content/redirection-bloc/redirection-bloc.php'));

// // Bloc anecdote || anecdote_bloc
// elseif (get_row_layout() == 'anecdote_bloc') :
//     require(locate_template('flexible-content/anecdote-bloc/anecdote-bloc.php'));

// // Bloc derniers posts || last_posts_bloc
// elseif (get_row_layout() == 'last_posts_bloc') :
//     require(locate_template('flexible-content/last-posts-bloc/last-posts-bloc.php'));

// // Ajouter un bandeau défilant || scrolling_band
// elseif (get_row_layout() == 'scrolling_band') :
//     require(locate_template('flexible-content/scrolling-band/scrolling-band.php'));

// // Bloc FAQ || faq_bloc
// elseif (get_row_layout() == 'faq_bloc') :
//     require(locate_template('flexible-content/faq-bloc/faq-bloc.php'));

// // Bloc témoignage || testimonial_bloc
// elseif (get_row_layout() == 'testimonial_bloc') :
//     require(locate_template('flexible-content/testimonial-bloc/testimonial-bloc.php'));


// // Liste de "Posts" similaires || listing_related_posts
// elseif (get_row_layout() == 'listing_related_posts') :
//     require(locate_template('flexible-content/listing-related-posts/listing-related-posts.php'));

// // Bloc de candidature et partage || apply_and_share_bloc
// elseif (get_row_layout() == 'apply_and_share_bloc') :
//     require(locate_template('flexible-content/apply-and-share-bloc.php'));

// // Bloc de redirection centré || centered_redirection_bloc
// elseif (get_row_layout() == 'centered_redirection_bloc') :
//     require(locate_template('flexible-content/centered-redirection-bloc/centered-redirection-bloc.php'));

// // Bloc de télechargement || download_bloc
// elseif (get_row_layout() == 'download_bloc') :
//     require(locate_template('flexible-content/download-bloc/download-bloc.php'));

// // Bloc carrousel listing agenda || title_listing_agenda
// elseif (get_row_layout() == 'title_listing_agenda') :
//     require(locate_template('flexible-content/title-listing-agenda/title-listing-agenda.php'));

// // Liste des services || services_list
// elseif (get_row_layout() == 'services_list') :
//     require(locate_template('flexible-content/services-list/services-list.php'));


// // Bloc de cartes classique || classic_card_bloc
// elseif (get_row_layout() == 'classic_card_bloc') :
//     require(locate_template('flexible-content/classic-card-bloc/classic-card-bloc.php'));

// // Boîtes à onglets || tab_bloc
// elseif (get_row_layout() == 'tab_bloc') :
//     require(locate_template('flexible-content/tab-bloc/tab-bloc.php'));

// // F.A.Q Bloc || accordion_bloc
// elseif (get_row_layout() == 'accordion_bloc') :
//     require(locate_template('flexible-content/accordion-bloc/accordion-bloc.php'));

// // Bloc d'étiquettes || tag_bloc
// elseif (get_row_layout() == 'tag_bloc') :
//     require(locate_template('flexible-content/tag-bloc/tag-bloc.php'));

// // Bloc Formulaire 3 colonnes || contact_form_3col
// elseif (get_row_layout() == 'contact_form_3col') :
//     require(locate_template('flexible-content/contact-form-3col/contact-form-3col.php'));

//   //Formulaires de contact || saugeais_contact_form
//   elseif (get_row_layout() == 'saugeais_contact_form') :
//     require(locate_template('flexible-content/saugeais-contact-form/saugeais-contact-form.php'));

// // Bloc Carte Agenda || card_agenda_bloc
// elseif (get_row_layout() == 'card_agenda_bloc') :
//     require(locate_template('flexible-content/card-agenda-bloc/card-agenda-bloc.php'));


endif;
