<?php get_header();?>
<?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <article>

                    <div id="sidebar" class="submit-files">
                        <div class="sidebar-content">
                            <div id="contact-form">
                                <h2>Submit Files</h2>

                                <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="213" title="Submit Files"]');
            } else {
                echo do_shortcode('[contact-form-7 id="213" title="Submit Files"]');
            }
            ?>
                            </div>

                        </div>

                    </div>

                </article>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>