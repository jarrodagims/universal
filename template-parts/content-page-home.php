<?php

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

			echo "<article>";
			the_content();
			echo "</article>";
		}
		
	}
