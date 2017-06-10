<?php 
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
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
    <div class="container contacts">
        <p class="title_parag">
            <a href="#" class="page_title">
                <?php the_title(); ?>
            </a>
        </p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page_content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>

        <div class="contacts_data cf">
            <div class="parts">
                <p class="cont_parag number">
                    <span class="label"><i class="fa fa-phone-square" aria-hidden="true"></i>
                        <?php echo ale_get_meta('phone_label'); ?>
                    </span>
                    <span class="value">
                        <?php echo ale_get_meta('phone_number'); ?>
                    </span>
                </p>
                <p class="cont_parag mail">
                    <span class="label"><i class="fa fa-envelope" aria-hidden="true"></i>
                        <?php echo ale_get_meta('email_label'); ?>
                    </span>
                    <span class="value">
                        <a href="mailto:<?php echo ale_get_meta('email'); ?>">
                            <?php echo ale_get_meta('email'); ?>
                        </a>
                    </span>
                </p>
            </div>
            <div class="parts contacts_social">
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
    </div>
    <div class="contacts_form">
        <form method="post" action="<?php the_permalink();?>">
            <?php if (isset($_GET['success'])) : ?>
                <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
            <?php endif; ?>
            <?php if (isset($error) && isset($error['msg'])) : ?>
                <p class="error"><?php echo $error['msg']?></p>
            <?php endif; ?>

            <div class="item_line">
                <input class="input" name="contact[name]" type="text" placeholder="Your Name" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" id="contact-form-name" />
            </div>
            <div class="item_line">
                <input class="input" name="contact[email]" type="email" placeholder="Your Email" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" id="contact-form-email" />
            </div>
            <div class="item_line">
                <textarea class="input message" name="contact[message]"  placeholder="Message..."id="contact-form-message"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
            </div>
            <div class="item_line">
                <input type="submit" class="submit" value="<?php _e('send', 'aletheme')?>"/>
            </div>

            <?php wp_nonce_field() ?>
        </form>
    </div>
</section>

<?php get_footer(); ?>