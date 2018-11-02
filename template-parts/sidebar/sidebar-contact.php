<?php if (get_field('sidebar_contact')) :
?>
<div class="sidebar sidebar-contact-form" id="sidebar">
    <div id="contact-form"><h3>Contact Us</h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-agi.png"
             alt="AGI Marketing"/>
        <?php echo get_field('sidebar_contact') ; ?>
    </div>
    <?php if (get_field('sidebar_icons')) :
    ?>
        <?php get_template_part('/template-parts/sidebar/sidebar', 'icons'); ?>
    <?php endif; ?>
</div>

<?php endif; ?>