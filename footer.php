    <div id="map-section">
        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                    src="<?= IMGURL; ?>logo.svg"
                    alt="<?php echo get_bloginfo(
                        'description'
                    ); ?>"/></a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13569.516059065321!2d-106.485912!3d31.760147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e5af6d082121241!2sJonathan+Leach%2C+LLC!5e0!3m2!1sen!2sus!4v1536269783990" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 logo-footer">
                    <h2>Contact Jonathan Leach, LLC Today</h2>

                    <p>Whether or not a lawsuit is pending, you are invited to contact Jonathan Leach, LLC, for a free consultation regarding the nonlegal factors that may affect your case. Mr. Leach addresses every matter with attention to the particulars of each client's situation. Call now for a free consultation.
                    </p>
                </div>
                <div class="col-xs-12 col-md-2 contact-footer phone-footer">
                    <div><span class="title">CONTACT</span>
                        <p>528 Satellite Dr.<br />
                            El Paso, TX 79912<br />
                            <strong>PH</strong>. 972.890.8482
                        </p></div>
                </div>
                <div class="col-xs-12 col-md-2 hours-footer">
                    <div>
                        <span class="title">HOURS</span>
                        <p>Monday - Friday: <strong>8:30am - 6:00pm</strong>
                            Saturday - Sunday: <strong>Closed</strong><br />
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 hours-footer">
                    <div><span class="title hidden-xs">&nbsp;</span>
                        <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">
                                Schedule an Appointment
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
        <div class="row flex-row">
            <div class="col-xs-6">
                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
            <div class="col-xs-6">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-12 col-xs-12">
                <div class="hidden-xs hidden-sm"></div>
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>