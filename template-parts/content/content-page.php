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
			echo "<div class=\"content page-content\">";
			?>
<?php if (is_page('contact-us')) : ?>
<div id="sidebar">

    <section id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col contact-form">
                    <?php if( $section_6 = get_field('section_6') ) : ?>

                    <?php echo $section_6 ?>

                    <?php else : ?>

                    <h2>
                        Ready To Meet Your Future Home? <br />It’s Waiting To Meet You Too!
                    </h2>


                    <?php endif; ?>


                    <div id="contact-form">
                        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
} else {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
}
?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?php endif; ?>


<?php
            the_content();
            ?>
<div class="banner banner-bottom">

</div>
<?php if (get_field('page_bottom', $pageid)) { ?>
<section class="page-bottom">
    <div class="row">
        <div class="col col-xs-12">
            <?php echo get_field('page_bottom', $pageid); ?>
        </div>
    </div>
</section>
<?php  }
            echo "</div>";
            echo "</div>";
            echo "</article>\n";
		}
		
    }