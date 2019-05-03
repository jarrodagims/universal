<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>

</div>
</div> <!-- end sidebar container -->
<?php if (!is_page('contact-us')): ?>
<?php get_template_part('template-parts/footer','part'); ?>
<?php endif;?>

<div class="sub-footer">
    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-5ozVWQaaSdI_RbSAiSz4A2p509v1IrY&callback=initMap" async
    defer>
</script>
</body>

</html>