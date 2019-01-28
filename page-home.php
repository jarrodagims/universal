<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h2>Home Builder</h2>
            <h1>BUILDING HOMES THAT
                LOOK ALMOST AS GOOD AS YOU!</h1>

            <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                <button class="btn btn-primary">
                    CONTACT US
                </button>
            </a>

            <a href="<?=SITEURL?>/contact-us/" class="learn-more">
                <button class="btn btn-primary btn-transparent">
                    Learn More
                </button>
            </a>
        </div>
    </div>
</section>

<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>WHERE FUN, COMFORT, AND
                    QUALITY COLLIDE TO BRING YOU
                    THE PERFECT HOME</h2>
                <h3>Well, you’ve certainly arrived at the right place and we’re so happy you did!
                </h3>
                <p>Zia Homes considers home building both a joy and a privilege. We incorporate a playful attitude to
                    make the process of buying a new home one that’s easy to follow and doesn’t feel stiff or
                    exhausting. Our homes are comfortable and built with the quality one should receive in a 21st
                    century home. And most
                    importantly, we keep you—the future dweller— at heart in everything we do.
                </p>
            </div>
            <div class="col">
                <img src="<?=IMGURL?>bg-interior.jpg" alt="Interior">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>