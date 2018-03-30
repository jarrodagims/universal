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
   				$title = "<h1>" . get_the_title() . $edit_link . "</h1>\n";
			}
			else
			{
    			$title = NULL;
			}

			
				
			
			echo "<article>\n";
			if ( is_active_sidebar( 'form_widgets' ) ) : ?>
			<div id="contact-form" class="col-md-4 hidden-xs"><?php dynamic_sidebar( 'form_widgets' ); ?></div>
		<?php endif;

		
			echo $title;
		
			the_content();
			
			echo "</article>\n";
		}
		
	}
