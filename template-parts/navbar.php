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
            <a class="sidebar-link" href="#home-module-2" data-target="#home-module-2">
                <?php echo get_template_part('template-parts/icons/icon', '1') ?>
            </a>
            <div class="navbar-collapse collapse show tab">
                <ul class="nav navbar-nav">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11"
                        class="menu-item current-menu-item active nav-item">
                        <a title="Home" href="#home-module-2" data-target="#home-module-2"
                            class="sidebar-link nav-link">Welcome
                            to Zia Homes</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-3" data-target="#home-module-3">
                <?php echo get_template_part('template-parts/icons/icon', '2') ?>
            </a>
            <div class="navbar-collapse collapse show tab">
                <ul class="nav navbar-nav">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11"
                        class="menu-item current-menu-item active nav-item">
                        <a title="Home" href="#home-module-3" data-target="#home-module-3"
                            class="sidebar-link nav-link">Floor
                            plans</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-4" data-target="#home-module-4">
                <?php echo get_template_part('template-parts/icons/icon', '3') ?>
            </a>
            <div class="navbar-collapse collapse show tab">
                <ul class="nav navbar-nav">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11"
                        class="menu-item current-menu-item active nav-item">
                        <a title="Home" href="#home-module-4" data-target="#home-module-4"
                            class="sidebar-link nav-link">Why
                            Choose Zia Homes</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="sidebar-link" href="#home-module-6" data-target="#home-module-6">
                <?php echo get_template_part('template-parts/icons/icon', '4') ?>
            </a>
            <div class="navbar-collapse collapse show tab">
                <ul class="nav navbar-nav">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11"
                        class="menu-item current-menu-item active nav-item">
                        <a title="Home" href="#home-module-6" data-target="#home-module-6"
                            class="sidebar-link nav-link">What You
                            Get</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="sidebar-link" href="#footer" data-target="#footer">
                <?php echo get_template_part('template-parts/icons/icon', '5') ?>
            </a>
            <div class="navbar-collapse collapse show tab">
                <ul class="nav navbar-nav">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11"
                        class="menu-item current-menu-item active nav-item">
                        <a title="Home" href="#footer" data-target="#footer" class="sidebar-link nav-link">Contact
                            Us</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>