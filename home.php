<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col">
                <div class="sidebar-content">
                    <div class="sidebar sidebar-contact-form" id="sidebar">
                        <div id="contact-form"><h3>Contact Us</h3>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-agi.png"
                                 alt="AGI Marketing"/>
                            <?php echo do_shortcode('[contact-form-7 id="41" title="Contact"]'); ?>
                        </div>
                        <?php if (get_field('sidebar_icons')) :
                            ?>
                            <?php get_template_part('/template-parts/sidebar/sidebar', 'icons'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="content page-content">
                    <?php get_template_part('template-parts/content/content', 'archive'); ?>
                </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>