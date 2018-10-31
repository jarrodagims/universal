<?php if (get_field('page_bottom_list')) : ?>
    <section class="page-bottom">
        <div class="container">
            <div class="row">
                <?php
                echo get_field('page_bottom');
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>