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

<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>