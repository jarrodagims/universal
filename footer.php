<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>

<div class="contact-ribbon">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p>
                    Contact Us Today. Come by and visit us at the print shop! If you have questions about any of our
                    services or how
                    we can help your business please give us a call 915-591-8943. We look forward to serving you.</p>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="row">
                        <div class="col">
                            <a class="navbar-brand d-lg-block" href='<?php echo get_site_url(); ?>'><img
                                    src="<?=IMGURL;?>logo-dark.svg" alt="<?php echo get_bloginfo(
        'description'
    ); ?>" /></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="extra-padding">
                                <span class="h2">Contact Us Today</span>

                                <div id="contact-form">
                                    <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
} else {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
}
?>
                                </div>


                            </div>
                        </div>
                        <div class="col col-get-in-touch">
                            <div class="extra-padding">
                                <span class="h2">
                                    Get In Touch
                                </span>

                                <p>
                                    <span class="sub-title">UNIVERSAL GRAPHICS, INC.</span><br />
                                    1217 Barranca Dr STE. B<br />
                                    El Paso, TX 79935
                                </p>

                                <p>
                                    <span class="sub-title">TELEPHONE:</span><br />
                                    Office: (915) 591-8943<br />
                                </p>

                                <div class="d-none d-lg-inline-block"><a
                                        href="https://www.instagram.com/universalgraphicsinc/" class="instagram-button"
                                        target="_blank"><img src=" <?=IMGURL?>instagram.svg" alt="Instagram"
                                            width="109"> #getprinted#ELPaso</a></div>

                            </div>
                        </div>

                        <div class="col col-hours">
                            <div class="extra-padding">
                                <span class="h2 d-none d-lg-block">
                                    &nbsp;
                                </span>
                                <span class="sub-title">HOURS</span>
                                <p>
                                    Monday - Friday: 8 a.m. - 5 p.m.<br />
                                    Saturday - Sunday: Closed
                                </p>

                                <p>Come pay us a visit at the shop! We look forward to helping your business thrive.
                                    Visit
                                    us at 1217
                                    Barranca Dr. Suite B, El Paso, Texas. For any questions or inquiries about our
                                    services,
                                    give us a
                                    call at <a href="tel:9155918943">915-591-8943</a>.
                                </p>

                                <p class="d-lg-none">
                                    <a href="https://www.instagram.com/universalgraphicsinc/" class="instagram-button"
                                        target="_blank"><img src="<?=IMGURL?>instagram.svg" alt="Instagram" width="109">
                                        #getprinted#ELPaso</a>
                                </p>

                                <ul class="list-inline social-media sm">
                                    <li><a href="https://www.facebook.com/UniversalGraphicsInc/"
                                            class="facebook-button social-media-button sm square lighten external"
                                            target="_blank"><i
                                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a></li>
                                    <li><a href="https://twitter.com/gil_the_printer"
                                            class="twitter-button social-media-button sm square lighten external"
                                            target="_blank"><i
                                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a></li>
                                    <li><a href="https://www.instagram.com/universalgraphicsinc/"
                                            class="instagram-button social-media-button sm square lighten external"
                                            target="_blank"><i
                                                class="fab fa-instagram fa-fw "><span>Instagram</span></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13570.483918257733!2d-106.33197!3d31.753545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73ca5ba5dcecac8b!2sUniversal+Graphics%2C+Inc.!5e0!3m2!1sen!2sus!4v1557156025068!5m2!1sen!2sus"
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved
</div>
</div> <!-- end content container -->
</div> <!-- end sidebar container -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-5ozVWQaaSdI_RbSAiSz4A2p509v1IrY&callback=initMap" async
    defer>
</script>
</body>

</html>