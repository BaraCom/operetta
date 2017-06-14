<?php
/**
* Template Name: Template Slider
*/

get_header();
?>

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
                    gallery
                </a>
            </p>
            <div class="top_slider_line">

            </div>
            <div class="flexslider">
                <ul class="slides">
                    <?php $slider = ale_sliders_get_slider(ale_get_option('gallerysliderslug')); ?>
                    <?php if($slider): ?>
                        <?php foreach ($slider['slides'] as $slide) : ?>
                            <li>
                                <figure>
                                    <?php if ($slide['image']) : ?>
                                        <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>"/>
                                    <?php endif; ?>
                                    <?php if ($slide['title'] or $slide['description'] or $slide['html']) { ?>
                                        <figcaption>
                                            <?php if ($slide['title']) {echo '<span class="mainslidertitle">' . $slide['title'] . '</span>';} ?>
                                            </br>
                                            <?php if ($slide['description']) {echo '<span class="mainsliderdesc">' . $slide['description'] . '</span>';} ?>
                                            </br>
                                            <?php if ($slide['url']) {echo '<a href=" '. $slide['url'] . ' " class="sliderlinkmore">' . __('Read More' , 'aletheme') .'</a>';} ?>
                                        </figcaption>
                                    <?php } ?>
                                </figure>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </section>
        <div class="see_all_photos">
            <p class="see_all_photos_parag">
                <a href=" http://operetta.ua/gallery/">
                    see all photos
                </a>
            </p>
        </div>
        <div class="bottom_slider_line">

        </div>
    </section>

<?php get_footer(); ?>