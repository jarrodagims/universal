<div id="sidebar" class="col-md-4">
    <?php if (is_page('contact')) {
        ?>
        <section id="contact-form">
            <div>
                <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
            </div>
        </section>
    <?php } ?>
    <?php if (!is_page('contact')) { //if the field is not empty
        ?>
        <section id="contact-form">
            <div>
                <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
            </div>
        </section>
    <?php } ?>
</div>