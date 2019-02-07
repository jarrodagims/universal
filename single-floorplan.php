<?php get_header(); ?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col">


                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-none d-lg-block img-container">
                            <?php
                                        $image = get_field('3d_image');
                                        if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col full-height">
                            <div>
                                <div class="row">
                                    <div class="col floor-header number-header">
                                        <?php echo get_field('top_paragraph'); ?>
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


                                        <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                                            <button class="btn btn-primary">
                                                <span>SCHEDULE A TOUR</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <section class="more-properties">

                        <div class="row">
                            <div class="col text-center">

                                <h2>
                                    More Properties
                                </h2>
                            </div>
                        </div>

                        <?php
                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                        if ( get_query_var('page') ) $paged = get_query_var('page');
                 
                        $query = new WP_Query( array( 'posts_per_page' => 3, 'post_type' => 'floorplan', 'paged' => $paged, 'tax_query' => array(
                            array(
                                'taxonomy' => 'neighborhood',
                                'field' => 'slug',
                                'terms' => 'westside'
                            )
                            ), ) );

                        $posts_per_row = 3;
                        $post_counter = 0;

                        if ( $query->have_posts() ) : ?>


                        <div class="floorplan-list">

                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <?php if( ( ++$post_counter % $posts_per_row ) == 1  || $posts_per_row == 1 ) :
                                if( $post_counter > 1 ) :
                                    echo '</div>';
                                endif;
                            echo '<div class="row">';
                            endif;
                            ?>
                            <div class="col entry">

                                <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <div>
                                        <?php the_post_thumbnail(); ?>

                                        <h2 class="title"><?php the_title(); ?></h2>
                                    </div>
                                </a>
                                <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <div class="coming-soon">

                                        <h2><?php the_title(); ?>
                                        </h2>

                                    </div>
                                </a>
                                <?php endif; ?>


                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                        <!-- show pagination here -->
                        <?php else : ?>
                        <!-- show 404 error here -->
                        <?php endif; ?>


                    </section>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>