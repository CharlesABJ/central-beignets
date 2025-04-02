<div class="contact-info-part <?= $logo ? '' : 'has-not-logo' ?>">
    <?php if ($has_info_card) : ?>
        <?php if ($logo || $address || $phone || $email || $website || $facebook_link || $youtube_link || $whatsapp_link || $instagram_link || $tiktok_link || $telegram_link || $twitter_link || $linkedin_link || $pinterest_link || $snapchat_link || $reddit_link || $discord_link || $flickr_link) : ?>

            <div class="info-card">
                <?php if ($logo && !empty($logo)) : ?>
                    <div class="logo">
                        <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
                    </div>
                <?php endif; ?>
                <div class="contact">
                    <?php if ($address && !empty($address)) : ?>
                        <div class="item">
                            <a class="address" target="_blank" href="https://www.google.com/maps/place/<?= str_replace(' ', '+',  $address); ?>" target="_blank">
                                <span class="icon">
                                    <img src="<?= get_template_directory_uri() . '/img/icons/Icon-localisation.svg' ?>" alt="icon-location">
                                </span>
                                <?= $address ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if ($phone && !empty($phone)) : ?>
                        <div class="item">
                            <a class="phone" href="tel:<?= $phone ?>" target="_blank">
                                <span class="icon">
                                    <img src="<?= get_template_directory_uri() . '/img/icons/Icon-phone.svg' ?>" alt="icon-phone">
                                </span>
                                <?= $phone ?>
                            </a>
                        </div>

                    <?php endif; ?>

                    <?php if ($email && !empty($email)) : ?>
                        <div class="item">
                            <a class="email" href="mailto:<?= $email ?>" target="_blank">
                                <span class="icon">
                                    <img src="<?= get_template_directory_uri() . '/img/icons/Icon-mail.svg' ?>" alt="icon-email">
                                </span>
                                <?= $email ?>
                            </a>
                        </div>

                    <?php endif; ?>
                </div>

                <div class="socials<?= !empty($website) ? ' and-website' : '' ?>">
                    <?php if ($website && !empty($website) && !$has_for_compagny) : ?>
                        <a href="<?= $website ?>" target="_blank" class="website-button">Site web</a>
                    <?php else : ?>
                        <p>Rejoignez-nous !</p>
                    <?php endif; ?>
                    <?php if ($has_social_networks) : ?>
                        <?php if ($facebook_link || $youtube_link || $whatsapp_link || $instagram_link || $tiktok_link || $telegram_link || $twitter_link || $linkedin_link || $pinterest_link || $snapchat_link || $reddit_link || $discord_link || $flickr_link) : ?>

                            <?php  // Liste des réseaux sociaux pour compter le nombre de réseaux sociaux et gérer le style
                            $socials = array($facebook_link, $youtube_link, $whatsapp_link, $instagram_link, $tiktok_link, $telegram_link, $twitter_link, $linkedin_link, $pinterest_link, $snapchat_link, $reddit_link, $discord_link, $flickr_link);
                            $socials_count = count(array_filter($socials));
                            ?>
                            <div class="socials-icons has-<?= $socials_count ?>-items">
                                <?php if ($facebook_link && !empty($facebook_link)) : ?>
                                    <a href="<?= $facebook_link['url'] ?>" target="_blank" class="facebook">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-facebook.svg' ?>" alt="icon-facebook">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($instagram_link && !empty($instagram_link)) : ?>
                                    <a href="<?= $instagram_link['url'] ?>" target="_blank" class="instagram">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-insta.svg' ?>" alt="icon-instagram">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($youtube_link && !empty($youtube_link)) : ?>
                                    <a href="<?= $youtube_link['url'] ?>" target="_blank" class="youtube">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-youtube.svg' ?>" alt="icon-youtube">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($whatsapp_link && !empty($whatsapp_link)) : ?>
                                    <a href="<?= $whatsapp_link['url'] ?>" target="_blank" class="whatsapp">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-whatsapp.svg' ?>" alt="icon-whatsapp">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($tiktok_link && !empty($tiktok_link)) : ?>
                                    <a href="<?= $tiktok_link['url'] ?>" target="_blank" class="tiktok">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-tiktok.svg' ?>" alt="icon-tiktok">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($telegram_link && !empty($telegram_link)) : ?>
                                    <a href="<?= $telegram_link['url'] ?>" target="_blank" class="telegram">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-telegram.svg' ?>" alt="icon-telegram">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($twitter_link && !empty($twitter_link)) : ?>
                                    <a href="<?= $twitter_link['url'] ?>" target="_blank" class="twitter">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-twitter.svg' ?>" alt="icon-twitter">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($linkedin_link && !empty($linkedin_link)) : ?>
                                    <a href="<?= $linkedin_link['url'] ?>" target="_blank" class="linkedin">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-linkedin.svg' ?>" alt="icon-linkedin">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($pinterest_link && !empty($pinterest_link)) : ?>
                                    <a href="<?= $pinterest_link['url'] ?>" target="_blank" class="pinterest">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-pinterest.svg' ?>" alt="icon-pinterest">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($snapchat_link && !empty($snapchat_link)) : ?>
                                    <a href="<?= $snapchat_link['url'] ?>" target="_blank" class="snapchat">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-snapchat.svg' ?>" alt="icon-snapchat">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($reddit_link && !empty($reddit_link)) : ?>
                                    <a href="<?= $reddit_link['url'] ?>" target="_blank" class="reddit">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-reddit.svg' ?>" alt="icon-reddit">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($discord_link && !empty($discord_link)) : ?>
                                    <a href="<?= $discord_link['url'] ?>" target="_blank" class="discord">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-discord.svg' ?>" alt="icon-discord">
                                        </span>
                                    </a>
                                <?php endif; ?>

                                <?php if ($flickr_link && !empty($flickr_link)) : ?>
                                    <a href="<?= $flickr_link['url'] ?>" target="_blank" class="flickr">
                                        <span>
                                            <img src="<?= get_template_directory_uri() . '/img/icons/Icon-flickr.svg' ?>" alt="icon-flickr">
                                        </span>
                                    </a>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($has_map && $map && !empty($map)) : ?>
        <a class="map" data-fancybox="map" href="#" data-src="<?= $map['url'] ?>" title="Cliquer pour agrandir la carte">
            <img src="<?= $map['url'] ?>" alt="<?= $map['alt'] ?>">
        </a>
    <?php endif; ?>
</div>