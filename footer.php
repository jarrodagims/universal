    <div id="map-section"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.2751584876796!2d-104.23985168482794!3d32.38498498109216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e3791d17083c67%3A0xc6bc1d4efff06c97!2sConstructors%2C+Inc.!5e0!3m2!1sen!2sus!4v1534792873987" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-2 logo-footer">
                    <a href='<?php echo get_site_url() ?>'><img
                    src="<?= IMGURL ?>logo.png"
                    alt="<?php echo get_bloginfo('description'); ?>"/></a>
                </div>
                <div class="col-xs-12 col-md-3 contact-footer">
                    <div><span class="title">CONTACT</span>
                    <p>3003 South Boyd Drive<br />
                        Carlsbad, New Mexico 88220
                    </p></div>

                </div>
                <div class="col-xs-12 col-md-2 contact-footer phone-footer">
                <div><span class="title hidden-xs">&nbsp;</span>
                    <p><span><strong>PH.</strong> (575) 885-8838</span><br />
                    <span><strong>FAX:</strong> (575) 887-0896</span></p>
                </div>
                </div>
                <div class="col-xs-12 col-md-3 hours-footer">
                    <div>
                        <span class="title">OFFICE HOURS</span>
                        <p>Monday - Friday: <strong>8:00am - 5:00pm</strong>
                            Saturday - Sunday: <strong>Closed</strong><br />
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 hours-footer">
                    <div><span class="title hidden-xs">&nbsp;</span>
                        <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">
                                Contact Us
                            </button></a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs visible-sm">
                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?>
                </div>
            </div>
    </div>
</section>
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-12 col-xs-12">
                <div class="hidden-xs hidden-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
<script>
    FB.api(
        "/352272228167257/ratings",
        function (response) {
            if (response && !response.error) {
                /* handle the result */
                console.log('test');
            } else {
                console.log('no');
            }
        }
    );
</script>
</body>
</html>