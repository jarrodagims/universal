<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">

                <div class="row align-items-center">

                    <div class="col logo-footer">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
                    </div>
                    <div class="col">
                        <p>Please feel free to contact us.
                            You can either call our toll-free number or check below to see if there is an office close
                            to your area.

                    </div>
                    <div class="col phone-footer">
                        <div>
                            <span class="title">Contact</span>
                            <p>Hail Repair: Call Carlos: (903) 285-6438
                                Non-Hail Dent Repair: Call Derek: (915) 256-4050
                                Authority Automotive: Call Rick Stumvoll: (214) 766-5127
                                Master Shine: Call Carlos Ropez: (469) 951-0745</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="d-md-none d-xs-block d-sm-block">
                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
            </div> -->
        </div>

        <div class="row flex-row">
            <div class="col d-lg-block d-none">
                <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
            </div>
            <div class="col col-lg-2"><a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">
                        Contact us today
                    </button></a>
            </div>
        </div>
    </div>
</section>
<section class="footer-nav d-none d-md-flex">
    <div class="container">

    </div>

</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-none d-md-block">
                    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                </div>
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?> C&D Dent Guys | All Rights Reserved
                </p>

            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</body>

</html>