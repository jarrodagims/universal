<?php if (get_field('generic_content')) : ?>
    <section class="page-module">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    echo get_field('generic_content');
                    ?>
                </div>
            </div></div>
    </section>
<?php
endif; ?>