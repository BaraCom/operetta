<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Acme|Alegreya:400,400i,700,700i|Cinzel|Mogra|Raleway:400,400i,700,700i|Slabo+27px|Vollkorn:400,400i,700,700i" rel="stylesheet">
</head>
<body <?php body_class(); ?> >

    <header class="wrapper">
        <div class="main_header">
            <div class="header_third header_left">
                social
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
    <section class="wrapper">
        <div class="body">
            <div class="body_nav">

            </div>
        </div>
    </section>
