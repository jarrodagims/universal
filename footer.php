<?php if(!is_front_page()) : ?>

<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <h2>
                        Contact Ay Caramba!
                    </h2>

                    <p class="h3">Come on over and try our delicious Mexican food.</p>

                    <p>Our taqueria serves the best tacos in all of El Paso. We have two convenient locations to serve
                        you. Visit us at 1926 Montana Ave or 8001 North Mesa. As always, we look forward to serving
                        you!</p>
                </div>
            </div>

            <div class="col map-column d-lg-block d-none">
                <div class="row">
                    <div class="col flex-grow-1">
                        <span>1926 Montana Ave 79903</span>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.8113943214803!2d-106.47493584861849!3d31.775629681193998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e759a4359e7057%3A0xd2970bc80607569e!2sAy+Caramba+Restaurant!5e0!3m2!1sen!2sus!4v1547652523092"
                            width="500%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
                <div class="row">
                    <div class="col flex-grow-1">
                        <span>8001 N Mesa St 79932</span>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217179.66146282374!2d-106.42510997104993!3d31.73140162504905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ddfeea2a3c7b5b%3A0x3561ba7217d78e59!2sAy+Caramba+Restaurant!5e0!3m2!1sen!2sus!4v1547652573725"
                            width="500%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row map-column d-lg-none">
        <div class="col">
            <span>1926 Montana Ave 79903</span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.8113943214803!2d-106.47493584861849!3d31.775629681193998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e759a4359e7057%3A0xd2970bc80607569e!2sAy+Caramba+Restaurant!5e0!3m2!1sen!2sus!4v1547652523092"
                width="500%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row map-column d-lg-none">
        <div class="col">
            <span>8001 N Mesa St 79932</span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217179.66146282374!2d-106.42510997104993!3d31.73140162504905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ddfeea2a3c7b5b%3A0x3561ba7217d78e59!2sAy+Caramba+Restaurant!5e0!3m2!1sen!2sus!4v1547652573725"
                width="500%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php endif; ?>

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
            <div class="col contact-footer">
                <div><span class="title">Contact Ay Caramba!</span>
                    <p>Come and pay us a visit! We have two convenient locations and can’t wait to show you around. We
                        want
                        to hear from you!</p>

                    <a href="<?=SITEURL?>/contact-us/" class="d-none d-md-block"><button class="btn btn-primary">Contact
                            Us</button></a>
                </div>
            </div>

            <div class="col location-footer">
                <div><span class="title locations">Locations</span>

                    <div class="footer-block">
                        <p class="plus">1926 Montana Ave 79903 | PH: 915.775.9828</p>

                        <div class="hours"><a href="<?=SITEURL?>/contact-us/" class="hours"><button class="btn-primary btn btn-outline">Hours</button></a>
                            <p>Sunday - Thursday: 7:00am - 9:00pm<br />Friday - Saturday: 7:00am - 10:00pm</p>
                        </div>
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