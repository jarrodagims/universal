<?php if (get_field('banner_ribbon_text')) : ?>
<section class="banner-ribbon">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                echo get_field('banner_ribbon_text');
                ?>
            </div>
        </div>
    </div>

</section>
<?php endif; ?>