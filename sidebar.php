<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <h2>Contact Us</h2>

        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            }
            ?>
    </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>


    <picture>
        <source srcset="<?=IMGURL?>grid-retina.png 2x" />
        <img src="<?=IMGURL?>grid-sm.png" alt="Sidebar" usemap="#image-map" />
    </picture>

    <map name="image-map">
        <area target="" alt="Digital" title="Digital" href="<?=SITEURL?>/printing-services/" coords="0,228,361,116"
            shape="rect">
        <area target="" alt="Wide Format" title="Wide Format"
            href="<?=SITEURL?>/printing-services/wide-format-printing/" coords="1,230,360,458" shape="rect">
        <area target="" alt="Offset" title="Offset" href="<?=SITEURL?>/printing-services/" coords="0,459,361,574"
            shape="rect">
        <area target="" alt="Promotional Items" title="Promotional Items"
            href="<?=SITEURL?>/printing-services/promo-items/" coords="0,574,361,801" shape="rect">
        <area target="" alt="Hello" title="Contact Us" href="<?=SITEURL?>/contact-us/" coords="2,0,361,114"
            shape="rect">
    </map>

    <?php endif; ?>
</div>