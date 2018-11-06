<?php
    if(get_field('custom_h1')) :
        $title = get_field('custom_h1', $pageid) ;
    else :
        $title = '<h1><strong>' . get_the_title() . '</strong></h1>';
    endif;
    if (has_post_thumbnail( $post->ID ) ):
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    if($backgroundImg) : ?>
        <div class="top-banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
           <?php echo $title; ?>

            <?php if(!is_page('contact-us')) : ?>
            <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-success">Contact Us</button></a>
            <?php endif; ?>
        </div>
<?php endif;
else:
    ?>
        <div class="top-banner" style="background-image: url('<?= IMGURL ?>bg-building-top.jpg');"  alt="<?php echo get_bloginfo( 'name' ); ?>">
            <?php echo $title; ?>
            <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-success">Contact Us</button></a>
        </div>
<?php
endif;
?>
<ul class="google-colors hidden-xs">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
