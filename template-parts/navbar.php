<div id="nav-sidebar">
    <ul class="list-unstyled">
        <li><a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.svg"
                    alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>"
                    width="88" /></a></li>
        <li>
            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
        </li>
        <li>
            <a href="#">
                <?php echo get_template_part('template-parts/icons/icon','1') ?>
            </a>
        </li>
        <li>
            <a href="#">
                <?php echo get_template_part('template-parts/icons/icon','2') ?>
            </a>
        </li>
        <li>
            <a href="#">
                <?php echo get_template_part('template-parts/icons/icon','3') ?>
            </a>
        </li>
        <li>
            <a href="#">
                <?php echo get_template_part('template-parts/icons/icon','4') ?>
            </a>
        </li>
        <li>
            <a href="#">
                <?php echo get_template_part('template-parts/icons/icon','5') ?>
            </a>
        </li>
    </ul>
</div>