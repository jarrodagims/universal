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
<div class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>
                QUALITY IRON MAID
                <span>High-Quality Ironing Services in El Paso</span>
            </h1>

            <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact Us</button></a>
        </div>
    </div>
</div>

<div class="home-module-2">

</div>
<div class="home-module-3">

</div>

<?php get_footer(); ?>