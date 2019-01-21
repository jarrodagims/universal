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

    <?php  
//     |\/\  ,.
//     /   `' |,-,
//    /         /_
//  _/            /
// (.-,--.       /
// /o/  o \     /
// \_\    /   _/
// (__`--'    _)
//  /         |
// (_____,'    \  
//    \_       _\
//      `._..-'
?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <div class="d-xs-flex d-lg-none">
        <div class="navbar-right">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="tel:9155333377">1926 Montana Ave 79903&nbsp;&nbsp;| </a></li>
                <li><a href="tel:9155815565">8001 N Mesa St 79932&nbsp;&nbsp;| </a></li>
            </ul>
        </div>
    </div>
    <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
        <div class="container">
            <div class="v-align row">
                <div class="col-xs-12 navbar-button text-center">

                    <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                            alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>


                    <div class="navbar-right d-none d-lg-flex">
                        <ul class="nav navbar-nav navbar-right">
                            <li>1926 Montana Ave 79903 | PH: <a href="tel:9155333377">915.533.3377</a></li>
                            <li>8001 N Mesa St 79932 | PH: <a href="tel:9155815565">915.581.5565</a></li>
                            <li>
                                <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">Contact us</button></a>
                            </li>
                        </ul>
                    </div>

                    <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(!is_front_page()) : ?>
    <div class="container d-md-block d-none">
        <div class="row">
            <div class="col internal">
                <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>