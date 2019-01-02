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
                            <p><strong>Hail Repair:</strong> Call Carlos: <strong><a href="tel:9032856438">(903)
                                        285-6438</a></strong>
                                <strong>Non-Hail Dent Repair:</strong> Call Derek: <strong><a href="tel:9152564050">(915)
                                        256-4050</a></strong>
                                <strong>Authority Automotive:</strong> Call Rick Stumvoll: <strong><a href="tel:214 7665127">(214)
                                        766-5127</a></strong>
                                <strong>Master Shine:</strong> Call Carlos Ropez: <strong><a href="tel:4699510745">(469)
                                        951-0745</a></strong></p>
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