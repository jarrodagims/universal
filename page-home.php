<?php get_header();

/*
Template Name: Home
 */?>
<div class="sidebar-container">
    <div class="nav-sidebar"></div>

    <div class="content">
        <section id="home-module-1" class="home-module-1 waypoint">

            <?php echo get_template_part('template-parts/navbar'); ?>
            <div class="jumbotron">
                <div class="jumbo-content">
                    <div>
                        <div class="h2">Zia Homes</div>
                        <h1>
                            <div class="fade-down">
                                <?php if( $h1 = get_field('custom_h1') ) : ?>

                                <?php echo $h1 ?>

                                <?php endif; ?>
                            </div>
                        </h1>

                        <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-primary">
                                CONTACT US
                            </button>
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <section id="home-module-2" class="home-module-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="extra-padding">
                            <?php if( $section_1_title = get_field('section_1_title') ) : ?>

                            <?php echo $section_1_title ?>


                            <?php endif; ?>
                            <!-- <div class="h4 expander" data-toggle="collapse" data-target="#collapse"
                                aria-expanded="false" aria-controls="collapse"><span>So you’re looking for a new home?
                                    Well, you’ve certainly arrived at the right place and we’re so happy you did!</span>
                            </div>
                            <h2 class="collapse expand" id="collapse">
                                <ul class="expand">
                                    <li>Best modern home builder in the El Paso area since 1985.</li>
                                    <li>We are a top performing new home builder.</li>
                                    <li>Our homes are highly-reviewed by current homeowners.</li>
                                    <li>As a local builder for over 30 years, we consistently strive for customer
                                        satisfaction.</li>
                                    <li>When it comes to comfort and luxury, you get them both with Zia Homes!</li>
                                    <li>We do our best to provide custom homes, built with you in mind.</li>
                                    <li>Quality is in our DNA.</li>
                                    <li>To learn about our warranty, connect with us today.</li>
                                    <li>We take your reviews to heart. Let us know what you like, what you don’t like,
                                        and how we can improve our services.</li>
                                    <li>Our goal is to receive the highest rating possible from you — the future
                                        homeowner!
                                    </li>
                                    <li>We can help make your desired upgrades a reality, simply tell us what you have
                                        in mind.</li>
                                    <li>When it comes to the construction of your home, we’ll guide you through every
                                        step of the way.</li>
                                    <li>Our lots are primarily located on the east side of town, with some on the far
                                        west side.</li>
                                    <li>Come experience our model homes in person!</li>
                                </ul>
                            </h2> -->

                            <?php if( $section_1_expander = get_field('section_1_expander') ) : ?>
                            <?php echo $section_1_expander ?>
                            <?php endif; ?>

                            <?php if( $section_1_text = get_field('section_1_text') ) : ?>

                            <?php echo $section_1_text ?>

                            <?php endif; ?>
                            <a href="<?=SITEURL?>/about-us/" class="contact-us"
                                style="-webkit-transform: translateZ(0px);">
                                <button class="btn btn-primary" style="-webkit-transform: translateZ(0px);">
                                    MORE ABOUT US
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="extra-padding">
                            <picture>
                                <source srcset="<?=IMGURL?>bg-interior.jpg" media="(min-width: 992px)">
                                <img src="<?=IMGURL?>interior-sm.jpg" alt="Interior" />
                            </picture>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ribbon">

        </section>

        <section id="home-module-3" class="home-module-3">
            <?php get_template_part('template-parts/slideshow'); ?>
        </section>

        <section id="home-module-4" class="home-module-4">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="extra-padding">

                            <?php if( $section_4 = get_field('section_4') ) : ?>

                            <?php echo $section_4 ?>


                            <?php endif; ?>


                            <a href="<?=SITEURL?>/our-home-features/" class="contact-us">
                                <button class="btn btn-primary">
                                    CHECK OUT OUR FEATURES
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                    <img src="<?=IMGURL ?>family-sm.jpg" alt="Why choose Zia Homes" class="d-lg-none " />
        </section>

        <section class="ribbon-2">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-md-start justify-content-center align-items-center">
                        <div>CONTACT US TODAY!</div> <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-secondary">
                                CONTACT US
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="home-module-5" class="home-module-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="extra-padding">
                            <?php if( $section_3 = get_field('section_3') ) : ?>

                            <?php echo $section_3 ?>


                            <?php endif; ?>


                            <a href="<?=SITEURL?>/real-estate-el-paso/" class="contact-us">
                                <button class="btn btn-primary">
                                    READ OUR FAQ
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-module-6" class="home-module-6">
            <div id="slide-blog-nav" class="pager">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col">

                        <div class="extra-padding">


                            <?php if( $section_5_title = get_field('section_5_title') ) : ?>

                            <?php echo $section_5_title ?>

                            <?php endif;?>

                            <div class="row slideshow-blog">

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>A Killer <span class="br-md">Appliance Package</span></h3>
                                            <p>Imagine cooking up a storm with an exquisite stainless-steel appliance
                                                package. When you close on a home using our valued partner, that’s
                                                exactly what you’ll get.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>Energy
                                                <span class="br-md">Efficient</span></h3>
                                            <p>At Zia Homes, we love the environment. That's why our homes exceed the
                                                Energy Star Certification standards in energy efficiency. With state of
                                                the art spray foam insulation, energy efficient windows, and more, you
                                                are guaranteed to save on costs.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>The Best Features <span class="br-md">in the Sun City</span></h3>
                                            <p>Our homes are equipped to include the standard features we believe all
                                                homeowners should receive in a modern, luxury home. Come see them for
                                                yourself, today.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>partners.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>Energy-Efficient <span class="br-md">Throughout</span></h3>
                                            <p>Modern homes should take into account the realities of the environment
                                                and the need for sustainability. When you invest in a home, you’re
                                                investing in the future and that means the future of your children and
                                                their community. For those reasons, we attempt to provide
                                                energy-efficiency throughout our homes, giving you the opportunity to
                                                reduce costs and better the environment.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>partners.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>
                                                A PARTNER WHO
                                                <span class="br-md">COMMUNICATES</span></h3>
                                            <p>There’ll be no shortage of emails, phone calls, or text messages to go
                                                around! Because when you choose to work with us, we take that
                                                relationship seriously. We’re always attentive to your needs and do our
                                                best to provide you with answers quickly and thoughtfully.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>buyers.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>
                                                A COMPREHENSIVE
                                                <span class="br-md">BUYER’S WARRANTY</span>
                                            </h3>
                                            <p>Feel confident knowing the home of your dreams is under warranty. Zia
                                                Homes offers an all-inclusive warranty that includes a two-year systems'
                                                warranty and a 10 year extended warranty. So even if there are hiccups
                                                along the way, they will be gone in no time!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>buyers.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>
                                                And Best of All, <span class="br-md">Peace of Mind!</span>
                                            </h3>
                                            <p>Whether you are moving from an apartment, an older home, or your
                                                brother’s basement, moving is stressful. We take that stress away by
                                                ensuring you’re completely satisfied and secure in your decision.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="row row-buttons">
                                <div class="col">
                                    <a href="<?=SITEURL?>/blog/" class="contact-us">
                                        <button class="btn btn-primary">
                                            CHECK OUT OUR BLOG
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php get_template_part('template-parts/footer','part'); ?>
    </div>


</div>

<?php get_footer();?>