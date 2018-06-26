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
            get_sidebar();
            echo "<div class=\"content\">";
            echo "<span class=\"post-title\">";
            the_title();
            echo "</span>";
            the_content();
            ?>
            <div class="banner">
                <strong>EMPOWERING INDEPENDENCE</strong>
                <em>Contact Us <span>Today!</span></em>
            </div>
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
