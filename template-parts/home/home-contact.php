<section class="home-module-6 waypoint">
    <div class="container">
        <div class="row top-contact">
            <div class="col col-lg-5 flex-col">
                <div class=""><div class="swish"><h2>
                        <div class="half-circle"><?php get_template_part('/template-parts/icons/icon', 'swish') ?></div>
                        Work With <strong>The <span class="brand">Best</span></strong>
                </h2>
                <p>
                    First <img src="<?= IMGURL ?>google.svg" alt="Google" class="google-logo" /> <strong>Partner Agency</strong> in El Paso
                </p></div></div>
            </div>
            <div class="col flex-col col-lg-7">
                <picture>
                    <source media="(min-width: 992px)" srcset="<?= IMGURL ?>badges-large.png">
                    <img src="<?= IMGURL ?>badges.png" alt="Badges" />
                </picture>
            </div>
        </div>
    </div>
    <ul class="google-colors hidden-xs">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container contact-bottom">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <h3>I'd Like to Learn More</h3>
                <?php echo do_shortcode('[contact-form-7 id="41" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</section>