<?php

/**
 * Component Button | Composant Button
 *
 * This component is used to display a button depending on its type. | Ce composant est utilisé pour afficher un bouton en fonction de son type.
 * Available button types: | Types de boutons disponibles :
 * shrink_hover : Shrink on hover | Rétrécissement au survol
 * grow_hover : Grow on hover | Agrandissement au survol
 * background_shift_hover : Color change | Changement de couleur
 * slide_up_hover : Translation upwards | Translation vers le haut
 * glowing_gradient_hover : Luminous gradient | Dégradé lumineux
 * liquid_button_hover : Liquid button | Bouton liquide
 * neon_button_hover : Shadow brightness | Luminosité de l'ombre
 * particle_button_hover : Particle button | Bouton de particules
 * @param string $button_type The type of button to display. | Le type de bouton à afficher.
 * @param string $background_color_button The background color of the button. | La couleur de fond du bouton.
 * @param string $hover_background_color_button The background color of the button on hover. | La couleur de fond du bouton au survol.
 * @param string $border_color_button The border color of the button. | La couleur de la bordure du bouton.
 * @param string $text_color_button The text color of the button. | La couleur du texte du bouton.
 * @param string $hover_text_color_button The text color of the button on hover. | La couleur du texte du bouton au survol.
 * @param string $text_button The text of the button. | Le texte du bouton.
 * @param string $button_link The link of the button. | Le lien du bouton.
 *
 * @category Component
 * @author Sequane AF-CB
 * @version 1.0.0
 */
?>


<?php if ($button_type === 'shrink-hover') : ?>

    <a
        class="Button <?= $button_type; ?> bg-<?= $button_background_color; ?>"
        href="<?= $button_link['url']; ?>"
        target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">

        <?= $button_text; ?>
    </a>

<?php endif; ?>

<?php if ($button_type === 'grow-hover') : ?>
    <a
        class="Button <?= $button_type; ?> bg-<?= $button_background_color; ?>"
        href="<?= $button_link['url']; ?>"
        target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">

        <?= $button_text; ?>
    </a>

<?php endif; ?>

<?php if ($button_type === 'background-shift-hover') : ?>
    <a
        class="Button <?= $button_type; ?>
        text-<?= $button_background_color_on_hover; ?>
        border-<?= $button_background_color_on_hover; ?> hover-bg-<?= $button_background_color_on_hover; ?>"
        href="<?= $button_link['url']; ?>"
        target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">

        <?= $button_text; ?>
    </a>
<?php endif; ?>

<?php if ($button_type === 'slide-up-hover') : ?>
    <a
        class="Button <?= $button_type; ?> bg-<?= $button_background_color; ?>"
        href="<?= $button_link['url']; ?>"
        target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">

        <?= $button_text; ?>
    </a>
<?php endif; ?>

<?php if ($button_type === 'glowing-gradient-hover') : ?>
    <a
        class="Button <?= $button_type; ?> bg-<?= $button_background_color ? $button_background_color : 'color1'; ?>"
        href="<?= $button_link['url']; ?>"
        target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">
        <?= $button_text; ?>
    </a>

<?php endif; ?>

<?php if ($button_type === 'neon-button-hover') : ?>
    <a class="Button <?= $button_type; ?> bg-<?= $button_background_color; ?>" href="<?= $button_link['url']; ?>" target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">
        <?= $button_text; ?>
    </a>

<?php endif; ?>

<?php if ($button_type === 'liquid-button-hover') : ?>
    <a class="Button <?= $button_type; ?> bg-<?= $button_background_color ? $button_background_color : 'color1'; ?>" href="<?= $button_link['url']; ?>" target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">
        <span>
            <?= $button_text; ?>
        </span>
    </a>

<?php endif; ?>


<?php if ($button_type === 'particle-button-hover') : ?>
    <div class="Button unset button-container <?= $button_type; ?>">
        <span class="particle p1 left bg-<?= $button_background_color ?>"></span>
        <span class="particle p2 left bg-<?= $button_background_color ?>"></span>
        <span class="particle p3 bg-<?= $button_background_color ?>"></span>
        <span class="particle p4 bg-<?= $button_background_color ?>"></span>
        <span class="particle p5 bg-<?= $button_background_color ?>"></span>
        <span class="particle p6 left bg-<?= $button_background_color ?>"></span>
        <span class="particle p7 left bg-<?= $button_background_color ?>"></span>
        <a class="Button true-button bg-<?= $button_background_color ?>"
            href="<?= $button_link['url']; ?>" target="<?= $button_link['target'] ? $button_link['target'] : '_self'; ?>">
            <?= $button_text; ?>
        </a>

    </div>

<?php endif; ?>


<?php if ($button_type === 'scroll-down-button') : ?>

<?php endif; ?>