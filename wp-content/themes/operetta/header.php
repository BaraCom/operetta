<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <header class="wrapper">
        <div class="main_header">
            <div class="header_third">
                <div class="header_social">
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
            <div class="header_third header_logo">
                <a href="<?php echo home_url("/"); ?>" class="logo_link">
                    <img src=" <?php echo ale_get_option('sitelogo'); ?>" />
                </a>
            </div>
            <div class="header_third header_quote">
                <p class="header_paragraph">
                    <span class="quote">&#8220;</span> professionals </br>
                    for you <span class="quote">&#8221;</span>
                </p>
            </div>
        </div>
    </header>
