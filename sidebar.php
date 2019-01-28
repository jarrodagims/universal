<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>
<?php if (!is_page('contact-us')) : ?>
<div class="sidebar-top">
    <img src="<?=IMGURL?>bg-sidebar-top.jpg" alt="Mexican Food" />
</div>
<div class="sidebar-bottom">
    <h2>Preparing Homestyle <span class="br-md br-xs">Mexican Food</span></h2>

    <a href="<?=SITEURL?>/menu/"><button class="btn btn-primary">See our speciality dishes</button></a>

</div>
<?php endif; ?>
</div>