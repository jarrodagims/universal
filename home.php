<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col">
                <div class="extra-padding">
				<?php get_template_part('template-parts/content/content', 'archive'); ?>
                </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>