<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
                <div class="extra-padding">
    			<h1><?=__('Blog','sherpa')?></h1>
				<?php get_template_part('template-parts/content/content', 'archive'); ?>
                </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>