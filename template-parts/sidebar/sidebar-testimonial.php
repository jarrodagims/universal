<?php if (get_field('sidebar_testimonial')) :
    ?>
    <div id="sidebar" class="sidebar-testimonial">
        <?php
        echo get_field('sidebar_testimonial');
        ?>
    </div>
<?php endif; ?>