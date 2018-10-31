<?php if (get_field('page_bottom_list')) : ?>
<section class="bottom-list">
    <div class="container">
        <div class="row">
            <?php
            echo get_field('page_bottom_list');
            ?>
        </div>
    </div>
</section>
<?php endif; ?>