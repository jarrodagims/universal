<?php get_header(); /*
Template Name: About Us
 */?><?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main" class="about-us">
    <article>
        <div class="content page-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row reverse">
                            <div class="col">
                                <picture>
                                    <source srcset="<?=IMGURL?>bg-chairs.jpg" media="(min-width: 992px)">
                                    <img src="<?=IMGURL?>about-sm.jpg" alt="about us" />
                                </picture>
                            </div>
                            <div class="col offset-left">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="img-row">
                            <hr />
                            <div class="row text-center">
                                <div class="col">
                                    <h2>OUR TEAM INCLUDES <span class="br-md">THE FOLLOWING MEMBERS:</span></h2>
                                </div>
                            </div>
                            <div class="d-flex row text-center img-row">
                                <div class="col"> <img class="alignnone wp-image-54 size-full"
                                        src="<?=IMGURL?>viviana.jpg" alt="" width="406" height="352" />
                                    <p>
                                        VIVIANA RONQUILLO <br />CEO
                                    </p> <a href="mailto:ziahomesofelpaso@gmail.com">ziahomesofelpaso@gmail.com</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-56 size-full"
                                        src="<?=IMGURL?>andrew.jpg" alt="" width="406" height="352" />
                                    <p>
                                        ANDREW RYAN <br />MARKETING DIRECTOR
                                    </p> <a href="mailto:andrewziahomes@gmail.com">andrewziahomes@gmail.com</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-57 size-full" src="<?=IMGURL?>ana.jpg"
                                        alt="" width="406" height="352" />
                                    <p>
                                        ANA HERNANDEZ <br />SOCIAL MEDIA MANAGER
                                    </p> <a
                                        href="mailto:anahernandez@summusrealty.com">anahernandez@summusrealty.com</a>
                                </div>
                            </div>
                            <div class="d-flex row text-center img-row">
                                <div class="col"> <img class="alignnone wp-image-54 size-full"
                                        src="<?=IMGURL?>natasha-noylis.jpg" alt="" width="406" height="352" />
                                    <p>Natasha Noylis <br />Client Success Coordinator</p> <a
                                        href="mailto:tasha.ziahomes@gmail.com">tasha.ziahomes@gmail.com</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-56 size-full"
                                        src="<?=IMGURL?>erica-maravilla.jpg" alt="" width="406" height="352" />
                                    <p>Erica Maravilla <br />Customer Liaison</p> <a
                                        href="mailto:ericamaravilla76@gmail.com">ericamaravilla76@gmail.com</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-57 size-full"
                                        src="<?=IMGURL?>john-etienne.jpg" alt="" width="406" height="352" />
                                    <p>John Etienne <br />Sales Manager</p> <a
                                        href="mailto:johnziahomes@gmail.com">johnziahomes@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<?php get_footer();?>