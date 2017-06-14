<?php
/*
  * Template name: Home
  * */
get_header();
?>

<section class="wrapper">
    <main class="body">
        <nav class="nav">
            <?php
                if (has_nav_menu('body_menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'body_menu',
                        'menu'           => 'Body Menu',
                        'menu_class'     => 'bodymenu cv',
                        'walker'         => new Aletheme_Nav_Walker(),
                        'container'      => '',
                    ));
                }
            ?>
        </nav>
        <div class="nav_bottom_image"></div>
    </main>
</section>

<?php
get_footer();
?>
