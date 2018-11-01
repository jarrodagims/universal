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
<?php get_template_part('template-parts/page/page', 'middle-banner'); ?>
<?php get_template_part('template-parts/page/page', 'bottom-banner'); ?>
<?php get_template_part('template-parts/page/page', 'ribbon'); ?>
<?php get_template_part('template-parts/page/page', 'slideshow'); ?>
<?php get_template_part('template-parts/page/page', 'generic-content'); ?>
<?php $bg = get_field('full_width_image'); ?>
<?php
$image = get_field('full_width_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
<?php get_template_part('template-parts/page/page', 'bottom'); ?>
<?php get_template_part('template-parts/page/page', 'icons'); ?>
<?php get_template_part('template-parts/page/page', 'google-banner'); ?>
<?php get_template_part('template-parts/page/page', 'contact'); ?>
<?php get_footer(); ?>