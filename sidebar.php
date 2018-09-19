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
                    <section class="icon-row">
                            <ul class="flex-row">
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/mock-trials/">
                                        <?php get_template_part('template-parts/icon', '1'); ?>
                                        Mock Trials
                                    </a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/focus-groups/">
                                        <?php get_template_part('template-parts/icon', '2'); ?>
                                        Focus Groups</a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/jury-selection/">
                                        <?php get_template_part('template-parts/icon', '3'); ?>
                                        Jury Selection</a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/post-verdict-research/">
                                        <?php get_template_part('template-parts/icon', '4'); ?>
                                        Post Verdict <br />Research</a></li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/attitude-surveys/">
                                        <?php get_template_part('template-parts/icon', '5'); ?>
                                        Attitude Surveys</a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/witness-preparation-and-training/">
                                        <?php get_template_part('template-parts/icon', '6'); ?>
                                        Witness Preparation</a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/shadow-jury/">
                                        <?php get_template_part('template-parts/icon', '7'); ?>
                                        Shadow Jury</a>
                                </li>
                                <li class="flex-col">
                                    <a href="<?= SITEURL; ?>/services/trial-graphics/">
                                        <?php get_template_part('template-parts/icon', '8'); ?>
                                        Trial Graphics</a>
                                </li>
                            </ul>
                    </section>

                </div>
            </div>
        </section>

    <section>
        <div class="card">
            <div class="card-title">Our Client Comments</div>

            <div class="card-bottom transparent">
                <?php get_template_part('template-parts/testimonial-slider'); ?>
                <a href="<?= SITEURL; ?>/testimonials/">
                    <button class="btn btn-default">
                        Testimonials
                    </button>
                </a>
                <a href="<?= SITEURL; ?>/contact-us/">
                    <button class="btn btn-primary">
                        Schedule an Appointment
                    </button>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>
