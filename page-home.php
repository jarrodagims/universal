<?php get_header();

/*
    Template Name: Home
*/ ?>
    </div> <!-- end home-bg -->

    <section id="home-main">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 flex-col">
                    <ul class="hidden-xs nav navbar-nav navbar-right">
                        <li class="menu-item directions"><a
                                    href="<?php echo get_site_url() ?>/contact-us"></a></a></li>
                        <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"></a></li>
                    </ul>
                    <div class="jumbotron">

                        <div class="jumbo-content waypoint">
                            <div><div class="fade-down">
                                <h1>Home Health Care<br />
                                    Service with Compassion<br />
                                    and Excellence</h1>
                            </div>

                            <a href="<?= SITEURL ?>/contact-us/" >
                                <button class="btn btn-lrg">CONTACT US TODAY</button>
                            </a></div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 flex-col">
                        <a class="btn-arrow right" href="<?= SITEURL ?>/contact-us/"></a>
                    </div>
            </div>
        </div>
    </section>
    <img src="<?=IMGURL ?>home-sm.jpg" class="visible-xs visible-sm stretch-img" alt="Home Health Care Service" />

<section class="home-module-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="expander" data-target="#expand"><span>Home Health Agency</span></h2>
                <div class-="extra-padding"><ul class="expand" id="expand">
                    <li>The best patient-centered agency in El Paso, TX.</li>
                    <li>Top performing therapists and home health aides.</li>
                    <li>Highly reviewed for at home care.</li>
                    <li>We service the local geriatric community in the Southwest.</li>
                    <li>Our elderly deserve exceptional in home care.</li>
                    <li>Caring for the senior population is an important matter we support.</li>
                    <li>We appreciate customer feedback through reviews.</li>
                    <li>As a patient, you have many agencies to choose from — it’s your right.</li>
                    <li>Our customer ratings allow us to reflect on how we can consistently improve our services.</li>
                </ul></div>

            </div>
            <div class="col-md-6">

                <ul class="icon-list">
                    <?php get_template_part('template-parts/icon', 'row'); ?>
                </ul>
                
            </div>
        </div>
    </div>
</section>

<section class="home-module-2">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 flex-col">
                    <a class="btn-arrow left" href="<?= SITEURL ?>/contact-us/"></a>
                </div>
                <div class="col-md-6 flex-col">

                    <div class="bg-blue"><h2>Good People<br /> Doing Good Things</h2>


                    <p><strong>El Paso Community Home Health</strong> exists to be a trusted and reliable home health care provider for residents following an operational procedure or hospital discharge.</p>
                    <p class="no-margin small">Our team consists of only the most caring and trustworthy providers. This includes our team of nurses, physical therapists, occupational therapists, speech pathologists, and home health aides. With a mission to do what’s best for our patients, our goals align with those of your doctors. We help ensure that you remain on track to improve your health.
                    </p></div>
                </div>
            </div>
        </div>
    <img src="<?=IMGURL ?>old-woman-stretching.jpg" class="visible-xs visible-sm" alt="" />

</section>

<section class="home-module-3">

    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding"><h2>We Provide at Home Care <br />Focused on Patient Needs
                </h2>
                    <p>Our team is proud to serve the El Paso <span class="br-xs">community <span class="br-md">with the following in <span class="br-xs"><a href="<?= SITEURL ?>/geriatric-home-health-aide/">home services</a>:</span></span></p></div>
            </div>
            <div class="col-md-6 flex-col">
                <img src="<?= IMGURL ?>phone-sm.png" alt="" class="visible-sm visible-xs" />
            </div>
        </div>
    </div>
</section>

<section class="home-module-4">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center">
                <div class="extra-padding"><h2>The ‘El Paso Community Home Health Commitment’ — Values You Should Expect From a Home Health Agency</h2></div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12  col-md-6">

                <div class="extra-padding"><p class="blurb"><strong>Selecting a home health care agency in El Paso can be a difficult decision.</strong><br /><br />Our goal is to be your obvious choice based on our agency’s transparency, excellence, and patient-centered approach. At El Paso Community Home Health, our entire team is committed to providing you with unmatched in home care.</p></div>

            </div>

            <div class="col-xs-12  col-md-6">
                <div class="extra-padding"><p>The values of our agency are a reflection of the importance we place on patient care. <span class="brand br-xs">We consistently uphold the following values</span>:</p>

                <ul>
                    <li>You will be treated with respect and compassion.</li>
                    <li>Our skilled providers will communicate with your medical team to ensure you are on a path to
                        improve your overall wellness.
                    </li>
                    <li>Each member of our team is responsible for your continued success while you are under our
                        care.
                    </li>
                </ul></div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img src="<?= IMGURL ?>bg-banner.jpg" alt="" class="banner hidden-xs hidden-sm" />
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>nurse-senior-woman.jpg" class="visible-xs visible-sm" alt="">
</section>

<section class="home-module-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="extra-padding"><h2>We’re Here For You When You Need Us Most</h2>

                <p>You’re not alone. When you need care and support the most, El Paso Community Home Health is here for you. No matter your injury, illness, or chronic condition, we will provide you with customized care with the goal of improving your independence and recovery. Our objective is to support your needs as best as possible.
                </p></div>

                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">
                        CONTACT US TODAY
                    </button>
                </a>


            </div>
        </div>
    </div>
    <a class="btn-arrow down" href="<?= SITEURL ?>/contact-us/"></a>

</section>

<section class="home-module-6">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-6">
                <div class="extra-padding">
                    <div><h2>Our Office is Conveniently<br /> Located in Central El Paso</h2>

                <p>Prior to leaving the hospital or following the need for quality home health care, please give our team a call. We will make arrangements to assist you within 24 hours. For more information, please consult with one of our dedicated care specialists today. We’re happy to assist you.</p></div>

                <div class="v-align-bottom"><h2>Contact Us Today to Receive<br /> Care Tomorrow</h2>

                    <p>If you would like to meet with us, we would be happy to schedule an appointment at our office, which is located at <span class="brand br-xs">6070 Gateway Blvd E #312, El Paso, TX 79905</span>.</p></div>
</div>

            </div>
            <div class="flex-col col-md-6">
                <div class="extra-padding"><img src="<?=IMGURL?>bg-contact.jpg" class="hidden-xs hidden-sm" alt=""></div>
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>old-man-smiling.jpg" class="visible-xs visible-sm" alt="">
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