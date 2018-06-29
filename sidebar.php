<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="31" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="222" title="Contact form 1"]');
            }
            ?>
        </div>
    <?php endif; ?>
    <section class="icon-row">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="col-xs-6">
                    <a href="<?= SITEURL ?>/about-us/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'urgent'); ?>
                        <div class="title">Urgent Care Services</div>
                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="<?= SITEURL ?>/gynecology-clinic-in-el-paso-tx/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'gynecological'); ?>
                        <div class="title">Gynecological Care
                        </div>
                    </a>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-xs-6">
                    <a href="<?= SITEURL ?>/emergency-medical-services/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'emergency'); ?>
                        <div class="title">Emergency Medical Services
                        </div>
                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="<?= SITEURL ?>/broken-bone-care-el-paso/" class="icon-button">
                        <?php get_template_part('template-parts/icon', 'broken-bone'); ?>
                        <div class="title">Broken Bone Care
                        </div>
                    </a>
                </div>
            </div>
            </div>
    </section>
    <?php if (!is_page('contact-us')) : ?>
    <section class="banner">
        <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 col-md-6 flex-col">
                    <h3><span>Now Performing <strong>DOT physicals!</strong></span>
                    </h3>
                </div>
                <div class="col-xs-12 col-md-6 flex-col">
                    Contact Us Today
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn">
                            CONTACT US
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <div class="right-home-sidebar">

        <div class="shadow">
            <div class="box box-top">
                <span class="price">$25</span>
                <span class="bottom">FLU SHOTS</span>
            </div>

            <div class="box box-bottom">
                <span class="title">PRE REGISTER</span>
                <span class="subtitle">with us now</span>
            </div>
        </div>
    </div>

</div>
