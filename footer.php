<?php if (!is_page('contact')) : ?>
<div id="map-section"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.132146840534!2d-106.30354898484264!3d31.794148281279984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e74500581cb8f7%3A0xe77b3c77b31c5dbd!2s3500+George+Dieter+Dr+Ste.+K%2C+El+Paso%2C+TX+79936!5e0!3m2!1sen!2sus!4v1523657307707&callback=initMap" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<?php endif; ?>
<section id="footer">
    <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <a class="navbar-brand" href='<?php echo get_site_url() ?>'><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-lg.png"
                                alt="<?php echo get_bloginfo('description'); ?>"/></a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <span class="title">Contact</span>
                    <p>3500 George Dieter Ste. K<br />
                    El Paso TX 79936<br />
                    Ph. 915-590-23375<br />
                        Fax. 915-525-2491</p>
                </div>
                <div class="col-md-2 col-xs-12">
                    <span class="title">Hours</span>
                    <p>Armed Or Unarmed Night Patrol<br />
                    24/7 Security</p>
                </div>
                <div class="col-md-3 col-xs-12 hidden-xs text-right">
                    <span class="title">&nbsp;</span>
                    <a href="<?=SITEURL?>/contact/"><button class="btn btn-md btn-success">SCHEDULE YOUR CONSULTATION</button></a>
                </div>
            </div>
    </div>
    <div class="visible-xs"><?php $sm = new SocialMedia(array('facebook', 'twitter', 'googleplus'));
        $sm->setSize('sm');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?></div>
    <div class="footer-bottom hidden-xs">
        <div class="container text-center">
            <div class="footer-bottom-border">
            <?php echo non_responsive_bs_menu('primary'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="hidden-xs"><?php $sm = new SocialMedia(array('facebook', 'twitter', 'googleplus'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                <div>
                    &copy; <?php echo date('Y'); ?> Platinum Factotum Security | All Rights Reserved | Powered by AGI Marketing <a
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