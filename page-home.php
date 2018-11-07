<?php get_header();

/*
    Template Name: Home
*/ ?>


<?php get_template_part('template-parts/home/home', 'main'); ?>
</div> <!-- end home-bg -->

<section class="home-module-1">
    <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
</section>

<?php get_template_part('template-parts/home/home', 'slideshow'); ?>

<?php get_template_part('template-parts/home/home', 'boxes'); ?>

<?php get_template_part('template-parts/home/home', 'website'); ?>

<?php get_template_part('template-parts/home/home', 'ribbon'); ?>

<?php get_template_part('template-parts/home/home', 'contact'); ?>

<?php get_footer(); ?>