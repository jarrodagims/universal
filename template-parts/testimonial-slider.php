<div class="testim"><img src="<?= IMGURL ?>icon-fb.png"  class="facebook-icon" alt="Facebook">

<div class="cycle-slideshow"
     data-cycle-fx="fade"
     data-cycle-timeout="5000"
     data-cycle-slides="> div"
>

    <?php
    $args = array(
        'post_type'   => 'testimonial'
    );

    $testimonials = new WP_Query( $args );
    if( $testimonials->have_posts() ) :
        ?>
        <?php
        while( $testimonials->have_posts() ) :
            $testimonials->the_post();
            ?>
            <div>
                <p><?php echo get_the_content();  ?></p>
                <p>- <strong><?php echo get_the_title(); ?></strong></p>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    <?php
    else :
        ?>
    <p>No testimonials yet!</p>
    <?php
    endif;
    ?>

</div>

<a href="#" class="next" data-cycle-cmd="next"></a>
<a href="https://www.facebook.com/ciconstructors/reviews" target="_blank">
    <button class="btn btn-default">Send Feedback</button>
</a></div>