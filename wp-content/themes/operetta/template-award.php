<?php
/**
 * Template Name: Template About (awards)
 */
get_header(); ?>
    <!-- Content -->
    <section class="wrapper">
        <nav class="liner_menu">
            <?php
            if (has_nav_menu('body_menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'body_menu',
                    'menu'           => 'Body Menu',
                    'menu_class'     => 'ale_bodymenu cv',
                    'walker'         => new Aletheme_Nav_Walker(),
                    'container'      => '',
                ));
            }
            ?>
        </nav>
        <div class="about_container">
            <div class="text">
                <div class="h2 about-3">
                    <p class="title_parag">
                        <a href="#" class="page_title">
                            <?php the_title(); ?>
                        </a>
                    </p>
                </div>
                <div class="about_img">
                    <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
                </div>
                <div class="nav_bottom_image"></div>
                <div class="about_content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="about_social">
                <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta') ?> ">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a><?php } ?>
                <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi') ?>" >
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    </a><?php } ?>
                <?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb') ?>" >
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a><?php } ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>