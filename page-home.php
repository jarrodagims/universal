<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>CAR <strong>HAIL</strong> DAMAGE <div><span>REPAIR</span></div>
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
<section class="home-module-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Did your car recently get
                    riddled with <strong>hail?</strong></h2>
                <h3>Call us and we will work with
                    insurance to get it fixed right away.</h3>
                <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0"
                        type="submit">CONTACT
                        US TODAY</button></a>
            </div>
            <div class="col circle-container">
                <div class="circle">
                    <em>i</em>
                    <?php echo get_template_part('template-parts/svg', 'lifetime'); ?>
                    <div class="outer-circle">

                    </div>
                </div>
                <h3>What We Do</h3>

                <p>
                    We offer a life-time warranty, fast
                    turnaround times, and in most instances,
                    there are no out of pocket expenses.
                </p>
            </div>
        </div>

    </div>
</section>
</div>



<?php get_footer(); ?>