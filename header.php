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



    <div class="sidebar-container">
        <div class="d-flex d-lg-none top-header">
            <div class="container-fluid">
                <div class="v-align row">
                    <div class="col navbar-button text-center">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="tel:<?php printPhone();?>">TELEPHONE: <?php printPhone();?></a></li>
                            <li class="nav-item menu-item directions">
                                <a href="<?=SITEURL?>/contact-us/"><span
                                        class="nav-link"><em><?=get_option('sherpa_business_address')?></em></span></a>
                            </li>
                            <li class="nav-item menu-item contact"><a
                                    href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"
                                    class="nav-link"><span><?php printPhone(); ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-sidebar">
            <div class="brand-header d-lg-none">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
            'description'
        ); ?>" /></a>
            </div>
        </div>


        <div class="content">
            <?php if(!is_front_page()) :?>

            <section class="internal-banner waypoint">
                <?php echo get_template_part('template-parts/navbar'); ?>
                <div class="jumbo-container">
                    <div class="d-none d-lg-flex top-header">
                        <div class="container-fluid">
                            <div class="v-align row">
                                <div class="col navbar-button text-center">
                                    <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                                            src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
    'description'
); ?>" /></a>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="tel:<?php printPhone();?>">TELEPHONE: <?php printPhone();?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
                                        <div class="header">
                                            <div class="header-content">
                                                <div class="h1"><?php if(!is_home()) :
                                            echo get_the_title();
                                            else: echo 'Blog';
                                            endif; ?></div>
                                                <img src="<?=IMGURL?>find-us-on.svg" alt="Find Us On">
                                                <?php
                                            $sm = new SocialMedia(array('facebook', 'twitter'));
                                            $sm->setSize('sm');
                                            $sm->showNetworkButtons();
                                            $sm->setColorType('singleColor');
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php endif; ?>