<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <div class="jumbo-content">
                        <h1><span class="light">Affordable & Reliable</span>
                            <span class="heavy">Medical Assistance</span>
                            <span class="medium">EL PASO, TX</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div> <!-- end home-bg -->


    <section class="icon-row">
        <div class="container">
            <div class="row flex-row">
                <div class="col-xs-6 col-md-4">
                    <a href="<?= SITEURL ?>/about-us/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'urgent'); ?>
                        <div class="title">Urgent Care Services</div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="<?= SITEURL ?>/gynecology-clinic-in-el-paso-tx/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'gynecological'); ?>
                        <div class="title">Gynecological Care
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="<?= SITEURL ?>/emergency-medical-services/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'emergency'); ?>
                        <div class="title">Emergency Medical Services
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="<?= SITEURL ?>/broken-bone-care-el-paso/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'broken-bone'); ?>
                        <div class="title">Broken Bone Care
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <div class="flex-row row">
                <div class="col-xs-6 col-md-6 col-sm-6 flex-col">
                    <h3><span>Now Performing <strong>DOT physicals!</strong></span>
                    </h3>
                </div>
                <div class="col-xs-6 col-md-6 col-sm-6 flex-col">
                    <p class="contactus">Contact Us Today</p>
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn">
                            CONTACT US
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="main">
        <div class="container-fluid">
            <div class="extra-padding">
                <div class="container">
                    <div class="row flex-row">
                        <div class="col-md-9 col-xs-12 padding-top">
                            <div class="left-home-sidebar">

                                <h2>Country Club Urgent Care Clinic <span>in El Paso, Texas</span></h2>

                                <h3>Welcome to Country Club Urgent Care! Our El Paso clinic offers affordable and
                                    reliable medical assistance.</h3>

                                <p>The team at Country Club Urgent Care is always ready to tend to your medical
                                    emergency needs. We understand the importance of proper and swift health care at an
                                    affordable cost. For this reason, we provide top-quality emergency medical services
                                    for patients of all ages.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1 col-xs-12 right-home-sidebar">
                            <div class="shadow">
                                <div class="box box-top">
                                    <span class="price">$25</span>
                                    <span class="bottom">FLU SHOTS</span>
                                </div>

                                <div class="box box-bottom">
                                    <span class="title">PRE REGISTER</span>
                                    <span class="subtitle">with us now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-back">
        <img src="<?php echo STYLEURL ?>/img/mobile-banner-mid.jpg" alt=""
             class="visible-xs visibile-sm"/>
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="col-md-6 col-xs-12">
                    <div class="diamond-bg">
                        <?php get_template_part('template-parts/icon', 'diamond'); ?>
                        <?php get_template_part('template-parts/icon', 'urgent-care'); ?>
                    </div>
                    <?php get_template_part('template-parts/icon', 'diamond-small'); ?>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="half-col">
                        <h2>Our staff of doctors and physician assistants are ready to assist you and your
                            family.</h2>

                        <p>We treat our patients with the care and respect they deserve. And most importantly, we
                            strive to see our clients as quickly as possible. No longer will you have to wait for
                            hours in an ER’s waiting room. You deserve medical assistance quickly and we offer
                            exactly that and much, much more!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ribbon">
        <div class="container">
            <div class="row flex-row">
                <div class="col-xs-12">
                    <h2><span>Services</span> You Can Depend On</h2>
                    <h3>Our list of services and specialties include:</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="services-bubbles">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-7 col-xs-12 icon-content">
                    <div><?php get_template_part('template-parts/icon', 'gynecological'); ?>

                        <h4>Gynecological Care</h4>

                        <p>Country Club Urgent Care is an urgent care clinic as well as a gynecology clinic. Our
                            gynecology
                            clinic offers all the necessary services for women to live life to the healthiest
                            degree.</p>

                        <a href="">
                            <button class="btn btn-success">LEARN MORE</button>
                        </a></div>
                </div>
                <div class="col-md-5 col-xs-12 flex-col circle-column">
                    <div class="circle-container"><img src="<?= IMGURL ?>circle-gcare.jpg" alt="Gynecological Care"
                                                       class="circle"/></div>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-md-5 col-xs-12 flex-col circle-column right">
                    <div class="circle-container right"><img src="<?= IMGURL ?>circle-emergency.jpg" alt="Emergency"
                                                             class="circle"/></div>
                </div>
                <div class="col-md-7 col-xs-12 icon-content right">
                    <div><?php get_template_part('template-parts/icon', 'emergency'); ?>

                        <h4>Emergency Medical Services.</h4>

                        <p>Country Club Urgent Care is an urgent care clinic as well as a gynecology clinic. Our
                            gynecology clinic offers all the necessary services for women to live life to the healthiest
                            degree.</p>

                        <a href="">
                            <button class="btn btn-success">LEARN MORE</button>
                        </a></div>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-md-7 col-xs-12 icon-content broken-bone">
                    <div><?php get_template_part('template-parts/icon', 'broken-bone'); ?>

                        <h4>Broken Bone Care</h4>

                        <p>Country Club Urgent Care is an urgent care clinic as well as a gynecology clinic. Our
                            gynecology clinic offers all the necessary services for women to live life to the healthiest
                            degree.</p>

                        <a href="">
                            <button class="btn btn-success">LEARN MORE</button>
                        </a></div>
                </div>
                <div class="col-md-5 col-xs-12 flex-col circle-column">
                    <div class="circle-container"><img src="<?= IMGURL ?>circle-broken.jpg" alt="Broken Bones"
                                                       class="circle"/></div>
                </div>
            </div>
        </div>
    </section>

    <section class="blue-banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="blurb">We'll be here to care for you and tend to any medical emergency you may be facing.
                        In addition,
                        we offer regular check-ups as well as gynecological exams.</p>

                    <p>Our main goal is to help El Pasoans be as healthy as possible. So come see us today, we're ready
                        to tend to
                        your needs!</p>
                </div>
            </div>
        </div>

    </section>

    <section id="diagonals">
        <div>
            <div class="container-fluid">
                <div class="row flex-row bg-dark-blue">
                    <div class="col-xs-12 col-md-6 flex-col">
                        <div class="half-col"><h2>When We Say "Urgent" Care, We Mean It!</h2>

                            <p class="blurb">Country Club Urgent Care specializes in comprehensive acute medical
                                services,
                                urgent care, emergency care, and non-hospital care.</p>

                            <p>Instead of waiting at the ER for hours, you can simply walk into our clinic. We have over
                                50
                                years of combined experience in emergency medical services. This amount of experience
                                translates to one very important thing: reliability.</p></div>
                    </div>

                    <div class="col-xs-12 col-md-6  dg-blue">

                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="container-fluid">
                <div class="row flex-row">
                    <div class="col-md-6  flex-col">

                        <div class="half-col">
                            <h3>When you're facing medical issues, all you want is to be treated as soon as
                                possible.</h3>

                            <p>Doing so can be difficult when you're wasting time in a waiting room. When you visit
                                Country Club Urgent Care, you won't have to wait for hours and hours. Instead, you'll be
                                seen by a friendly medical professional as quickly as possible. You will receive the
                                medical treatment you deserve in a prompt manner. Any questions you may have will be
                                answered with joy and candor. We do all this because we know how important it is for our
                                patients to get back to living their normal lives. Medical emergencies are enough of an
                                inconvenience. Country Club Urgent Care focuses on easing these inconveniences. With the
                                shortest wait times, complete care, and friendly assistance, you will be on the road
                                toward healthy living.</p>
                        </div>
                    </div>
                    <div class="col-md-6 dg-white"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="affordable-prices">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center"><h2>We Offer <span>Affordable Prices</span> For All Of Our Patients
                    </h2>
                    <p>The price of our services are as follows:</p>

                    <div class="cards container-fluid">
                        <div class="flex-row">
                            <div class="card">
                                <div class="card-price">$75</div>
                                <div class="card-bottom">Initial consultations</div>
                            </div>

                            <div class="card">
                                <div class="card-price">$50</div>
                                <div class="card-bottom"
                                ">Follow-up consultations<br/>
                                (after the first visit)
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-price">$30</div>
                            <div class="card-bottom"
                            ">X-rays
                        </div>
                    </div>
                </div>
            </div>

            <p class="bottom-text">All other prices will be based on your
                <span>MEDICARE FEE SCHEDULE</span></p>
        </div>


    </section>

    <section class="bg-back bg-blue">
        <img src="<?php echo STYLEURL ?>/img/mobile-banner-mid.jpg" alt=""
             class="visible-xs visibile-sm"/>
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="col-md-6 col-xs-12">
                    <div class="diamond-bg">
                        <?php get_template_part('template-parts/icon', 'diamondblue'); ?>
                        <?php get_template_part('template-parts/icon', 'shield'); ?>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 text-center">
                    <div class="half-col">

                        <?php get_template_part('template-parts/icon', 'shield-small'); ?>

                        <h2>We Accept<br/>
                            Most Insurance Plans</h2>

                        <p class="blurb">We are now in network with all multiplans. We also now accept Presbyterian
                            insurance and are pending El Paso First insurance.</p>

                        <p>We do not take Melina insurances and apologize for the inconvenience. Please connect with us
                            regarding additional insurance questions.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2><span>Country Club Urgent Care Clinic</span> is Here for El Paso and
                        Its Surrounding Cities</h2>

                    <p class="blurb">Our care and love for El Paso set us apart from other clinics. If you're tired of
                        waiting in the
                        emergency room to only be seen by a doctor who may or may not give you the attention and care
                        you deserve, choose Country Club Urgent Care in El Paso. We are located on the west side of town
                        on the intersections of N. Mesa St and Doniphan Dr. We welcome all ages as well as residents
                        from Las Cruces and surrounding cities. If you’re visiting from out of town, we can also accept
                        you as a patient. We're here for you whether you live in El Paso or are simply passing
                        through.</p>

                    <h2>Contact Us Today</h2>

                    <p>Please feel free to contact us with any questions or comments. We can be reached at (915)
                        307-3870. Our clinic is located at 8041 North Mesa, Suite B2, El Paso, TX 79932. When you need
                        medical emergency services, choose Country Club Urgent Care. We are a reliable walk-in clinic
                        that offers urgent care and medical assistance. You'll see just how easy it can be to receive
                        swift and complete medical assistance.</p>

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