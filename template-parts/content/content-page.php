<?php

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();

			$sherpa_automatic_h1 = get_option('sherpa_automatic_h1');

			if($sherpa_automatic_h1 == 'y')
			{
    			if(current_user_can('edit_pages')) {
    				$edit_url = get_edit_post_link();
    				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit Page','sherpa') . "</a></small>";
    			} else {
    				$edit_link = NULL;
    			}
   				$title = "<span>" . get_the_title() . $edit_link . "</span>\n";
			}
			else
			{
    			$title = NULL;
			}

            echo "<article>\n";
            
            if(is_page('printing-services')) :
                echo "<div class=\"sidebar-content with-bar\">";
                else :
                    echo "<div class=\"sidebar-content\">";
                endif;
            if(!is_page_template('page-grid.php')) : 
            get_sidebar();
            endif;
            echo "<div class=\"content page-content\">";
            if(get_field('custom_h1')) :
                echo  get_field('custom_h1', $pageid);
            elseif(!is_page_template('page-grid.php')) :
                echo '<h1>' . get_the_title() . '</h1>';
            endif;
            the_content();
            if(!is_page_template('page-grid.php')) : 
            ?>
<div class="banner banner-bottom">
    <?php if (has_post_thumbnail( $post->ID ) ):
                echo the_post_thumbnail(array(1060,209));
            elseif(!is_page_template('page-grid.php')) :
                ?>
    <img src="<?=IMGURL?>bg-bottom.jpg" alt="<?php echo get_bloginfo( 'name' ); ?>">
    <?php
            endif; ?>
</div>
<?php        endif;
            if (get_field('page_bottom', $pageid)) { ?>
<section class="page-bottom">
    <div class="row">
        <div class="col col-xs-12">
            <?php echo get_field('page_bottom', $pageid); ?>
        </div>
    </div>
</section>
<?php  }
            ?>
<div class="content">
    <?php
            if (get_field('page_two', $pageid)) { ?>
    <?php echo get_field('page_two', $pageid); ?>
    <?php  }
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</article>\n";
		}
		
    }