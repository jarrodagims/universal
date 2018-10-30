<?php if (has_post_thumbnail( $post->ID ) ):
    echo the_post_thumbnail(array(1060,209));
else:
    ?>
    <img class="visible-xs" src="<?= IMGURL ?>bg-internal-header.jpg" alt="<?php echo get_bloginfo( 'name' ); ?>" />
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