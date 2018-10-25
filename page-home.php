<?php get_header();

/*
    Template Name: Home
*/ ?>


    <section id="home-main">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-12 flex-col">
                    <div class="jumbotron">

                        <div class="jumbo-content waypoint">
                            <div>
                                <h1><span class="brand">BIG</span> OPPORTUNITIES.
                                <span class="br-md">Local Businesses. Creative Solutions.</span></h1>

                                <p><strong>More Customers</strong> & <strong>Increased Phone Calls</strong>, Leads, Website & Foot Traffic</p>

                                <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">Start Getting More Customers Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div> <!-- end home-bg -->

<section class="home-module-1">
    <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
</section>

<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="d-flex flex-row">
                <div class="p-2 flex-fill">
                    <h2>Client <strong>Success Stories</strong></h2>
                    <div class="slide">
                        <p>Thanks to AGI, our internet leads & new patients that <br />
                            found us online is more than double the industry average.
                        </p>

                        <?php get_template_part('/template-parts/icon', '1') ?>

                        <strong>Milo Acosta</strong>
                        <p><i>Physicians Vascular Services</i></p>
                    </div>
                    <!--                <div class="slide">-->
                    <!--                    <p>We have been a client of AGI’s a multitude of years and are not only pleased with their service, we are now the TOP company in our area and surrounding in the HVAC industry. Anything Internet, social media, IT, and all around tech service - AGI is a MUST!!!!”</p>-->
                    <!---->
                    <!--                    --><?php //get_template_part('/template-parts/icon', '1') ?>
                    <!---->
                    <!--                    <strong>Adrian Arreola</strong>-->
                    <!--                    <p><i>Scott Heating & Cooling</i></p>-->
                    <!--                </div>-->
                    <!---->
                    <!--                <div class="slide">-->
                    <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultrices arcu eget ullamcorper pellentesque. Proin auctor nunc at mauris consequat, eu eleifend velit porttitor. Maecenas sit amet mollis orci.</p>-->
                    <!---->
                    <!--                    --><?php //get_template_part('/template-parts/icon', '1') ?>
                    <!---->
                    <!--                    <strong>Shorty</strong>-->
                    <!--                    <p><i>National Furniture Liquidators</i></p>-->
                    <!--                </div>-->

                </div>
                <div class="p-2 flex-fill circle-list">

                    <ul class="slide-menu list-unstyled">
                        <li class="active">
                            <div class="circle-container"> <div class="circle">
                                    <img src="<?=IMGURL?>circle-runner.png" alt="">
                                </div></div>
                            <?php get_template_part('/template-parts/icon', '1') ?>
                            <?php get_template_part('/template-parts/icon', '2') ?>
                        </li>

                        <li>
                            <div class="circle-container"><div class="circle">
                                    <div class="image-wrapper"><img src="<?=IMGURL?>circle-scott.png" alt=""></div>
                                </div></div>
                            <?php get_template_part('/template-parts/icon', '1') ?>
                            <?php get_template_part('/template-parts/icon', '3') ?>
                        </li>

                        <li>
                            <div class="circle-container"><div class="circle">
                                    <img src="<?=IMGURL?>circle-shorty.png" alt="">
                                </div></div>
                            <?php get_template_part('/template-parts/icon', '1') ?>
                            <?php get_template_part('/template-parts/icon', '3') ?>
                        </li>
                    </ul>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>

<section class="home-module-3">

   <div class="container">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-8">
               <div class="icons">
                   <div class="icon-row">
                       <div class="boxes-header"><h2><strong>How</strong> We Do It</h2></div>
                       <div class="flex-col  clear-left">
                           <a href=""><?php get_template_part('template-parts/icon', 'seo'); ?>
                               <div class="title">Search Engine<br />
                               Optimization</div>
                           </a>
                       </div>
                   </div>
                   <div class="icon-row">
                       <div class="flex-col">
                           <a href=""><?php get_template_part('template-parts/icon', 'social'); ?>
                               <div class="title">Social Media<br />
                               Marketing</div>
                           </a>
                       </div>
                       <div class="flex-col"><a href=""><?php get_template_part('template-parts/icon', 'website') ?>
                               <div class="title">Website
                               Management</div>
                           </a>
                       </div>
                       <div class="flex-col"><a href=""><?php get_template_part('template-parts/icon', 'reputation') ?>
                               <div class="title">Reputation
                               Management</div>
                           </a>
                       </div>
                   </div>
                   <div class="icon-row">
                       <div class="flex-col"><a href=""><?php get_template_part('template-parts/icon', 'youtube') ?>
                               <div class="title">Youtube
                               Marketing</div>
                           </a>
                       </div>
                       <div class="flex-col"><a href=""><?php get_template_part('template-parts/icon', 'display') ?>
                               <div class="title">Display
                               Advertising</div>
                           </a>
                       </div>
                       <div class="flex-col"><a href=""><?php get_template_part('template-parts/icon', 'ppc') ?>
                               <div class="title">Pay-Per-Click
                               Advertising</div>
                           </a>
                       </div>
                       <div class="flex-col">
                           <a href=""><?php get_template_part('template-parts/icon', 'remarketing') ?>
                               <div class="title">Remarketing/
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
       <div class="row flex-row circles">
           <div class="col flex-col circle-col">
               <div>
               <?php get_template_part('template-parts/progress', 'ring') ?>

               <p>Nearly 80% of potential customers<br />
                   leave a mobile website that doesn’t<br />
                   display well on their device.</p></div>
           </div>

           <div class="col flex-col circle-col">
               <div>
               <?php get_template_part('template-parts/progress', 'ring') ?>
               <p>Of People Research<br />
               a Local Business Before<br />
               Making a Purchase</p></div>
           </div>
       </div>
   </div>




</section>
<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>