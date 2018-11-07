<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<?php
	if(have_posts()) {
		while(have_posts()) {
			the_post();

            echo short_title('...', 10);

            the_content();
		}
	}
?>
<?php get_footer(); ?>