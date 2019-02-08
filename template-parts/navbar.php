<div id="nav-sidebar" class="sticky">
    <ul class="list-unstyled">
        <li><a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?=IMGURL;?>logo.svg"
                    alt="<?php echo get_bloginfo(
    'description'
); ?>" width="88" /></a></li>
        <li>
            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-1" data-target="#home-module-1">
                <?php echo get_template_part('template-parts/icons/icon', '1') ?>
            </a>

            <!-- <div class="navbar-collapse collapse show" id="bs-example-navbar-collapse-53" style="">
                <div class="menu-primary-container">
                    <ul id="menu-primary" class="nav navbar-nav">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-11"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item active menu-item-11 nav-item">
                            <a title="Home" href="http://localhost/wordpress/zia-homes/" class="nav-link">Home</a></li>
                    </ul>
                </div>
            </div> -->
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-3" data-target="#home-module-3">
                <?php echo get_template_part('template-parts/icons/icon', '2') ?>
            </a>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-4" data-target="#home-module-4">
                <?php echo get_template_part('template-parts/icons/icon', '3') ?>
            </a>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-6" data-target="#home-module-6">
                <?php echo get_template_part('template-parts/icons/icon', '4') ?>
            </a>
        </li>
        <li>
            <a class="sidebar-link" href="#footer" data-target="#footer">
                <?php echo get_template_part('template-parts/icons/icon', '5') ?>
            </a>
        </li>
    </ul>
</div>