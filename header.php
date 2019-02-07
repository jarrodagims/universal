<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125707253-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-125707253-1');
    </script>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <?php wp_head();?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?=get_option('sherpa_schema')?>

    <?php endif;?>
</head>

<body <?php body_class();?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

    <div class="top-header <?php if (!is_front_page()): ?>internal<?php endif;?>">
        <div class="container-fluid">

            <div class="v-align row">
                <div class="col navbar-button text-center">
                    <?php if (!is_front_page()): ?>
                    <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                            src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
    'description'
); ?>"
                            width="88" /></a>
                    <?php endif;?>
                    <ul class="nav navbar-nav navbar-right <?php if (!is_front_page()): ?>d-lg-none<?php endif;?>">
                        <li>2244 TRAWOOD DR # 207, EL PASO, TX 79935</li>
                        <li><a href="tel:<?php printPhone();?>">PH: <?php printPhone();?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php if (!is_front_page()): ?>
    <?php if (!is_front_page()): ?>
    <div class="sidebar-container">
        <?php echo get_template_part('template-parts/navbar'); ?>
        <?php endif;?>

        <div class="internal-header">
            <div class="container-fluid d-none d-lg-block">
                <div class="row">
                    <div class="col">
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                        <div class="navbar-right d-none d-lg-flex">
                            <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                            <ul class="nav navbar-nav navbar-right">
                                <li>2244 TRAWOOD DR # 207, EL PASO, TX 79935</li>
                                <li><a href="tel:<?php printPhone();?>">PH: <?php printPhone();?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron">
                <div class="jumbo-content">
                    <div class="h2">
                        <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
                    </div>
                    <div class="h1">
                        <?php if(!is_home()) : 
                        echo get_the_title(); 
                        else: echo 'Blog';
                        endif; ?>
                    </div>

                    <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                        <button class="btn btn-primary">
                            CONTACT US
                        </button>
                    </a>

                </div>
            </div>
        </div>
        <?php endif;?>