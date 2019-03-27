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


                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">


                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle"><?php the_title(); ?>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?php echo $image['sizes']['large']; ?>" alt="Large Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a data-toggle="modal" data-target="#myModal"><img
                                    src="<?php echo $image['sizes']['large']; ?>"
                                    alt="<?php echo $image['alt']; ?>" /></a>
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
                                            <?php if (get_field('bonus')) : ?>
                                            <tr>
                                                <td>BONUS
                                                </td>
                                                <td><?php echo get_field('bonus'); ?>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
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

                    <div class="row pagination-row">
                        <div class="col">
                            <?php
 previous_post_link();
?>
                        </div>

                        <div class="col text-center">
                            <a href="<?=SITEURL?>/floor-plans">All Floor Plans</a>
                        </div>

                        <div class="col text-right">
                            <?php
next_post_link();
?>
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
                         $terms = get_the_terms( $post->ID , array( 'neighborhood') );
                         $term = array_shift( $terms );

                         
                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                        if ( get_query_var('page') ) $paged = get_query_var('page');
                 
                        $query = new WP_Query( array( 'posts_per_page' => 3, 'post_type' => 'floorplan', 'paged' => $paged, 'tax_query' => array(
                            array(
                                'taxonomy' => 'neighborhood',
                                'field' => 'slug',
                                'terms' => $term->slug
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
                                <a href="#" style="pointer-events: none;" title="<?php the_title_attribute(); ?>">
                                    <div class="coming-soon">

                                        <h2><?php the_title(); ?></h2>

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