<?php if (get_field('banner_bottom_text')) : ?>
<section class="banner-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                echo get_field('banner_bottom_text');
                ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>