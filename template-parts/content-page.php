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
            echo "<div class=\"sidebar-content\">";
            echo "<div class=\"content\"><h1 class=\"post-title\">";
            if (get_field('page_title', $pageid)) :
            echo get_field('page_title', $pageid);
            else:
            the_title();
            endif;
            echo "</h1></div>";
            get_sidebar();
            echo "<div class=\"content page-content\">";
            the_content();
           if (!is_page('contact-us')) :
            ?>
            <div class="banner-bottom">
                <div class="diamond-container"><div class="diamond-bg">
                    <?php get_template_part('template-parts/icon', 'mini-diamond'); ?>
                </div></div>
                <p>IN THE <strong>SOUTHWEST</strong>
                <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-success">CONTACT FORM</button></a></p>
            </div>
           <?php endif; ?>
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
