<div id="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13573.166109789012!2d-106.30427626683618!3d31.7352427007831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7437ed7c9de57%3A0x8cdcad40407564ef!2squality+iron+maid!5e0!3m2!1sen!2sus!4v1544221567195"
        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col logo-footer">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.svg" alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
                <p>If you’re looking for ironing clothes service in El Paso, Quality Iron Maid can help.</p>
            </div>
            <div class="col phone-footer">
                <div>
                    <span class="title">Address</span>
                    <p>
                        1475 George Dieter Dr<br />
                        Suite C<br />
                        El Paso, TX 79936<br />
                        PH. (915) 320-6795
                    </p>
                </div>
            </div>
            <div class="col address-footer">
                <div>
                    <span class="title">Office Hours</span>
                    <p>Monday - Friday:<br />
                        <strong>7:30am - 6:30pm</strong><br />
                        Saturday: <strong>8:00am - 2:30pm</strong><br />
                        Sunday: <strong>Closed</strong></p>
                </div>

            </div>
            <div class="button-footer">
                <div>
                    <a href="<?= SITEURL ?>/contact/">
                        <button class="btn btn-primary">
                            Contact us today
                        </button>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-xs-block d-sm-block">
                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('md');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
            </div>
        </div>
    </div>
</section>
<section class="footer-nav d-none d-md-block">
    <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-none d-md-block">
                    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('md');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                </div>
                <p class="small">Privacy Policy | Site Copyright &copy;
                    <?php echo date('Y'); ?>
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