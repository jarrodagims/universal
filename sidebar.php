<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>
<?php if (!is_page('contact-us')) : ?>
<div class="sidebar-top">
    <img src="<?=IMGURL?>car-hail-damage.svg" alt="Car Hail Damage" />
</div>
<div class="sidebar-bottom">
    <section class="icon-row">
        <?php echo get_template_part('template-parts/icon', 'row'); ?>
    </section>

    <div class="circle-container">
        <div class="circle">

            <div class="outer-circle">

            </div>
        </div>
    </div>

    <h2>Did your car recently get<br />
        riddled with <strong>hail?</strong></h2>
    <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">CONTACT
            US TODAY</button></a>
</div>
<?php endif; ?>
</div>