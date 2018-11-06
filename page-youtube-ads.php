<?php get_header();
/*
		Template Name: Youtube
*/
?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col right-aligned">
                    <?php get_template_part('template-parts/content/content', 'page'); ?>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/page/page', 'youtube-banner'); ?>
<?php if(is_page('seo')) : ?>
    <?php get_template_part('template-parts/page/page', 'circles'); ?>
<?php endif; ?>
<?php if ( get_field( 'icon_bar' ) ): ?>
    <?php get_template_part('template-parts/page/page', 'icons'); ?>
<?php endif; ?>
<?php get_template_part('template-parts/page/page', 'bottom-banner'); ?>
<?php get_template_part('template-parts/page/page', 'ribbon'); ?>
<?php get_template_part('template-parts/page/page', 'bottom-list'); ?>
<?php get_template_part('template-parts/page/page', 'bottom'); ?>
<?php if(is_page('about-us')) : ?>
    <?php get_template_part('template-parts/page/page', 'icons'); ?>
<?php endif; ?>
<?php get_template_part('template-parts/page/page', 'google-banner'); ?>
<?php get_template_part('template-parts/page/page', 'contact'); ?>
<?php get_footer(); ?>