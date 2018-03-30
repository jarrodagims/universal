
	<?php if ( !is_home() && !is_front_page() ) : ?>
	<?php if ( is_active_sidebar( 'visitus_widgets' ) ) : ?>
	<section id="visit-section" class="jumbotron">
			<div class="container">
				<div class="row"><?php dynamic_sidebar( 'visitus_widgets' ); ?></div>
			</div>
	</section>
	<?php endif; ?>
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

	<?php if(get_field('sliders-section')){ //if the field is not empty
	?>
	<section id="sliders-section">
		<div class="container">
			<div class="row">
				<?php echo get_field('sliders-section') ?>
			</div>
		</div>
	</section>
<?php } ?>
<?php if(is_active_sidebar( 'form_widgets' )){ //if the field is not empty
	?>
	<section id="contact-form" class="visible-xs">
		<div class="container" id="contact-form2">
			<div class="row">
				<div class="<?=FULLWIDTH?>">
					<?php dynamic_sidebar( 'form_widgets' ); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if(!is_front_page()){ //if the field is not empty
	?>
	<section id="contact-form" class="visible-xs">
		<div class="container" id="contact-form2">
			<div class="row">
				<div class="<?=FULLWIDTH?>">
					<?php echo get_field('contact-form') ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
	<section id="map-section" class="map-section">
			<div class="container-fluid">
				<div class="row">
				<?php if ( is_active_sidebar( 'dir_widgets' ) ) : ?>
					<div class="col-md-12"><?php dynamic_sidebar( 'dir_widgets' ); ?></div>
				<?php endif; ?>
				</div>
			</div>
	</section>
	 <section id="footer">
	        <div class="container">
				<div class="full-height">
				<div class="row">
					<div class="col-md-3 col-xs-12">
						<a class="navbar-brand" href='<?php echo get_site_url() ?>'><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php echo get_bloginfo( 'description' ); ?>" /></a>
					</div>
					<div class="col-md-4 col-xs-12 contact-column">
					<span class="title">Contact</span>
						<div class="row">
						<div class="col-md-6 col-xs-12">
						<?php echo get_option('sherpa_business_address') ?><br />
						<?php echo get_option('sherpa_business_city') ?>, <?php echo get_option('sherpa_business_state') ?>
						<?php echo get_option('sherpa_business_zip') ?>
						</div>
						<div class="col-md-6 col-xs-12">
						T: <?php echo get_option('sherpa_telephone_number') ?><br />
						T: 915.270.1767
							</div>

							</div>
					</div>

						<?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
						<div class="col-md-3 col-xs-12"><?php dynamic_sidebar( 'footer_widgets' ); ?></div>
						<?php endif; ?>


					<?php if ( is_active_sidebar( 'footer_widgets2' ) ) : ?>
					<div class="col-md-2 col-xs-12"><?php dynamic_sidebar( 'footer_widgets2' ); ?>	</div>
					<?php endif; ?>
				</div>
				</div>

				<div class="row hidden-xs">
				<?php echo non_responsive_bs_menu('footer'); ?>
				</div>

				<div class="row visible-xs">
				<?php $sm = new SocialMedia(array('facebook','twitter'));
				$sm->setSize('sm');
				$sm->showNetworkButtons();
				$sm->setColorType('singleColor');

?>
				</div>
			</div>

		</section>
		<section id="sub-footer">
		<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="hidden-xs"><?php $sm = new SocialMedia(array('facebook','twitter'));
						$sm->setSize('sm');
						$sm->showNetworkButtons();
						$sm->setColorType('singleColor');

?></div>
					<div>
					<?php dynamic_sidebar( 'footer_widgets3' ); ?>
					</div>
				</div>
			</div>
		</section>
    <?php wp_footer(); ?>
    </body>
</html>