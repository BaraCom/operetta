<!-- Blog Item -->
<div class="blog-item">
    <div class="img-block">
        <a href="<?php the_permalink(); ?>" class="img-post">
            <!--<p><?php /*_e('open post','aletheme'); */?></p>-->
            <?php echo get_the_post_thumbnail($post->ID,'post-thumba') ?>
        </a>
        <a href="<?php the_permalink(); ?>" class="caption">
            <p class="caption_title">
                <?php the_title(); ?>
            </p>
        </a>
    </div>
</div>










<!--    <div class="item-content">-->
<!--        <div class="text">-->
<!--            <p class="text-about">-->
<!--                --><?php //echo ale_trim_excerpt('22'); ?>
<!--            </p>-->
<!--        </div>-->
<!--        <p class="info">-->
<!--            <!--in --><?php ///*the_category(', '); */?><!-- by --><?php ///*echo the_author_posts_link(); */?><!-- <span>|</span>-->
<!--            --><?php //comments_number( 'no comments', 'one comment', '% comments' ); ?>
<!--        </p>-->

<!--        <a class="href" href="--><?php //the_permalink(); ?><!--">--><?php //_e('take a look','aletheme'); ?><!--</a>-->
<!--    </div>-->
