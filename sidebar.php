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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.2751584876796!2d-104.23985168482794!3d32.38498498109216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e3791d17083c67%3A0xc6bc1d4efff06c97!2sConstructors%2C+Inc.!5e0!3m2!1sen!2sus!4v1534792873987" width="100%" height="100%" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="flex-col bg">
                <div class="container-half">
                    <div class="header">
                        <div class="h2">
                            <span class="title">A TRADITION OF</span>
                            <span class="subtitle">BUILDING & <br />CONSTRUCTION</span>
                        </div>
                    </div>

                    <section class="icon-row">
                        <ul class="flex-row">
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/commercial-site-development">
                                    <?php get_template_part('template-parts/icon', 'spade'); ?>
                                    Construction &
                                    <br/>Site Development
                                </a>
                            </li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/construction-management/">
                                    <?php get_template_part('template-parts/icon', 'cone'); ?>
                                    Construction
                                    <br/>Management</a>
                            </li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/paving/">
                                    <?php get_template_part('template-parts/icon', 'paving'); ?>
                                    Paving <br/>& Asphalt</a>
                            </li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/government-contracting/">
                                    <?php get_template_part('template-parts/icon', 'gov'); ?>
                                    Government<br/>
                                    Contracting</a></li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/road-and-highway-construction/">
                                    <?php get_template_part('template-parts/icon', 'highway'); ?>
                                    Highway &<br/>
                                    Road Construction</a>
                            </li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/utility-installation-construction/">
                                    <?php get_template_part('template-parts/icon', 'utility'); ?>
                                    Utility<br/>
                                    Installation</a>
                            </li>
                            <li class="flex-col">
                                <a href="<?= SITEURL; ?>/services/">
                                    <?php get_template_part('template-parts/icon', 'landscaping'); ?>
                                    Landscaping</a>
                            </li>

                            <li class="flex-col contact-button">
                                <a href="<?= SITEURL; ?>/contact-us/">
                                    Contact Us</a>
                            </li>
                        </ul>
                    </section>

                    <div class="contact-us">

                        <?php get_template_part('template-parts/testimonial-slider'); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
