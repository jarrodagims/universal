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
            <div class="col">
                <h1>Bar <img src="<?=IMGURL?>and.svg" alt="And" height="50" /> Grill
                    <span>Where Good Times Happen and Memories are Made</span>
                </h1>

                <p>The best and biggest patio bar in the area!</p>

                <h2>Who is Crown & Eagle?</h2>

                <p>We have a saying around here: Wear Your Crown Like a King or Queen!
                    You work hard and you deserve to play hard and enjoy the things life has to offer. That’s where we
                    come in. We dig sports. We appreciate good food. And we love to laugh. We want to share that with
                    everyone that stops by. As a local sports bar & grill and patio bar, we like to give our customers
                    the opportunity to let loose, have a good time, meet
                    new people, enjoy the game, a good joke, great jams, or
                    engaging conversation.</p>
            </div>
            <div class="col col-md-5">

                <div class="sidebar">
                    <div class="sidebar-top">
                        <img src="<?=IMGURL?>our-grill.svg" alt="Our Grill" />
                    </div>
                    <div class="sidebar-bottom">
                        <img src="<?=IMGURL?>uber-eats-logo.png" alt="Uber Eats" />

                        <a href=""><img src="<?=IMGURL?>uber-eats-btn.svg" alt="Uber Eats" height="20" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>