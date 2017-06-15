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
    <div class="container contacts">
        <p class="title_parag">
            <a href="#" class="page_title">
                <?php _e('gallery','aletheme'); ?>
            </a>
        </p>
    </div>
    <div class="portfolio-single-center-align">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="portfolio-single-title">
        <h2><?php the_title(); ?></h2>
        <p>
            <?php _e('by','aletheme'); ?>
            <a href=""><?php echo the_author_posts_link(); ?>

            </a>
            <?php _e('on','aletheme'); ?>
            <?php echo get_the_date(); ?>
        </p>
        <a href="<?php echo home_url();?>/gallery" class="back">
            <?php _e('<i class="fa fa-arrow-left" aria-hidden="true"></i> back','aletheme'); ?>
        </a>
    </div>
<!--    <section class="slider">-->
        <section id="slider" class="flexslider portfolioslider">
            <ul class="slides">
                <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'numberposts' => -1,
                        'post_status' => null,
                        'order'				=> 'ASC',
                        'orderby'			=> 'menu_order ID',
                        'meta_query'		=> array(
                            array(
                                'key'		=> '_ale_hide_from_gallery',
                                'value'		=> 0,
                                'type'		=> 'DECIMAL',
                            ),
                        ),
                        'post_parent' => $post->ID
                    );
                    $attachments = get_posts( $args );
                    if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
                ?>
                        <li>
                            <?php echo wp_get_attachment_image( $attachment->ID, 'gallery-big' ); ?>
                        </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </section>
        <div class="gallerydescriptionbox">
            <?php
                the_content();
            ?>
        </div>
<!--    </section>-->
    <?php
        endwhile;
        endif;
    ?>
</section>






<?php get_footer(); ?>