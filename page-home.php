<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>CAR HAIL DAMAGE
                <span>REPAIR</span></h1>

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

<?php get_footer(); ?>