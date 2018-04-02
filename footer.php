<?php if (!is_home() && !is_front_page()) : ?>
    <?php if (is_active_sidebar('visitus_widgets')) : ?>
        <section id="visit-section" class="jumbotron">
            <div class="container">
                <div class="row"><?php dynamic_sidebar('visitus_widgets'); ?></div>
            </div>
        </section>
    <?php endif; ?>
    <section id="two-pane">
        <div class="container-fluid">
            <div class="row">
                <?php if (is_active_sidebar('shutter_widgets')) : ?>
                    <div class="col-md-6 col-xs-6"><?php dynamic_sidebar('shutter_widgets'); ?></div>
                <?php endif; ?>
                <?php if (is_active_sidebar('cabinet_widgets')) : ?>
                    <div class="col-md-6 col-xs-6"><?php dynamic_sidebar('cabinet_widgets'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (get_field('sliders-section')) { //if the field is not empty
    ?>
    <section id="sliders-section">
        <div class="container">
            <div class="row">
                <?php echo get_field('sliders-section') ?>
            </div>
        </div>
    </section>
<?php } ?>
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

<?php if (!is_front_page()) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php echo get_field('contact-form') ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <a class="navbar-brand" href='<?php echo get_site_url() ?>'><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
                                alt="<?php echo get_bloginfo('description'); ?>"/></a>
                </div>
                <div class="col-md-2 col-xs-12">
                    <span class="title">Contact</span>
                    <?php echo get_option('sherpa_business_address') ?><br/>
                    <?php echo get_option('sherpa_business_city') ?>
                    , <?php echo get_option('sherpa_business_state') ?>
                    <?php echo get_option('sherpa_business_zip') ?>
                    Ph. <?php echo get_option('sherpa_telephone_number') ?><br/>
                    F. (915) 975 - 8055
                </div>
                <div class="col-md-2 col-xs-12">
                    <span class="title">Criminal</span>
                    <?php wp_nav_menu( array( 'theme_location' => 'criminal-menu' ) ); ?>
                </div>
                <div class="col-md-2 col-xs-12">
                    <span class="title">Personal Injury</span>
                    <?php wp_nav_menu( array( 'theme_location' => 'personal-injury-menu' ) ); ?>
                </div>
                <div class="col-md-2 col-xs-12">
                    <span class="title">Hours</span>

                    <p>Monday thru Friday:<br/>
                        8:30am - 5:00pm<br/>
                        Saturday & Sunday:<br/>
                        Closed
                    </p>

                </div>
            </div>



        <div class="row visible-xs">
            <?php $sm = new SocialMedia(array('facebook', 'twitter'));
            $sm->setSize('sm');
            $sm->showNetworkButtons();
            $sm->setColorType('singleColor');

            ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="separate">
                <a href="<?=SITEURL?>/contact/"><button class="btn btn-md btn-success">SCHEDULE YOUR CONSULTATION</button></a>

                <?php echo non_responsive_bs_menu('primary'); ?>
            </div>
        </div>
    </div>

</section>
<section id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="hidden-xs"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');

                    ?></div>
                <div>
                    &copy; <?php echo date('Y'); ?> Joseph Law, PLLC | All Rights Reserved | Powered by AGI Marketing <a
                            href="https://www.agims.com/" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/agi-logo.png" alt="AGI Marketing"
                                class="agi-logo"/></a>
                </div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>