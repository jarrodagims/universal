<?php get_header();

/*
Template Name: Home
 */?>

<section id="home-module-1" class="home-module-1 waypoint">

    <?php echo get_template_part('template-parts/navbar'); ?>
    <div class="jumbo-container">

        <div class="top-header <?php if (!is_front_page()): ?>internal<?php endif;?>">
            <div class="container-fluid">

                <div class="v-align row">
                    <div class="col navbar-button text-center">
                        <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                                src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
    'description'
); ?>" /></a>
                        <?php if (!is_front_page()): ?><div class="d-none d-lg-flex social-container">
                            <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                        </div><?php endif; ?>
                        <ul class="nav navbar-nav navbar-right <?php if (!is_front_page()): ?>d-lg-none<?php endif;?>">

                            <li><?php if (!empty(get_option('sherpa_business_address'))): ?>

                                <?=get_option('sherpa_business_address')?>

                                <?php endif;?></li>
                            <li><a href="tel:<?php printPhone();?>">PH: <?php printPhone();?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="jumbo-content">
                <div>
                    <div class="h2">Commercial Printer</div>
                    <div class="fade-down">
                        <?php if( $h1 = get_field('custom_h1') ) : ?>

                        <?php echo $h1 ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="secondary-nav">
            <ul class="list-inline">
                <li>
                    <a href="">OFFSET</a></li>
                <li>
                    <a href="">DIGITAL</a></li>
                <li>
                    <a href="">WIDE FORMAT</a></li>
                <li>
                    <a href="">PROMOTIONAL ITEMS</a>
                </li>
            </ul>
        </div>
    </div>

</section>

<section id="home-module-2" class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <picture>
                        <img src="<?=IMGURL?>printed-banners.jpg" alt="Interior" />
                    </picture>

                </div>
            </div>
            <div class="col col-md-1"></div>
            <div class="col">
                <div class="extra-padding">
                    <h2 class="h4 expander collapsed" data-toggle="collapse" data-target="#collapse"
                        aria-expanded="false" aria-controls="collapse"><span>Printing Services</span></h2>
                    <?php if( $section_1_expander = get_field('section_1_expander') ) : ?>
                    <?php echo $section_1_expander ?>
                    <?php endif; ?>

                    <?php if( $section_1_title = get_field('section_1_title') ) : ?>

                    <?php echo $section_1_title ?>


                    <?php endif; ?>

                    <?php if( $section_1_text = get_field('section_1_text') ) : ?>

                    <?php echo $section_1_text ?>

                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section>



<section class="ribbon">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-inline">
                    <li>
                        <a href="">Printing Services</a>
                    </li>
                    <li><a href="">Design Services</a>
                    </li>
                    <li><a href="">Mailing Services</a>
                    </li>
                    <li><a href="">Mailing Lists</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="home-module-3">

    <div class="container">

        <div class="row">

            <div class="col">

            </div>
        </div>
    </div>
</section>

<section id="home-module-5" class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <picture>
                        <img src="<?=IMGURL?>dont-advertise-entice.jpg" alt="Interior" />
                    </picture>

                </div>
            </div>
            <div class="col col-md-1"></div>
            <div class="col">
                <div class="extra-padding">

                    <h2>Our Promise
                    </h2>

                    <p>
                        Universal Graphics has spent the last few decades immersing itself in the business of commercial
                        printing and graphic design services. Throughout our long journey, we have learned the ins and
                        outs of the industry, but we have always understood that what truly sets us apart is our
                        commitment to the customer and the quality of our products.
                    </p>

                    <p>
                        We value personal relationships with our customers and helping their business flourish. Our
                        expertise lies in commercial printing and representing businesses through professional and
                        quality designs and products.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>


</div>


<?php get_footer();?>