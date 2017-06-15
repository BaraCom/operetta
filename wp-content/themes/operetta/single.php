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
</section>






    <!--    <div class="blog-center-align">-->

        <!-- Blog Caption -->


        <!-- Blog Line -->
<!--        <div class="blog-line">-->
<!---->
<!--        </div>-->

        <!-- Blog Content -->
<!--        <div class="blog-single">-->

            <!-- Right Menu -->
<!--            <div class="right-side">-->
<!--                --><?php //get_sidebar(); ?>
<!--            </div>-->

            <!--Left Content-->
            <div class="left-side">
<!--                --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>








<!--                    <p class="info">--><?php //_e('in','aletheme'); ?><!-- --><?php //the_category(', '); ?><!-- --><?php //_e('by','aletheme'); ?><!-- --><?php //echo the_author_posts_link(); ?><!--  <span>|</span> --><?php //comments_number( 'no comments', 'one comment', '% comments' ); ?><!--</p>-->

                    <div class="text">
<!--                        --><?php //the_content(); ?>
<!--                        --><?php //ale_part('posthead');?>
<!--                        --><?php //ale_part('postfull');?>
<!--                        <div class="cf"></div>-->
<!--                        --><?php //ale_part('postfooter');?>
                    </div>
<!--                --><?php //endwhile; else: ?>
<!--                    --><?php //ale_part('notfound')?>
<!--                --><?php //endif; ?>
                <!-- Line -->
                <div class="blog-line"></div>
                <?php comments_template(); ?>
            </div>
<!--        </div>-->

        <!-- Blog Line -->
        <div class="blog-line">

        </div>

        <!-- Blog Nav  -->
        <div class="blog-single-footer">
            <div class="left"><?php if(get_previous_post_link()){ ?><span class="left"></span><?php } ?> <?php previous_post_link('%link'); ?> </div>
            <div class="right"><?php if(get_next_post_link()){ ?><span class="right"></span><?php } ?> <?php next_post_link('%link'); ?>  </div>
        </div>

<!--    </div>-->
<?php get_footer(); ?>