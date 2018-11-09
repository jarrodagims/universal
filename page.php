<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php get_template_part('template-parts/content/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
    <?php if(is_page('youtube-advertising')) : ?>
        <?php get_template_part('template-parts/page/page', 'youtube-banner'); ?>
    <?php endif; ?>

<?php get_template_part('template-parts/page/page', 'middle-banner'); ?>

    <?php if(is_page('seo')) : ?>
    <?php get_template_part('template-parts/page/page', 'circles'); ?>
    <?php endif; ?>

    <?php if(is_page('web-design-management')) : ?>
        <?php get_template_part('template-parts/page/page', 'circles-web'); ?>
    <?php endif; ?>

    <?php if(is_page('google-partner')) : ?>
        <?php get_template_part('template-parts/page/page', 'partner'); ?>
    <?php endif; ?>

    <?php if ( get_field( 'icon_bar' ) ): ?>
    <?php get_template_part('template-parts/page/page', 'icons'); ?>
    <?php endif; ?>

    <?php if(is_page('seo')) : ?>
        <?php get_template_part('template-parts/page/page', 'seo'); ?>
    <?php endif; ?>

<?php get_template_part('template-parts/page/page', 'bottom'); ?>

    <?php if(is_page('about-us')) : ?>
        <?php get_template_part('template-parts/page/page', 'icons'); ?>
    <?php endif; ?>

<?php get_template_part('template-parts/page/page', 'google-banner'); ?>
<?php get_template_part('template-parts/page/page', 'contact'); ?>
<?php get_footer(); ?>