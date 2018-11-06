<?php get_header();
/*
		Template Name: Contact
*/
?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>

    <section id="main">
    <div class="container">
    <div class="row">
    <div class="col">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article>
            <div class="content page-content">
                <?php
                the_content();
                ?>
            </div>
        </article>
    <?php
    endwhile;
endif;
?>
    </div>
    </div>
    </div>
    </section>
<?php get_template_part('template-parts/page/page', 'google-banner'); ?>
<?php get_footer(); ?>