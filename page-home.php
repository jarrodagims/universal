<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="jumbotron">

                    <div class="jumbo-content waypoint text-center">
                        <div class="fade-down">
                            <h1>El Paso’s <strong>Women Owned</strong> Residential & Commercial <span class="br">Plumbing Supplier</span></h1>
                        </div>
                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-lrg btn-primary">CONTACT US TODAY</button>
                        </a>
                    </div> 
                </div>
            </div>
        </div>

    <section class="icon-row">
        <div class="container">
            <ul class="flex-row">
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/plumbing-fixtures/">
                        <?php get_template_part('template-parts/icon', '1'); ?>
                        <div class="title">Plumbing Fixtures</div>
                    </a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/water-heaters/">
                        <?php get_template_part('template-parts/icon', '2'); ?>
                        <div class="title">Water Heaters</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/piping-and-fittings/">
                        <?php get_template_part('template-parts/icon', '3'); ?>
                        <div class="title">Piping</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/toilets/">
                        <?php get_template_part('template-parts/icon', '4'); ?>
                        <div class="title">Toilets</div></a></li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/showers/">
                        <?php get_template_part('template-parts/icon', '5'); ?>
                        <div class="title">Showers</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/bathtubs/">
                        <?php get_template_part('template-parts/icon', '6'); ?>
                        <div class="title">Tubs</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/heating-and-cooling/">
                        <?php get_template_part('template-parts/icon', '7'); ?>
                        <div class="title">Heating & Cooling</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/power-tools/">
                        <?php get_template_part('template-parts/icon', '8'); ?>
                        <div class="title">Power Tools</div></a>
                </li>
                <li class="flex-col">
                    <a href="<?= SITEURL; ?>/products/adhesive/">
                        <?php get_template_part('template-parts/icon', '9'); ?>
                        <div class="title">Adhesives</div></a>
                </li>
            </ul>
        </div>
    </section>
    </section>
    </div> <!-- end home-bg -->

    <section class="home-module-1">

        <img src="<?= IMGURL ?>bg-wrench-small.jpg" alt="Plumbing Supply Store" class="visible-xs">

        <div class="bg-wrench">

            <div class="container"><div class="row flex-row">
                <div class="col-md-6">
                   <div class="extra-padding"> <div class="text-center"><h1>Plumbing Supply Store</h1>
                    <h2>Your One-Stop Shop for All Your <span class="br">Plumbing Supply Needs</span></h2>
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn btn-primary">
                            Get Started
                        </button>
                    </a></div></div>
                </div>
                <div class="col-md-6">

                </div>
            </div></div>
        </div>
        <div class="expander visible-xs visible-sm" data-target="#expand"><a href="#" class="arrow">El Paso’s best supplier</a></div>
        <div class="container home-right-sidebar">

            <div class="row flex-row">
                <div class="col-md-6">
                    <div class="extra-padding">

                    <h2 class="no-margin">
                        <ul>
                            <li class="hidden-xs hidden-sm">El Paso’s best supplier since 1972!</li>
                            <div class="expand" id="expand"><li>Top rated plumbing supplier, year after year</li>
                            <li>Highly reviewed customer service and assistance</li>
                            <li>Affordable supplies for residential and commercial needs</li>
                            <li>Local company ready to help the community thrive</li>
                            <li>Read our reviews and see what our happy customers have to say about us!</li>
                            <li>Contact us online and we’ll answer your questions quickly!</li></div>
                        </ul>
                    </h2>

                        <h2 class="larger">El Paso’s Go-To Residential and <span class="br-md">Commercial <span class="brand">Plumbing Supplier</span></span></h2>


                    <p class="blurb">Since 1972, C & L Plumbing Supply Co. Inc. has been El Paso’s go-to source for every residential and commercial plumbing supply need.</p>

                    <p class="light">We continuously provide our quality service at affordable prices along with expert knowledge and customer care. C & L Plumbing Supply Co. Inc. is proud to be a women-owned, Hispanic family business. Our team is committed to the reputation of excellence and professionalism we have acquired throughout our tenure. All in all, we strive to be your most reliable source for all your plumbing supply needs. It is this commitment to quality and customer service that has fueled C & L Plumbing Supply Co. Inc. for three generations. For friendly, knowledgeable advice and assistance, choose C & L Plumbing Supply Co. Inc.
                    </p>

                    </div>
                </div>

                <div class="col-md-6 flex-col">
                    <div class="box">
                        <h3>Plumbing Supply Store</h3>
                        
                        <a href="<?= SITEURL ?>/about-us/">
                            <button class="btn btn-primary"><i class="fas fa-check"></i> Residential</button>
                        </a>

                        <a href="<?= SITEURL ?>/about-us/">
                            <button class="btn btn-primary"><i class="fas fa-check"></i> Commercial</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="home-module-5">
    <img src="<?=IMGURL ?>bg-mid-banner-small.jpg" class="visible-xs" alt="Wrenches" />

    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="extra-padding"><h2>One Source for Every Commercial and Residential <span class="brand">Plumbing Supply Need</span></h2>
                <p class="blurb">Whether you’re a professional plumber who requires a reliable supplier or a homeowner who needs to replace a leaky faucet, C & L Plumbing Supply Co. Inc. can help.</p>
                <p>First and foremost, we are a plumbing supplier for El Paso and the surrounding areas. Since we offer everything you could ever require, your next plumbing project will proceed accordingly.
                </p></div>
            </div>
        </div>
    </div>
</section>

    <section class="home-module-2">
        <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 col-md-6  waypoint">
                    <div class="blue-box draw">
                        <div class="extra-padding"><h2>Plumbing Supplies, Fixtures <span class="brand">AND</span> Special Ordering Services</h2></div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="extra-padding"><p class="blurb">Our inventory is made up of anything from copper tubing, fittings, PVC pipe, power tools, and even water heaters. In addition to providing plumbing supplies to both homeowners and professional plumbers, we also stock plumbing fixtures to suit your needs.</p>

                    <p>
                        It’s easy to see why we’re El Paso’s one-stop shop for every plumbing supply needs. Even though our inventory is vast and varied, there are still instances in which we might not have the right part or fixture. If this occurs, don’t worry! With our special ordering services, you will have exactly what you need in no time. We even carry discontinued parts so you’ll never have to worry about finding the right piece to complete your project!

                    </p>

                    </div>
                </div>
            </div>
        </div>

    </section>


<section class="home-module-3">
    <div class="container">
        <div class="banner-bottom">
            <p>Check Out <span class="br-xs">Our Vendors</span></p>
                <a href="<?= SITEURL ?>/about-us/" class="button">
                    <button class="btn btn-primary">
                        Vendors
                    </button>
                </a>
        </div>
    </div>
</section>

<section class="home-module-6">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">

                <div class="bg-gray"><h2>Serving El Paso, Las Cruces, <span class="br">Juarez, and Beyond</span></h2><p class="blurb">As an El Paso-based plumbing supplier, <br /><span class="brand"><strong>C & L Plumbing Supply Co. Inc.</strong></span> has the ability to serve the Sun City as well as the surrounding areas.</p></div>

               <div class="bg-blue">
                   <div class="extra-padding"><p class="blurb">Our team is made up of bilingual, bicultural experts who can provide personal advice in order for you to achieve your plumbing goals.</p>

                <p class="small">When it comes to finding a great plumbing supplier, it’s much more than finding a shop that has the right materials. It’s necessary for the supplier to have the right knowledge to answer any questions and the appropriate skill to be trustworthy.  C & L Plumbing Supply Co. Inc. was built on a foundation of trust and customer care. Whether you’re an expert or a do-it-yourselfer, C & L Plumbing Supply Co. Inc. will gladly be your trusted plumbing supplier.</p></div>

               </div>
            
            </div>
            <div class="col-md-6 flex-col">
                <div class="bg-square">
                    
                </div>
            </div>
        </div>
    </div>




</section>

<section class="home-module-7">
    <img src="<?= IMGURL ?>bg-sink-small.jpg" alt="Sink" class="visible-xs visible-sm" />
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="extra-padding"><div class="text-center"><h2>We’re Ready to Be Your Plumbing Supplier!</h2>
                <p>When you make C & L Plumbing Supply Co. Inc. your go-to plumbing supply store, you’ll never have to worry when a plumbing disaster strikes. We will be here, ready to provide exactly what you need. Contact our team today to learn more about what we have to offer. Before long, your next plumbing project will be underway. Let C & L Plumbing Supply Co. Inc. help you achieve greatness!
                </p></div></div>
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