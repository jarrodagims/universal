<?php if (get_field('banner_middle_bg')) :
$bg =  get_field('banner_middle_bg');
?>
    <section class="banner-middle" style="<?php if(get_field('banner_middle_bg')) : echo "background-image: url(" . $bg['url'] . ");";  endif; ?>">
        <div class="container">
            <div class="row">
                <?php
                    echo get_field('banner_middle_text');
                ?>
                </div>
            </div>
    </section>
<?php endif; ?>