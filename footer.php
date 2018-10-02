    <div id="map-section">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.9448319500366!2d-106.39330688484316!3d31.77199058128705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75b070322b1e1%3A0x52dc11769adb6dc2!2sMagic+Stone+Granite+LLC.!5e0!3m2!1sen!2sus!4v1538489423240" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
    <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 flex-col">
                    <div class="logo-footer">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                    src="<?= IMGURL; ?>logo.svg"
                                    alt="<?php echo get_bloginfo(
                                        'description'
                                    ); ?>"/></a>
                    </div>
                    <div class="footer-blocks"><div class="contact-footer phone-footer">
                        <div><span class="title">Address</span>
                            <p>6821 Market Ave.<br />
                                El Paso, TX 79915<br />
                                <strong>PH</strong>.  <?php printPhone(); ?>
                            </p></div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">Office Hours</span>
                            <p>Monday - Friday: <strong>8:00am - 5:00pm</strong><br />
                                Saturday: <strong>8:00am - 3:00pm</strong><br />
                                Sunday: <strong>Closed</strong>
                            </p>
                        </div>
                    </div>
                    <div class="bbb-footer">
                        <div>
                            <a href="https://www.bbb.org/us/tx/el-paso/profile/countertops/magic-stone-granite-0895-99126451" target="_blank"><img
                                src="<?= IMGURL; ?>bbb.png"
                                alt="<?php echo get_bloginfo(
                                    'description'
                                ); ?>"/></a>
                        </div>
                    </div>
                    <div class="button-footer">
                        <div>
                            <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-default">
                                    Contact Us
                                </button></a>

                            <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">
                                    Free Estimates
                                </button></a>
                        </div>
                    </div></div>
                    <div class="visible-xs">
                        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                    </div>
                </div>
            </div>
    </div>
</section>
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row flex-row">
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
</body>
</html>