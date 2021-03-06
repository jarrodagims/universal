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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121649798-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-121649798-1');
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

    <meta name="google-site-verification" content="6mQG0vpMJdvzUVh4TJ_bjjR6w1G_3op0Th4q2zelpDw" />
    <meta name="google-site-verification" content="6-17-z-8Sq-j9s-gZspsw8GF4Us6wyYmfCTbvepH0-Q" />

    <!-- Default Statcounter code for Universal Graphics
http://www.ug-inc.com/ -->
    <script type="text/javascript">
    var sc_project = 11750143;
    var sc_invisible = 1;
    var sc_security = "e9a2e06d";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https://statcounter.com/" target="_blank"><img class="statcounter"
                    src="https://c.statcounter.com/11750143/0/e9a2e06d/1/" alt="Web Analytics Made Easy -
StatCounter"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ProfessionalService",
        "name": "Universal Graphics, Inc.",
        "image": "http://ug-inc.com/wp-content/themes/universal-graphics/img/logo.svg",
        "@id": "",
        "url": "http://www.ug-inc.com/",
        "telephone": "(915) 591-8943",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1217 Barranca Dr Ste B",
            "addressLocality": "El Paso",
            "addressRegion": "TX",
            "postalCode": "79935",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.7539544,
            "longitude": -106.33253669999999
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "08:00",
            "closes": "17:00"
        },
        "sameAs": [
            "https://www.facebook.com/UniversalGraphicsInc/",
            "https://twitter.com/gil_the_printer"
        ]
    }
    </script>

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
                            <li><a href="<?=SITEURL?>/submit-files/"><button class="btn btn-primary">Submit Your
                                        Files</button></a></li>
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
            <?php if(!is_front_page() && !is_page_template('page-grid.php')) :?>
            <section class="internal-banner waypoint">
                <?php echo get_template_part('template-parts/navbar'); ?>
                <div class="jumbo-container">
                    <?php echo get_template_part('template-parts/top-header'); ?>
                    <div class="banner banner-internal">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-none d-lg-flex">
                                            <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
                                        </div>
                                        <div class="header">
                                            <div class="header-content">
                                                <div class="h1"><?php if(!is_home()) :
                                            echo get_the_title();
                                            else: echo 'Blog';
                                            endif; ?></div>
                                                <img src="<?=IMGURL?>find-us-on.svg" alt="Find Us On">
                                                <ul class="list-inline social-media sm">
                                                    <li><a href="https://www.facebook.com/UniversalGraphicsInc/"
                                                            class="facebook-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/gil_the_printer"
                                                            class="twitter-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                                    </li>
                                                    <li><a href="https://www.instagram.com/universalgraphicsinc/"
                                                            class="instagram-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-instagram fa-fw "><span>Instagram</span></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php elseif (is_page_template('page-grid.php')) : ?>

            <section class="grid-banner internal-banner waypoint">
                <?php echo get_template_part('template-parts/navbar'); ?>
                <div class="jumbo-container">
                    <?php echo get_template_part('template-parts/top-header'); ?>
                    <div class="banner">
                        <div class="banner-content">
                            <div class="d-none d-lg-flex">
                                <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?></div>

                            <div class="container bg-container">

                                <div class="row header-row">
                                    <div class="col bg-header-banner">

                                    </div>
                                    <div class="col">

                                        <div class="header">
                                            <div class="header-content">
                                                <div class="h1"><?php if(!is_home()) :
                                            echo get_the_title();
                                            else: echo 'Blog';
                                            endif; ?></div>
                                                <img src="<?=IMGURL?>find-us-on.svg" alt="Find Us On">
                                                <ul class="list-inline social-media sm">
                                                    <li><a href="https://www.facebook.com/UniversalGraphicsInc/"
                                                            class="facebook-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/gil_the_printer"
                                                            class="twitter-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                                    </li>
                                                    <li><a href="https://www.instagram.com/universalgraphicsinc/"
                                                            class="instagram-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-instagram fa-fw "><span>Instagram</span></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(is_page('printing-services')) : ?>
                            <div class="container printing-options">
                                <div class="row printing-list">
                                    <div class="col">
                                        <ul>
                                            <li>Color Options</li>
                                            <li>Full Color</li>
                                            <li>Spot Color Printing</li>
                                            <li>Two Color Printing</li>
                                            <li>Black & White</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php endif; ?>