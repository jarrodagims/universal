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