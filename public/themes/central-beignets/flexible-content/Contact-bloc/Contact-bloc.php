<?php

$contact_form_title = get_sub_field('contact_form_title');
$details_title = get_sub_field('details_title');
$location = get_field('location', 'option');
$phone_france = get_field('phone_france', 'option');
$phone_suisse = get_field('phone_suisse', 'option');
$email = get_field('email', 'option');

$follow_us_title = get_sub_field('follow_us_title');
$follow_us_description = get_sub_field('follow_us_description');

?>


<section class="Contact-bloc">
    <div class="container-zone">
        <div class="contact-forms-zone">
            <h2 class="title"><?= $contact_form_title; ?></h2>
            <?php
            $forms = [
                'question' => [
                    'title' => 'Question',
                    'icon' => 'fa-solid fa-message',
                    'shortcode' => '[contact-form-7 id="a0e285d" title="Formulaire de contact - Question"]',

                ],
                'commande' => [
                    'title' => 'Commander',
                    'icon' => 'fa-solid fa-cart-shopping',
                    'shortcode' => '[contact-form-7 id="23dac9a" title="Formulaire de contact - Commander"]',

                ],
                'partenariat' => [
                    'title' => 'Partenariat',
                    'icon' => 'fa-solid fa-handshake',
                    'shortcode' => '[contact-form-7 id="c1a97b7" title="Formulaire de contact - Partenariat"]',

                ]
            ];
            ?>
            <ul class="has-not-ul-style toggles-form-zone">
                <?php foreach ($forms as $form) : ?>
                    <li data-form="<?= $form['title']; ?>" class="toggle-form-button rect-button <?= $form['title'] == 'Question' ? 'active' : ''; ?>">
                        <span class="icon">
                            <i class="<?= $form['icon']; ?>"></i>
                        </span>
                        <span class="text">
                            <?= $form['title']; ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="forms-zone">
                <?php foreach ($forms as $form) : ?>
                    <div data-form="<?= $form['title']; ?>" class="form <?= $form['title'] == 'Question' ? 'active' : ''; ?>">
                        <?= do_shortcode($form['shortcode']); ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="infos-zone">
            <div class="details">
                <h2 class="title"><?= $details_title; ?></h2>
                <?php if ($location || $phone_france || $phone_suisse || $email) : ?>
                    <ul class="has-not-ul-style details-list">
                        <?php if ($email) : ?>
                            <li class="email">
                                <span class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <div class="text">
                                    <span class="label">Email</span>
                                    <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if ($phone_suisse) : ?>
                            <li class="phone">
                                <span class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <div class="text">
                                    <span class="label">Téléphone</span>
                                    <a href="tel:<?= $phone_suisse; ?>"><?= $phone_suisse; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if ($phone_france) : ?>
                            <li class="phone">
                                <span class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <div class="text">
                                    <span class="label">Téléphone</span>
                                    <a href="tel:<?= $phone_france; ?>"><?= $phone_france; ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if ($location) : ?>
                            <li class="location">
                                <span class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <div class="text">
                                    <span class="label">Adresse</span>
                                    <?= $location; ?>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="follow-us">
                <?php if ($follow_us_title) : ?>
                    <h2 class="title"><?= $follow_us_title; ?></h2>
                <?php endif; ?>
                <?php if ($follow_us_description) : ?>
                    <div class="description"><?= $follow_us_description; ?></div>
                <?php endif; ?>
                <?php if ($location || $phone_france || $phone_suisse || $email) : ?>
                    <ul class="follow-us-links">

                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>