<?php get_header(); ?>
<?php get_template_part('template-parts/page/page', 'top-banner'); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('template-parts/content/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template-parts/page/page', 'middle-banner'); ?>
<?php get_template_part('template-parts/page/page', 'circles'); ?>
<?php get_template_part('template-parts/page/page', 'icons'); ?>
<?php get_template_part('template-parts/page/page', 'bottom-banner'); ?>
<?php get_template_part('template-parts/page/page', 'ribbon'); ?>
<?php get_template_part('template-parts/page/page', 'bottom-list'); ?>
<?php get_template_part('template-parts/page/page', 'bottom'); ?>
<?php get_template_part('template-parts/page/page', 'google-banner'); ?>
<?php get_template_part('template-parts/page/page', 'contact'); ?>
<?php get_footer(); ?>