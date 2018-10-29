<?php get_header();

/*
    Template Name: Home
*/ ?>


<section id="home-main">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-12 flex-col">
                <div class="jumbotron">

                    <div class="jumbo-content waypoint">
                        <div>
                            <h1><span class="brand">BIG</span> OPPORTUNITIES.
                            <span class="br-md">Local Businesses. Creative Solutions.</span></h1>

                            <p><strong>More Customers</strong> & <strong>Increased Phone Calls</strong>, Leads, Website & Foot Traffic</p>

                            <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">Start Getting More Customers Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div> <!-- end home-bg -->

<section class="home-module-1">
    <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
</section>

<?php get_template_part('template-parts/home', 'slideshow'); ?>

<?php get_template_part('template-parts/home', 'boxes'); ?>

<?php get_template_part('template-parts/home', 'ribbon'); ?>

<?php get_template_part('template-parts/home', 'website'); ?>

<?php get_template_part('template-parts/home', 'contact'); ?>

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