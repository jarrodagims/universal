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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.379827668776!2d-106.4405365!3d31.7747144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x49392db52261b69e!2sC%26L+Plumbing+Supply+Co+Inc!5e0!3m2!1sen!2sus!4v1537292962999" width="100%" height="100%" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
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
