<ul class="social-networks-parts has-not-ul-style social-networks">
    <?php // Facebook
    if ($facebook_link && !empty($facebook_link)) : ?>
        <li>
            <a href="<?= $facebook_link; ?>" target="_blank" class="social-icon facebook">
                <img width="30" height=30 loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/facebook.svg' ?>" alt="Facebook">
            </a>
        </li>
    <?php endif ?>

    <?php // Instagram
    if ($instagram_link && !empty($instagram_link)) : ?>
        <li>
            <a href="<?= $instagram_link; ?>" target="_blank" class="social-icon instagram">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/instagram.svg' ?>" alt="Instagram">
            </a>
        </li>
    <?php endif ?>

    <?php // Youtube
    if ($youtube_link && !empty($youtube_link)) : ?>
        <li>
            <a href="<?= $youtube_link; ?>" target="_blank" class="social-icon youtube">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-youtube.svg' ?>" alt="Youtube">
            </a>
        </li>
    <?php endif ?>

    <?php // Whatsapp
    if ($whatsapp_link && !empty($whatsapp_link)) : ?>
        <li>
            <a href="<?= $whatsapp_link; ?>" target="_blank" class="social-icon whatsapp">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-whatsapp.svg' ?>" alt="Whatsapp">
            </a>
        </li>
    <?php endif ?>

    <?php // Tiktok
    if ($tiktok_link && !empty($tiktok_link)) : ?>
        <li>
            <a href="<?php $tiktok_link; ?>" target="_blank" class="social-icon tiktok">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-tiktok.svg' ?>" alt="Tiktok">
            </a>
        </li>
    <?php endif ?>

    <?php // Telegram
    if ($telegram_link && !empty($telegram_link)) : ?>
        <li>
            <a href="<?= $telegram_link; ?>" target="_blank" class="social-icon telegram">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-telegram.svg' ?>" alt="Telegram">
            </a>
        </li>
    <?php endif ?>

    <?php // Twitter
    if ($twitter_link && !empty($twitter_link)) : ?>
        <li>
            <a href="<?= $twitter_link; ?>" target="_blank" class="social-icon twitter">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-twitter.svg' ?>" alt="Twitter">
            </a>
        </li>
    <?php endif ?>

    <?php // Linkedin
    if ($linkedin_link && !empty($linkedin_link)) : ?>
        <li>
            <a href="<?= $linkedin_link; ?>" target="_blank" class="social-icon linkedin">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/linkedin.svg' ?>" alt="Linkedin">
            </a>
        </li>
    <?php endif ?>

    <?php // Pinterest
    if ($pinterest_link && !empty($pinterest_link)) : ?>
        <li>
            <a href="<?= $pinterest_link; ?>" target="_blank" class="social-icon pinterest">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-pinterest.svg' ?>" alt="Pinterest">
            </a>
        </li>
    <?php endif ?>

    <?php // Snapchat
    if ($snapchat_link && !empty($snapchat_link)) : ?>
        <li>
            <a href="<?= $snapchat_link; ?>" target="_blank" class="social-icon snapchat">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-snapchat.svg' ?>" alt="Snapchat">
            </a>
        </li>
    <?php endif ?>

    <?php // Reddit
    if ($reddit_link && !empty($reddit_link)) : ?>
        <li>
            <a href="<?= $reddit_link; ?>" target="_blank" class="social-icon reddit">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-reddit.svg' ?>" alt="Reddit">
            </a>
        </li>
    <?php endif ?>

    <?php // Discord
    if ($discord_link && !empty($discord_link)) : ?>
        <li>
            <a href="<?= $discord_link; ?>" target="_blank" class="social-icon discord">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-discord.svg' ?>" alt="Discord">
            </a>
        </li>
    <?php endif ?>

    <?php // Flickr
    if ($flickr_link && !empty($flickr_link)) : ?>
        <li>
            <a href="<?= $flickr_link; ?>" target="_blank" class="social-icon flickr">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/img/icons/Icon-flickr.svg' ?>" alt="Flickr">
            </a>
        </li>
    <?php endif ?>

</ul>