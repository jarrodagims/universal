<?php get_header();

/*
    Template Name: Landing
*/ ?>
    <section id="home-main">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <div class="jumbo-content visible-xs">
                        <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-xs.png"
                                alt="<?php echo get_bloginfo('description'); ?>" class="visible-xs block-center" />
                        <div class="<?=FULLWIDTH?> visible-xs">
                            <a href="#contact-form2"><button class="btn btn-lrg btn-primary">SCHEDULE YOUR CONSULTATION</button></a>
                        </div>
                    </div>
                    <div class="jumbo-content hidden-xs">
                        <div class="col-md-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/badge.png" alt="Badge"
                                 class="floating-badge"/>
                        </div>
                        <div class="col-md-6">
                            <div class="gradient-border">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
                                 alt="Platinum Factotum Security"/>
                            <h1>Platinum Factotum Security</span></h1>
                            <h2>Service</h2>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="<?= FULLWIDTH ?> visible-xs">
                            <a href="#contact-form2">
                                <button class="btn btn-lrg btn-primary">SCHEDULE YOUR APPOINTMENT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-form">
        <div class="container">
            <div class="row">
                <div class="<?= FULLWIDTH ?> hidden-xs">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
    </div> <!-- end home-bg -->
    <section id="main">

        <?php if (get_field('page_top')) : ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="<?= FULLWIDTH ?> page-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php the_field('page_top'); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php get_template_part('template-parts/content', 'landing'); ?>
                </div>
            </div>
        </div>
    </section>
<?php if(is_active_sidebar( 'form_widgets' )){ //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?=FULLWIDTH?>">
                    <?php dynamic_sidebar( 'form_widgets' ); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>