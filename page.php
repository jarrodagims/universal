<?php get_header(); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('template-parts/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>

<?php
if (get_field('page_bottom', $pageid)) { ?>
    <section class="page-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2"><?php echo get_field('page_bottom', $pageid); ?></div>
            </div>
        </div>
    </section>
<?php  }
?>
<?php get_footer(); ?>