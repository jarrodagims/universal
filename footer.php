<?php if (!is_page('contact')) : ?>
<div id="map-section">
    <a href="https://goo.gl/maps/uiBDtiMkwiT2" target="_blank">
        <button class="btn btn-lrg btn-primary">GET DIRECTIONS</button>
    </a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6778.87574133545!2d-106.578747!3d31.840298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedae839ec7587df4!2sCountry+Club+Urgent+Care+Center!5e0!3m2!1sen!2sus!4v1530026669558" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php endif; ?>
<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 logo-footer">
                    <a class="navbar-brand" href='<?php echo get_site_url() ?>'><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"
                                alt="<?php echo get_bloginfo('description'); ?>"/></a>
                </div>
                <div class="col-md-2 col-xs-12 contact-footer">
                    <span class="title">Contact</span>
                        <p>8041 North Mesa, Suite B2<br />
                            El Paso, TX 79932<br />
                            <span>PH.</span>  (915) 307-3870<br />
                            <span>FAX.</span> (915) 581-2926<br/>
                        </p>
                </div>
                <div class="col-md-2 col-xs-12 hours-footer">
                    <div><span class="title">Hours</span>
                    <p>Monday-Friday : 7:00 AM - 10:00 PM<br />
                        Saturday: 9:00 AM - 9:00 PM<br />
                        Sunday: 9:00 AM - 10:00 PM<br />
                        <span>Last Patient Will be Seen 30 Minutes Before Close</span>
                    </p>
                    </div>

                </div>

                <div class="col-md-4"><span class="title hidden-xs">&nbsp;</span>
                    <a href="<?php echo get_page_link(27); ?>" class="hidden-xs"><button class="btn btn-md btn-success">SCHEDULE AN APPOINTMENT</button></a>

                    <div class="visible-xs">
                        <?php if(is_front_page()) : ?>
                            <a href="<?php echo get_page_link(27); ?>"><button class="btn btn-md btn-success">SCHEDULE AN APPOINTMENT</button></a>
                        <?php else : ?>
                            <a href="<?php echo get_page_link(27); ?>"><button class="btn btn-md btn-success">SCHEDULE AN APPOINTMENT</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </div>
    <div class="visible-xs"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
        $sm->setSize('sm');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?></div>
</section>
<section class="footer-nav hidden-xs">
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
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="hidden-xs"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                    <div>
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved | Powered by AGI Marketing <a href="https://www.agims.com/" target="_blank"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/agi-logo.png" alt="AGI Marketing"
                                class="agi-logo"/></a>
                </div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>