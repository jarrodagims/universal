<?php

if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <article>
            <div class="sidebar-content">

                <?php if (get_field('sidebar_testimonial')) :
                    ?>
                    <div id="sidebar" class="sidebar-testimonial">
                        <?php
                        echo get_field('sidebar_testimonial');
                        ?>
                    </div>
                <?php endif; ?>
            </div>

        </article>
        <div class="content page-content">
            <?php
            the_content();
            ?>
        </div>
    <?php
    endwhile;
endif;
?>