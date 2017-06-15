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
    <div class="container archive_gallery">
        <p class="title_parag">
            <a href="#" class="page_title">
                <?php _e('gallery','aletheme'); ?>
            </a>
        </p>
            <div class="page_content gallery-page cf">
                <?php global $query_string; query_posts($query_string); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="gallery-post">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail($post->ID, 'min-photo-size'); ?>

                        <span class="mask">
                            <span class="arrow">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </span>
                        </span>
                    </a>
                </div>
            <?php endwhile;  endif;  ?>
        </div>
        <?php global $wp_query;
            if ($wp_query->max_num_pages > 1) {
        ?>
        <div class="pagination">
            <div class="left_arrow">
                <?php
                    if (get_previous_posts_link()) {
                        echo get_previous_posts_link('<i class="fa fa-angle-double-left" aria-hidden="true"></i>');
                    }
                    else {
                        echo '<i class="fa fa-angle-double-left" aria-hidden="true"></i>';
                    }
                ?>
            </div>
            <div class="paginate_item">
                <?php ale_page_links(); ?>
            </div>
            <div class="right_arrow">
                <?php
                    if (get_next_posts_link()) {
                        echo get_next_posts_link('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
                    }
                    else {
                        echo '<i class="fa fa-angle-double-right" aria-hidden="true"></i>';
                    }
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


        <!--
         Filter to see gallery categories
         -->

<!--        <div class="portfolio-categories">-->
<!--            <div class="nav">-->
<!--                <a href="--><?php //echo home_url(); ?><!--/gallery" class="active">--><?php //_e('All', 'aletheme')?><!--</a>-->
<!--                --><?php //$args = array(
//                    'type'                     => 'gallery',
//                    'child_of'                 => 0,
//                    'parent'                   => '',
//                    'orderby'                  => 'name',
//                    'order'                    => 'ASC',
//                    'hide_empty'               => 1,
//                    'hierarchical'             => 1,
//                    'exclude'                  => '',
//                    'include'                  => '',
//                    'number'                   => '',
//                    'taxonomy'                 => 'gallery-category',
//                    'pad_counts'               => false );
//                $categories = get_categories( $args );
//                foreach($categories as $cat){
//                    echo '<span>/</span><a href="'.home_url().'/gallery-category/'.$cat->slug.'">'.$cat->name.'</a>';
//                }
//                ?>
<!--            </div>-->
<!--        </div>-->


<?php get_footer(); ?>