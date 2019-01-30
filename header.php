<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

    <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
        <div class="container-fluid">

            <div class="v-align row">
                <div class="col navbar-button text-center">


                    <?php if(!is_front_page()) : ?>
                    <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.svg"
                            alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>"
                            width="88" /></a>
                    <?php endif; ?>

                    <div class="navbar-right d-none d-lg-flex">

                        <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>



                        <ul class="nav navbar-nav navbar-right">
                            <li>2244 TRAWOOD DR # 207, EL PASO, TX 79935</li>
                            <li><?php printPhone(); ?></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>