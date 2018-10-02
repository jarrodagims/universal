<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            }
            ?>
        </div>
        <section>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="flex-col bg">
                <div class="container-half">
                    <div class="header">
                        What We Can Do
                        <br />For You
                    </div>
                    <section class="icon-row">
                            <ul class="flex-row">
                                <?php get_template_part('template-parts/icon', 'row'); ?>
                            </ul>
                    </section>
                </div>
            </div>
        </section>

        <section>
            <div class="box">
                <h2>Give us a call today <br />
                    to learn more about the <br />
                    services we oﬀer.</h2>

                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-default">CONTACT US</button>
                </a>
                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">
                        FREE ESTIMATES
                    </button>
                </a>
            </div>
        </section>


    <?php endif; ?>
</div>
