<?php get_header();

/*
    Template Name: Home
*/ ?>
<div class="container ">
    <div class="row">
        <div class="col-xs-12 text-center">
            <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                        src="<?= IMGURL; ?>logo.svg"
                        alt="<?php echo get_bloginfo(
                            'description'
                        ); ?>"/></a>
        </div>
    </div>
</div>
</div> <!-- end home-bg -->
<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>
                QUALITY IRON MAID
                <span>High-Quality Ironing Services in El Paso</span>
            </h1>

            <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact Us</button></a>
        </div>
    </div>
</section>
<section class="home-module-2">
    <section class="icon-row">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php echo get_template_part('template-parts/icon', 'row'); ?>
                </div>
            </div>
        </div>
    </section>
</section>
<section class="home-module-3">
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Quality Iron Maid — High-Quality Ironing Services in El Paso</h2>

            <p class="blurb">Quality Iron Maid was established with one very simple goal in mind: to help individuals and companies alike with all their ironing needs.</p>

            <p>We are not a dry cleaner; we simply provide high-quality shirt ironing service. Our slogan is “you wash it, we iron it!” We understand how much of a hassle the act of ironing clothes can be. Instead of wasting that precious time ironing away throughout the day you can drop off your freshly laundered clothing at Quality Iron Maid and we’ll get to work on ironing everything out! Our services are more affordable then dry cleaning because we simply iron your clothing. There’s no need to pay extra when all you need is a good ironing. If you’re in the El Paso area and you’re ready to stop dealing with the hassle of ironing, contact
            </p>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-top">
                    you wash it, we iron it!
                </div>

                <div class="card-bottom">
                    <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact Us</button></a>
                </div>
            </div>

            <div class="card card-secondary">
                <div class="row">
                    <div class="col">Iron a piece of clothing in</div>
                    <div class="col"><img src="<?=IMGURL?>iron-time.svg" alt="15-20 minutes"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>How We Can Help — Our Services</h2>
                <p>Quality Iron Maid strives to provide the best shirt ironing service in the Southwest. Below, we’ve outlined our main services for your convenience:</p>
            </div>
        </div>
    </div>
</section>

<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col flex-col">
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <?php echo get_template_part('template-parts/icons/icon','1') ?>
                            <h3>Express Ironing </h3>
                            <p>Need a shirt or dress ironed as soon as possible?
                                Don’t worry, we’ll take care of it! In 15-20 minutes, your article of clothing will look good as new.</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <?php echo get_template_part('template-parts/icons/icon','2') ?>

                            <h3>Quality Ironing Services</h3>
                            <p>Bring us your clean clothes and we’ll iron it all for you!</p></div>
                    </div>
                </div>
            </div>
            <div class="col flex-col">
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <?php echo get_template_part('template-parts/icons/icon','1') ?>
                            <h3>Corporate Ironing Services</h3>
                            <p>Quality Iron Maid also offers corporate ironing services to local companies. We’ve worked with hotels, border patrol, and the Sun Metro in the past so we can take care of your ironing needs, no matter the size!</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <?php echo get_template_part('template-parts/icons/icon','3') ?>
                            <h3>Fast Turnaround</h3>
                            <p>Since we will iron freshly laundered clothing, the turnaround time on orders is usually very quick. Not only will you get your clothes back sooner than if you sent it to the dry cleaners, our service is much more affordable than
                            </p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <?php echo get_template_part('template-parts/icons/icon','4') ?>
                            <h3>Dry Cleaning Services Available</h3>
                            <p>We understand that sometimes dry cleaning services do become necessary. For this reason, we offer dry cleaning services through a partner. If you’re interested in dry cleaning, give our team a call!</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-module-6">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Military & Monthly Discounts</h2>
            </div>
            <div class="col">
                <h2>At Quality Iron Maid, we are completely devoted to our friends and neighbors.
                </h2>

                <p>For this reason, we offer military discounts as well as special monthly discounts. Simply give us a call to learn more about how you can save on our services!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ribbon">
    <h2>We’ll take care of your laundry and iron it to its very best</h2>
</section>

<section class="home-module-7">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Quality Iron Maid is Ready to Help!</h2>
                <p>Consider Quality Iron Maid your one-stop shop for all your ironing needs. Simply bring us your pre washed clothes and we’ll get to work! It’s as simple as that. Before long, you’ll be able to pick up your freshly ironed clothing and, best of all, you’ll be able to use that precious time to focus on what truly matters. Don’t let ironing your family’s clothing take time away from your day. Quality Iron Maid can take care of the ironing. Contact us today to learn more about what we have to offer!</p>
            </div>
            <div class="col">
                <img src="<?=IMGURL?>bg-shirts.jpg" alt="" />
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>