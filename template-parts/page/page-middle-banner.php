<?php if (get_field('banner_middle_text')) :
$bg =  get_field('banner_middle_bg');
?>
    <section class="banner-middle" style="<?php if(get_field('banner_middle_bg')) : echo "background-image: url(" . $bg['url'] . ");";  endif; ?>">
        <div class="container">
            <div class="row">
                <?php
                    echo get_field('banner_middle_text');
                ?>

                <?php if(is_page('display-advertising')) : ?>

                <?php get_template_part('template-parts/page/page', 'display'); ?>

                <?php endif; ?>
                </div>
            </div>
    </section>
<?php endif; ?>