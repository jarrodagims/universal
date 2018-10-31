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
                    <img src="<?= IMGURL ?>sidebar-top.jpg" alt="" />
                    <div class="header">
                        <span>Home Health Agency</span>
                    </div>
                    <section class="home-module-1">
                            <ul class="icon-list">
                                <?php get_template_part('/template-parts/icons/icon', 'row'); ?>
                            </ul>
                    </section>
            </div>
        </section>

        <section>
            <div class="box">
                <h2>We’re Here For You When You<br />
                    Need Us Most
                </h2>

                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">CONTACT US TODAY</button>
                </a>
            </div>
        </section>


    <?php endif; ?>
</div>
