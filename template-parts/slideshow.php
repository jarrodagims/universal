<div class="container">
    <div class="slideshow same-slideshow">
        <?php  wp_reset_postdata();
                $paged = get_query_var('paged') ? get_query_var('paged') : 1; 
            
                $tax_post_args = array(
                            'post_type' => 'floorplan',
                            'posts_per_page' => 12,
                            'order' => 'ASC',
                            'paged' => $paged
                        );
                  
                        $query = new WP_Query( $tax_post_args );

                        $posts_per_row = 3;
                        $post_counter = 0;

                        if ( $query->have_posts() ) : ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="container">
            <div class="row">
                <div class="col full-height">
                    <div>
                        <div class="row">
                            <div class="col floor-header number-header">
                                <h2>FLOOR PLANS</h2>
                            </div>
                        </div>
                        <div class="row full-height">
                            <div class="col floor-header">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <div class="col img-container d-lg-none">
                                <?php
                                        $image = get_field('3d_image');
                                        if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col">
                                <table class="floorplan" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>FLOORPLAN</td>
                                        <td><?php echo get_field('floorplan'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LIVING AREA
                                        </td>
                                        <td><?php echo get_field('living_area'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BEDROOMS
                                        </td>
                                        <td><?php echo get_field('bedrooms'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>BATHROOMS
                                        </td>
                                        <td><?php echo get_field('bathrooms'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>PRICE
                                        </td>
                                        <td><span class="brand"><?php echo get_field('price'); ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row row-buttons">
                            <div class="col">
                                <a href="<?=SITEURL?>/floor-plans/" class="contact-us">
                                    <button class="btn btn-primary">
                                        VIEW OUR FLOOR PLANS
                                    </button>
                                </a>

                                <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                                    <button class="btn btn-outline">
                                        <span>SCHEDULE A TOUR</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-none d-lg-block img-container">
                    <?php
                                        $image = get_field('3d_image');
                                        if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <?php endwhile; wp_reset_postdata(); ?>

        <!-- show pagination here -->
        <?php else : ?>

        <!-- show 404 error here -->
        <?php endif; ?>
    </div>
    <div class="slide-next"></div>

</div>
<div class="slide-nav-container">
    <ul id="cycle-2" class="slide-nav responsive same-slideshow">
        <?php  wp_reset_postdata();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$tax_post_args = array(
'post_type' => 'floorplan',
'posts_per_page' => 12,
'order' => 'ASC',
'paged' => $paged
);

$query = new WP_Query( $tax_post_args );

$posts_per_row = 3;
$post_counter = 0;
$count = 0;

if ( $query->have_posts() ) : ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); $count++; ?>

        <li data-hard-index="<?php echo $count - 1; ?>"><a href="javascript:void(0);"><?php the_title(); ?></a></li>


        <?php endwhile; wp_reset_postdata(); ?>

        <!-- show pagination here -->
        <?php else : ?>

        <!-- show 404 error here -->
        <?php endif; ?>
    </ul>
    <div class="slide-nav-next"></div>
</div>