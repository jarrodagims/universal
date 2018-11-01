<?php if (get_field('page_bottom')) : ?>
    <section class="page-bottom page-module">
        <div class="container">
            <div class="row">
                <?php
                echo get_field('page_bottom');
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>