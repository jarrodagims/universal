<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if(get_option('sherpa_use_title') == 'y'): ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php endif; ?>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
        
        <?php if(!empty(get_option( 'sherpa_schema' ))): ?>

<?=get_option('sherpa_schema')?>
            
        <?php endif; ?>

    </head>
    <body <?php body_class(); ?>>
   <?php if(is_front_page()) : ?> <div class="home-bg"><?php endif; ?>
   <?php if(is_page_template( 'page-landing.php' )) : ?> <div class="landing-bg"><?php endif; ?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
            <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <?php if(is_front_page() || is_page_template('page-landing.php')) : ?>
       <div class="container-fluid sub-header">
           <div class="container">
               <div class="row ">
                   <div class="v-align">
                       <a href="<?=SITEURL?>" class="btn btn-success btn-md hidden-xs btn-license">TX LIC. C19761</a>
                       <ul class="nav navbar-nav navbar-right">
                           <li class="menu-item directions"><a href="<?php echo get_site_url()?>/contact">Directions</a> 3500 George Dieter Ste. K | El Paso TX 79936</a></li>
                           <li class="menu-item contact"><a href="tel:+9153073559">Call</a> 915-307-3559</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
       <?php endif; ?>
       <?php if(!is_front_page() && !is_page_template( 'page-landing.php' )) : ?>
       <div class="container-fluid sub-header">
           <div class="container">
               <div class="row ">
                   <div class="col-md-4 col-xs-12">
                       <a class="navbar-brand" href='<?php echo get_site_url() ?>'><img
                                   src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png"
                                   alt="<?php echo get_bloginfo('description'); ?>"/></a>
                   </div>
                   <div class="v-align">
                       <div class="bottom">
                           <a href="<?=SITEURL?>" class="btn btn-success btn-md hidden-xs btn-license">TX LIC. C19761</a>
                           <ul class="nav navbar-nav navbar-right">
                               <li class="menu-item directions"><a href="<?php echo get_site_url()?>/contact">Directions</a> 3500 George Dieter Ste. K | El Paso TX 79936</a></li>
                               <li class="menu-item contact"><a href="tel:+9153073559">Call</a> 915-307-3559</li>
                           </ul>
                       </div>

                   </div>
               </div>
           </div>
       </div>
       <?php endif; ?>

       <?php if(!is_page_template( 'page-landing.php' )) : ?>
        <section id="header">

	        <div class="container">

		        <div class="row">
					<div class="<?=FULLWIDTH?>">
                        <a href="<?=SITEURL?>" class="btn btn-success btn-md visible-xs btn-license">TX LIC. C19761</a>
				        <?php
							// Call either the responsive_bs_menu() or the non_responsive_bs_menu() here
							//  If you are using a menu besides 'primary', use this as the first argument in the function.
							//  You can control whether the menu is right- or left-aligned with $menu_side.  It will be left-aligned unless you set
							//      $menu_side = 'right'
							//  You can also set up what the text is on the left-hand side of the mobile menu with $brand.
							//  Lastly, the menu now returns rather than echoing out, so make sure to echo out the menu.
                            //
							//  responsive_bs_menu($primary_menu_location, $menu_side, $brand);
							
							// If you don't send a second argument, it will default to no menu on the right side.

                            echo responsive_bs_menu('primary', 'left', 'Joseph Law');
                        ?>
			        </div>
		        </div>
	        </div>

            <div class="container border-top">
                <div class="row">
                    <div class="<?=FULLWIDTH?>">
                        <?php if(!is_front_page()) :  global $post; echo get_the_title($post->ID); endif; ?>
                    </div>
                </div>
            </div>

        </section>
        <?php endif; ?>

