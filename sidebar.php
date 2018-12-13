<div id="sidebar">
    <?php if (is_page('contact')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>
<?php if (!is_page('contact')) : ?>
<section class="home-module-2">
    <section class="icon-row">
        <?php echo get_template_part('template-parts/icon', 'row'); ?>
    </section>
</section>
<section class="home-module-3">
    <div class="card">
        <div class="card-top">
            <span>you wash it,</span> we iron it!
        </div>

        <div class="card-bottom">
            <a href="<?=SITEURL?>/contact/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact
                    Us Today</button></a>
        </div>
    </div>

    <div class="card card-secondary">
        Iron a piece of clothing in
        <img src="<?=IMGURL?>iron-time.svg" alt="15-20 minutes">
    </div>
</section>
<?php endif; ?>
</div>