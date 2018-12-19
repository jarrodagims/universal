<?php get_header();

/*
    Template Name: Home
*/ ?>

<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <img src="<?=IMGURL?>logo-lg.png" class="navbar-brand" alt="<?php bloginfo( 'name' ); ?>" />

            <a href="<?=SITEURL?>/contact/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact
                    Us Today</button></a>
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
            <div class="col col-md-6">
                <h1>Bar <img src="<?=IMGURL?>and.svg" alt="And" height="50" /> Grill
                    <span>Where Good Times Happen and Memories are Made</span>
                </h1>

                <h2 data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                    <span>The best and biggest patio bar in the area!</span>
                </h2>

                <ul class="collapse" id="collapse">
                    <li>The best and biggest patio bar in the area!</li>
                    <li>We are the top restaurant bar in El Paso where you can catch football games and other major
                        sports.</li>
                    <li>Our bar & grill is highly-reviewed and talked about among local sports fans.</li>
                    <li>Looking for a local place to chill? Come to El Paso’s newest sports bar.</li>
                    <li>We are located on the east side of town.</li>
                    <li>Check out our new and improved food menu.</li>
                    <li>We value your reviews. Tell us what’s up!</li>
                    <li>We work hard to keep a top rating with our frequent guests.</li>
                    <li>If you’re a sports fan, this is the place to be!</li>
                    <li>Our quality restaurant menu truly sets us apart from other local bar & grills.</li>
                    <li>Our patio hosts a variety of live music, including musicians and DJ’s.</li>
                    <li>We are a local tavern with fine drinks and great people.</li>
                    <li>Don’t want to go home? Come hang out here — we’re open late!</li>
                    <li>We offer a quality food menu to satisfy any appetite.</li>
                </ul>


                <h3>Welcome to Crown and Eagle — Where Everyone is Treated Like Royalty</h3>

                <p>We have a saying around here: Wear Your Crown Like a King or Queen!
                    You work hard and you deserve to play hard and enjoy the things life has to offer. That’s where we
                    come in. We dig sports. We appreciate good food. And we love to laugh. We want to share that with
                    everyone that stops by. As a local sports bar & grill and patio bar, we like to give our customers
                    the opportunity to let loose, have a good time, meet
                    new people, enjoy the game, a good joke, great jams, or
                    engaging conversation.</p>
            </div>
            <div class="col col-md-5 offset-md-1">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col col-md-5">
                <h2>We’re Your Spot For a Great Time
                </h2>

                <p>
                    We provide El Paso with a place to relax and enjoy time with friends and family. Live life to the
                    fullest and enjoy an evening at Crown & Eagle sports bar. Our friendly staff and bartenders are
                    ready to serve you!
                </p>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</section>

<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="saloon-banner">
                    <div>
                        <div class="saloon-logo">
                            <img src="<?=IMGURL ?>/saloon-logo.png" alt="Crown & Eagle" />
                        </div>
                        <h2>happy hour specials and drink specials</h2>
                        <h3>11 a.m. to 7 p.m.</h3>
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

            </div>
        </div>
    </div>
</section>

<section class="home-module-7">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>We Offer Variety & Entertainment </h2>

                <p>The Crown & Eagle is a full bar and restaurant with a quality menu and food specials. Burgers.
                    Wings. Tacos. Tuna melts and sandwiches. That’s right. Come inside or chill in our patio bar. Plus,
                    there is always something happening around here. We don't’ sit idle. Walk in and find Poker
                    tournaments one night, comedy another, drink specials, a live band, drink specials, impromptu
                    dancing, one of our famous Raiders fan parties and did we mention drink specials?</p>
            </div>
        </div>
    </div>
</section>

<section class="home-module-8">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">

            </div>
            <div class="col col-md-5 offset-md-1">
                <h2>A Royally Good Time</h2>

                <p>
                    Many places call themselves sports bars because they mount a television on the wall and broadcast
                    the occasional game. At Crown & Eagle, we believe sports are a great way to bring people together—
                    whether it is the boxing match of the year, the Super Bowl, or the Playoffs. We make this part of
                    the atmosphere.
                </p>

                <p>
                    Come for the drink specials, stay for the band, leave with the dawn!
                </p>

            </div>
        </div>
    </div>
</section>

<section class="home-module-9">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <h2>Family Atmosphere</h2>

                <p>During the day Crown & Eagle bar has a lively family-friendly
                    atmosphere. Bring the family and enjoy our food specials and
                    spacious patio. El Paso has great weather. What better way to
                    enjoy it than with a good meal outdoors under the great desert sky.
                </p>

                <h2>Take out & Phone Orders</h2>
                <p>Don’t have time to dine in? We are now taking phone orders for pick up. Call us today, place your
                    order, and enjoy El Paso’s greatest food specials. </p>
            </div>
            <div class="col col-md-5 offset-md-1">
                <img src="<?=IMGURL?>drinks-food.jpg" alt="Food and Drinks" />
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>