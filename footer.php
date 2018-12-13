<div id="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27142.53913410327!2d-106.31983605273021!3d31.748184996926778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e744943a05e675%3A0x2141452b410c938!2sCrown+and+Eagle+Bar+%26+Grill!5e0!3m2!1sen!2sus!4v1544733236184"
        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col logo-footer">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png" alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
            </div>
            <div class="col">
                <p>Hit us up on the east side of town! El Paso’s best patio bar.
                    Crown and Eagle bar and grill at our convenient location.</p>
            </div>
            <div class="col phone-footer">
                <div>
                    <span class="title">Address</span>
                    <p>1731 Lee Trevino<br />
                        El Paso, Texas 79936<br />
                        <strong>Call Us Today!</strong><br />
                        <?php printPhone(); ?>
                    </p>
                </div>
            </div>
            <div class="col address-footer">
                <div>
                    <span class="title">OFFICE HOURS</span>
                    <p>Monday - Sunday:<br />
                        11:00am - 2:00am</p>

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
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?> Crown And Eagle Bar And Grill | All Rights Reserved
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