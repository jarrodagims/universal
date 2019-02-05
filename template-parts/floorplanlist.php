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
                <?php the_content(); ?>
                <span class="sft"><?php echo get_field('sqft'); ?></span>

                <span class="price"><?php echo get_field('price'); ?></span>

            </div>
        </a>
        <?php else: ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="coming-soon">

                <h2><?php the_title(); ?>
                </h2>
                <h3><?php echo get_field('sqft'); ?></h3>
                <p>COMING SOON</p>

            </div>
        </a>
        <?php endif; ?>


    </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>