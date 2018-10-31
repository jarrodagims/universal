<?php $bg = get_field('banner_middle_bg'); ?>
<?php if (get_field('banner_middle_text')) : ?>
    <section class="banner-middle" style="background-image: url(<?php if(get_field('banner_middle_bg')) : echo $bg['url']; endif; ?>);">
        <div class="container">
            <div class="row">
                <div class="col"><?php
                    echo get_field('banner_middle_text');
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                    $image = get_field('banner_middle_image');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>