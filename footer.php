<?php if(is_front_page()) : ?>
<section class="footer-top">
    <img src="<?=IMGURL?>bg-bottom.jpg" alt="">
</section>
<?php endif; ?>
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
                    <div class="col footer-nav d-none d-lg-flex">
                        <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
                    </div>
                    <div class="col footer-social d-none d-lg-block">
                        <div>
                            <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span class="title">Contact Ay Caramba!</span>
                <p>Come and pay us a visit! We have two convenient locations and can’t wait to show you around. We want
                    to hear from you!</p>

                <a href="<?=SITEURL?>/contact-us/" class="d-none d-md-block"><button class="btn btn-primary">Contact Us</button></a>
            </div>

            <div class="col">
                <span class="title locations">Locations</span>

                <div class="footer-block">
                    <p class="plus">1926 Montana Ave 79903 | PH: 915.775.9828</p>

                    <div class="hours"><a href="<?=SITEURL?>/contact-us/" class="hours"><button class="btn-primary btn btn-outline">Hours</button></a>
                        <p>Sunday - Thursday: 7:00am - 9:00pm<br />Friday - Saturday: 7:00am - 10:00pm</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <span class="title d-none d-md-block">&nbsp;</span>

                <div class="footer-block">
                    <p class="plus">8001 N Mesa St 79932 | PH: 915.581.5565</p>

                    <div class="hours"><a href="<?=SITEURL?>/contact-us/" class="hours"><button class="btn btn-primary btn-outline">Hours</button></a>
                        <p>Sunday - Thursday: 7:00am - 9:00pm<br />Friday - Saturday: 7:00am - 10:00pm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row button-footer d-md-none">
            <div class="col">
                <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">Contact Us</button></a>
            </div>

            <div class="col">
                <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="small">
                    Need Help? <a href="<?=SITEURL?>/contact-us/">Contact Us</a> &copy;
                    <?php echo date('Y'); ?>
                    <?= SITENAME ?> | All Rights Reserved
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