<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <a class="navbar-brand d-lg-none" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                    alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>

            <h1>CAR <strong>HAIL</strong> DAMAGE <div><span>REPAIR</span></div>

                <div>IN EL PASO TX</div>
            </h1>

            <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">SCHEDULE
                    AN APPOINTMENT</button></a>
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
</div>
<section class="home-module-3">
    <div class="container">
        <div class="row">
            <div class="col text-center car-container">
                <div>
                    <h2>Did your car recently get<br />
                        riddled with <strong>hail?</strong></h2>
                    <h3>Call us and we will work with<br />
                        insurance to get it fixed right away.</h3>
                    <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0"
                            type="submit">CONTACT
                            US TODAY</button></a>
                </div>
            </div>
            <div class="col circle-container">
                <div class="circle">
                    <em></em>
                    <?php echo get_template_part('template-parts/svg', 'lifetime'); ?>
                    <div class="outer-circle">

                    </div>
                </div>
                <h3>What We Do</h3>

                <p>
                    We offer a <strong>life-time warranty</strong>, <strong>fast<br />
                        turnaround times</strong>, and in most</span> <span class="br-xs">instances,
                        there are <strong>no out of <span class="br-xs">pocket expenses</span></strong>.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="home-module-4">
    <img src="<?=IMGURL?>bg-wheel-mobile.jpg" class="d-lg-none" alt="">
    <div class="container">
        <div class="row">
            <div class="col arrow">

                <div class="bg-arrow">

                    <h2>Hail Damage?</h2>
                    <h3>Schedule A Repair
                        <span class="br-md">Today</span></h3>
                    <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary " type="submit">CONTACT
                            US TODAY</button></a>

                </div>
            </div>
            <div class="col col-lg-9">
                <div class="above-card">
                    <div class="extra-padding">
                        <h2>If you have non hail related dents and dings, call Derek today at: <a href="tel:9032856438">(903)
                                285-6438.</a>
                        </h2>
                        <h3>Hail damage may not seem like a worry to the everyday Sun City dweller,
                            but when storms hit, they hit hard.
                        </h3>
                        <p>Hard tends to be big and if your car isn’t covered by some garage or carport, it will more
                            than likely suffer hail damage. Those little dents may not seem like a big deal initially,
                            but you
                            are going to want to find the best in hail damage repair in El Paso, TX. Those little dents
                            can start to oxidize and will only be more expensive to repair in the long run.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-top">
                        <h2><span>C&D Dent Guys</span> offer superior hail damage repair in El Paso, TX at the best
                            prices around.</h2>
                    </div>

                    <div class="card-bottom">
                        <h3>If you have hail damage, <span class="br-xs">call Carlos today at:</span> <span class="br-xs"><a
                                    href="tel:9032856438">(903) 285-6438.</a></span>
                        </h3>

                        <p>
                            We have over 10 years of experience making sure your car isn’t bothered by hail damage
                            repair in El Paso TX. We are in the business of optimal dent repair so that your vehicle
                            looks just like new. If you are worried about the amount of time something like this can
                            take, don’t! If you give us a call, there is always a great chance you can come in and be
                            on your way that very same day. Hail damage repair in El Paso, TX, along with any other
                            types of repairs for your vehicle, shouldn’t put a “dent” in your wallet, which is why we
                            offer some of the most competitive prices in El Paso. When you want the best in hail damage
                            repair in El Paso TX, give us a call!
                        </p>

                        <p>ReviewsWe understand that there are many other reasons why your car might end up with a dent
                            or two. While we excel at hail damage, our team is also very experienced in other types of
                            dent repair, such as paintless dent repair in El Paso TX. This process is efficient, and
                            once it is done you would never know there was once a dent in your car. We are that good!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="home-module-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="extra-padding">
                        <h2>
                            Paintless Dent Repair <span class="br-xs">in El Paso TX</span>
                        </h2>
                        <p class="blurb">
                            Here at C&D Dent Guys understand the importance of a job well done. This makes us the place
                            in Texas for your restoration fix. We’re experts when it comes to in Texas and we stand
                            proudly by our work.
                        </p>

                        <p>
                            We’ve been in business over 10 years and total over 15 years of experience working in the
                            industry. We deliver the optimal dent repair results that you want in a short time to get
                            shouldn’t put a “dent” on your wallet. Here at C&D Dent Guys we deliver quality work at a
                            bargain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<?php get_footer(); ?>