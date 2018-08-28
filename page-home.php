<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="jumbotron">

                    <img src="<?= IMGURL ?>home-bg-sm.jpg" alt="Constructors, Inc." class="visible-xs" />


                    <div class="jumbo-content waypoint active text-center">
                        <div class="fade-down"><h1><span class="title">A Construction Company</span>
                                <span class="subtitle"> With a Tradition of Trust and Dependability</span></h1>
                        </div>
                        <a href="<?= SITEURL ?>/contact-us/" class="hidden-xs">
                            <button class="btn btn-lrg btn-primary btn-border">CONTACT US</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div> <!-- end home-bg -->
    <section class="icon-row">
        <div class="container">
            <ul class="flex-row">
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/commercial-site-development">
                        <?php get_template_part('template-parts/icon', 'spade'); ?>
                        Construction &
                        <br/>Site Development
                    </a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/construction-management/">
                        <?php get_template_part('template-parts/icon', 'cone'); ?>
                        Construction
                        <br/>Management</a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/paving/">
                        <?php get_template_part('template-parts/icon', 'paving'); ?>
                        Paving <br/>& Asphalt</a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/government-contracting/">
                        <?php get_template_part('template-parts/icon', 'gov'); ?>
                        Government<br/>
                        Contracting</a></li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/road-and-highway-construction/">
                        <?php get_template_part('template-parts/icon', 'highway'); ?>
                        Highway &<br/>
                        Road Construction</a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/utility-installation-construction/">
                        <?php get_template_part('template-parts/icon', 'utility'); ?>
                        Utility<br/>
                        Installation</a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/services/">
                        <?php get_template_part('template-parts/icon', 'landscaping'); ?>
                        Landscaping</a>
                </li>

                <li class="flex-col visible-xs contact-button">
                    <a href="<?= SITEURL; ?>/contact-us/">
                        Contact Us</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="home-module-1">
        <img src="<?= IMGURL ?>construction-man.jpg" alt="Construction Worker" class="visible-xs" />
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6">
                    <img src="<?= IMGURL ?>construction-worker.jpg" alt="Construction Worker" class="hidden-xs"/>
                </div>

                <div class="col-md-6 flex-col">

                    <div class="expander down-arrow" data-target="#expand">Constructors Inc.</div>
                    <h2>
                        <ul id="expand" class="expand">
                                <li>Constructor’s Inc is the best in the Southwest for any and all construction
                                    needs.
                                </li>
                                <li>Our top priority is to ensure that we get the job done in a safe and efficient
                                    manner.
                                </li>
                                <li>Our construction company is highly reviewed with well-established roots all across
                                    New Mexico and the Southwest.
                                </li>
                                <li>Constructors Inc. offers competitive quotes and guarantee quality.</li>
                                <li>We are your number one supplier of asphalt, dirt, sand, and gravel services.</li>
                                <li>Constructors, Inc has experience in a variety of commercial projects in the area.
                                </li>
                                <li>We handle major government projects and contracts.</li>

                        </ul>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ribbon">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= IMGURL ?>family-business.svg" alt="Family Business"/>
                </div>

                <div class="col-md-6">
                    <div class="extra-padding"><h2>Constructors Inc. is a family owned and operated business.</h2>

                    <p>We are a local regional construction company that has been in the family for three generations.</p>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="home-module-2">
        <div class="dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="extra-padding"><h3>Throughout our history we have instilled a strong value system in all of our employees.</h3>

                        <p>We believe in the powers of respect and work ethic. Since our inception in the 1950’s we have
                            grown vastly and expanded our expertise. The company began as a ditch digging business to a
                            full scale construction operation that does commercial and government work including
                            anything to do with concrete, asphalt, sand and gravel.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-3">
        <div class="container">
            <div class="row flex-row">
                <div class="col-sm-6 flex-col">
                    <div class="card">
                        <h2 class="card-title">
                            Government & Commercial
                        </h2>
<!--                        <img src="--><?//= IMGURL ?><!--government-contractor.jpg" alt="" class="hidden-xs">-->
<!---->
<!--                        <img src="--><?//= IMGURL ?><!--government-commercial.jpg" alt="" class="visible-xs">-->

                        <div class="card-img">

                        </div>
                        <div class="card-text"><h3>We are New Mexico’s leading contractor with bids on major <a href="<?= SITEURL ?>/services/government-contracting/">government</a> and <a href="<?= SITEURL ?>/services/commercial-site-development/
">commercial</a> projects.</h3>
                            <p>Our expertise ranges from all facets of commercial and industrial construction including site development, construction management, asphalt paving, utility installation, structural concrete and other construction services.</p>
                        </div>
                        <div class="card-bottom">
                            <a href="<?= SITEURL; ?>/commercial-site-development/">
                            <button class="btn btn-default">Learn More</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 flex-col">
                    <div class="card card-2">
                        <h2 class="card-title">Check out our Services
                        </h2>
<!--                        <img src="--><?//= IMGURL ?><!--services.jpg" alt="" class="hidden-xs">-->
<!--                        <img src="--><?//= IMGURL ?><!--services-sm.jpg" alt="" class="visible-xs">-->
                        <div class="card-img">

                        </div>
                        <div class="card-text"><h3>For a more in-depth look into our work, please see our list of <a href="<?=SITEURL ?>/services/">services</a>.</h3>
                            <p>Our team can handle small to large scale projects. For all your construction needs, we’ve got you covered! This includes utility installation, the pouring of concrete, site development, and asphalt products. We work through all the steps of the construction process with meticulous attention to detail and care.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <a href="<?= SITEURL; ?>/services/">
                            <button class="btn btn-default">Learn More</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-dark">
                    <img src="<?= IMGURL ?>badge.svg" width="163" alt="" />

                    <h2>Our Core Values</h2>

                    <p class="blurb">As a third generation company, our core values are composed of fundamental principles of family and trust.</p>

                    <p>We believe that our employees are our most valuable asset and strive to maintain a company that operates like a family in order to provide the best quality service. We value innovation, quality, and honest work ethic.  We strive to be employers choice because we treat people with respect and dedicate the same consideration and due diligence to every project.</p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section class="home-module-5">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-10 flex-col">
                    <p>As trusted and prolific contractors we have worked on projects like the</p>

                    <p class="blurb"><span>Kiowa Highway</span> <strong>62/180</strong> to a <span>Verizon</span> <strong>store location</strong>
                        in Carlsbad, New Mexico.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-6">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-12 flex-col">
                    <h2>Our Passion</h2>

                    <p class="blurb">Constructors, Inc. understands construction inside and out. We know every aspect of the industry. From getting the right materials to the pouring of concrete, setting foundations, and erecting a finished project. </p>

                    <p>We are highly flexible in the industry and handle everything from laying a standard driveway to a major construction project. Our team also handles expansive and modern commercial projects. We love what we do and are proud to help build in the Southwest’s flourishing community.</p>
                </div>
            </div>
        </div>
    </section>

<section class="home-module-7">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <h2>Our Areas of Service</h2>

                <p>New Mexico has been the home of Constructor’s, Inc since it began in the mid-twentieth century. We are located in Carlsbad, New Mexico, but proudly serve the entire Southwest with projects across the state and the region.</p>
            </div>
        </div>
        <div class="bg-dark"><div class="row">
            <div class="col-md-6 hidden-xs">

            </div>
            <div class="col-md-6">
                <h3>Contact Constructors, Inc Today</h3>
                <p class="blurb">We look forward to hearing from you! Please contact us with any questions or further inquiries about our services at <strong>575-885-8838</strong>.</p>
                <p>Our construction company is ready to serve your construction project needs, no matter the size or scope of your project.</p>
            </div>
        </div></div>
    </div>
</section>

<section class="home-module-8">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <img src="<?= IMGURL ?>phone.png" alt="" />
            </div>
            <div class="col-md-6">
                <?php get_template_part('template-parts/testimonial-slider'); ?>
            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>