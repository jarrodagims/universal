<div id="sidebar" class="sidebar">
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
<div class="sidebar-top">
    <img src="<?=IMGURL?>our-grill.svg" alt="Our Grill" />
</div>
<div class="sidebar-bottom">
    <img src="<?=IMGURL?>uber-eats-logo.png" alt="Uber Eats" />
    <a href=""><img src="<?=IMGURL?>uber-eats-btn.svg" alt="Uber Eats" height="20" /></a>
</div>
<div class="sidebar-table">
    <div class="icon-calendar"><span>Daily Schedule</span></div>
    <?php echo do_shortcode('[table id=1 /]'); ?>
</div>
<?php endif; ?>
</div>