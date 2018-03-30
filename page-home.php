<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<div id="home-bg">
<section id="home-main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('template-parts/content', 'page-home'); ?>
			</div>
		</div>
	</div>
</section>
<?php if(get_field('contact-form')){ //if the field is not empty
	?>
	<section id="contact-form">
		<div class="container">
			<div class="row">
				<div class="<?=FULLWIDTH?> hidden-xs">
					<?php echo get_field('contact-form') ?>
				</div>
				<div class="<?=FULLWIDTH?> visible-xs">
					<a href="#contact-form2"><button class="btn btn-lrg btn-primary">SCHEDULE YOUR APPOINTMENT</button></a>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
</div>
<?php if(get_field('main-content')){ //if the field is not empty
	?>
	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="<?=FULLWIDTH?>">
					<?php echo get_field('main-content', false, false) ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<div class="about-header">
</div>
<?php if(get_field('about-section', false, false)){ //if the field is not empty
	?>
	<section id="about-section">
		<div class="container">
			<div class="row">
				<?php echo get_field('about-section') ?>
			</div>
		</div>
	</section>
<?php } ?>
<?php if ( is_front_page() ) : ?>
<section id="two-pane">
		<div class="container-fluid">
			<div class="row">
			<?php if ( is_active_sidebar( 'shutter_widgets' ) ) : ?>
				<div class="col-md-6 col-xs-6"><?php dynamic_sidebar( 'shutter_widgets' ); ?></div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'cabinet_widgets' ) ) : ?>
				<div class="col-md-6 col-xs-6"><?php dynamic_sidebar( 'cabinet_widgets' ); ?></div>
			<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php if(get_field('dark-section')){ //if the field is not empty
	?>
	<section id="dark-section">
		<div class="container">
			<div class="row">
				<?php echo get_field('dark-section') ?>
			</div>
		</div>
	</section>
<?php } ?>
<?php get_footer(); ?>
