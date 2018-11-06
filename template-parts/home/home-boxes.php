<section class="home-module-3 circle-waypoint">
    <div class="phone-bg" data-parallax='{"y" : 100}'>
        <img src="<?= IMGURL ?>bg-phones.png" alt="Phones" />
    </div>

    <div class="svg-dots">
        <?php get_template_part('template-parts/svg', 'dots') ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="icons">
                    <div class="icon-row">
                        <div class="boxes-header"><h2><strong>How</strong> We Do It</h2></div>
                        <div class="flex-col  clear-left">
                            <a href="<?= SITEURL ?>/seo/"><?php get_template_part('/template-parts/icons/icon', 'seo'); ?>
                                <div class="title">Search Engine<br />
                                    Optimization</div>
                            </a>
                        </div>
                    </div>
                    <div class="icon-row">
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/social-media-marketing/"><?php get_template_part('/template-parts/icons/icon', 'social'); ?>
                                <div class="title">Social Media<br />
                                    Marketing</div>
                            </a>
                        </div>
                        <div class="flex-col"><a href="<?= SITEURL ?>/web-design-management/"><?php get_template_part('/template-parts/icons/icon', 'website') ?>
                                <div class="title">Website<br />
                                    Management</div>
                            </a>
                        </div>
                        <div class="flex-col"><a href="<?= SITEURL ?>/online-reputation-management/"><?php get_template_part('/template-parts/icons/icon', 'reputation') ?>
                                <div class="title">Reputation<br />
                                    Management</div>
                            </a>
                        </div>
                    </div>
                    <div class="icon-row">
                        <div class="flex-col"><a href="<?= SITEURL ?>/youtube-advertising/"><?php get_template_part('/template-parts/icons/icon', 'youtube') ?>
                                <div class="title">Youtube<br />
                                    Marketing</div>
                            </a>
                        </div>
                        <div class="flex-col"><a href="<?= SITEURL ?>/web-design-management/"><?php get_template_part('/template-parts/icons/icon', 'display') ?>
                                <div class="title">Display<br />
                                    Advertising</div>
                            </a>
                        </div>
                        <div class="flex-col"><a href="<?= SITEURL ?>/ppc/"><?php get_template_part('/template-parts/icons/icon', 'ppc') ?>
                                <div class="title">Pay-Per-Click<br />
                                    Advertising</div>
                            </a>
                        </div>
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/remarketing-in-el-paso/"><?php get_template_part('/template-parts/icons/icon', 'remarketing') ?>
                                <div class="title">Remarketing/<br />
                                    Retargeting</div>
                            </a>
                        </div>
                        <div class="boxes-footer">
                            <h2><strong>Why</strong> We Do It</h2>
                            <div class="bottom-text"><h3>Inbound<br />
                                    Marketing Costs</h3>

                                <p><small>62% Less Per Lead Than<br />
                                        Traditional Marketing
                                    </small></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('/template-parts/home/home', 'circles'); ?>
    </div>
</section>