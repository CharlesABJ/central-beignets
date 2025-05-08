</main>
<footer>
    <?php // Footer Variables
    $name = get_field('name', 'option');
    $short_description = get_field('short_description', 'option');
    $secondary_logo = get_field('secondary_logo', 'option');
    $address = get_field('address', 'option');
    $phone = get_field('phone', 'option');
    $email = get_field('email', 'option');
    ?>


    <div class="container-zone">
        <div class="top">


        </div>
        <div class="bottom">
            © 2025 Central. Tous droits réservés.
        </div>
    </div>

</footer>
<script src="https://kit.fontawesome.com/a117eb47ea.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>

</html>