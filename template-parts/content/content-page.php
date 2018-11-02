<?php

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article>
            <div class="sidebar-content">
                <?php get_template_part('template-parts/sidebar/sidebar', 'testimonial'); ?>
                <?php get_template_part('template-parts/sidebar/sidebar', 'contact'); ?>
            </div>
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