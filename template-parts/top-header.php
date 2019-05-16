<div class="d-none d-lg-flex top-header">
    <div class="container-fluid">
        <div class="v-align row">
            <div class="col navbar-button text-center">
                <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                        src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
    'description'
); ?>" /></a>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=SITEURL?>/submit-files/">
                            <button class="btn btn-primary">Submit Your Files</button>
                        </a></li>
                    <li><a href="tel:<?php printPhone();?>">TELEPHONE: <?php printPhone();?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>