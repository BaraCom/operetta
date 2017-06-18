<?php get_header(); ?>
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
    <section class="gallery">
        <p class="title_parag">
            <a href="#" class="page_title">
                <?php the_title(); ?>
            </a>
        </p>
    </section>
    <div class="blog-single-caption">
        <a class="backblog" href="<?php echo home_url(); ?>/services"><?php _e('<i class="fa fa-arrow-left" aria-hidden="true"></i> Back','aletheme'); ?></a>
    </div>
    <div class="img_post">
        <?php
            echo get_the_post_thumbnail($post->ID,'post-minibox');
        ?>
    </div>
    <div class="text">
    <?php
        if (have_posts()) : while (have_posts()) : the_post();
        the_content();
        endwhile; else:
        ale_part('notfound')?>
            <?php endif; ?>
    </div>

    <?php comments_template(); ?>

    <div class="blog-single-footer cf">
        <div class="left"><?php if(get_previous_post_link()){ ?><span class="left"></span><?php } ?> <?php previous_post_link('%link'); ?> </div>
        <div class="right"><?php if(get_next_post_link()){ ?><span class="right"></span><?php } ?> <?php next_post_link('%link'); ?>  </div>
    </div>

</section>

<?php get_footer(); ?>
