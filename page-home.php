<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>


<section id="home-main">
	<div class="container">
		<div class="row">
            <div class="jumbotron">
                <h1>Criminal Law & Personal Injury</h1>
                <p>EL PASO TX</p>
            </div>
		</div>
	</div>
</section>
<section id="contact-form">
    <div class="container">
        <div class="row">
            <div class="<?=FULLWIDTH?> hidden-xs">
                <?php echo do_shortcode( '[contact-form-7 id="21" title="Contact form 1"]' ); ?>
            </div>
            <div class="<?=FULLWIDTH?> visible-xs">
                <a href="#contact-form2"><button class="btn btn-lrg btn-primary">SCHEDULE YOUR APPOINTMENT</button></a>
            </div>
        </div>
    </div>
</section>
<section id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/who-we-are.jpg" alt="Who We Are" />
            </div>
            <div class="col-md-6 text-center">
                <h4>Who We Are</h4>
                <h3>The Joseph Law Firm</h3>

                <p>The Jon Joseph of the Joseph Law Firm is an attorney dedicated to helping the El Paso community. Whether you’ve been injured in a car accident or need legal defense for a crime committed, we can help you build a strong case.</p>
            </div>
        </div>
    </div>
</section>

<section id="icon-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>What Do We Do?</h4>
                <p class="blurb">At the Joseph Law Firm, we specialize in criminal law and personal injury.
                    We can help you with a variety of cases. Some of the most common include:</p>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon-header">
                                    <img src="<?=STYLEURL?>/img/icon-dwi.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">DWI</div>
                            </div>
                            <p>If you’re charged with a DWI, you may face hefty fines, penalties, and even jail time. Working with a lawyer can help you lessen your punishments, especially if you are a first-time offender. </p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-felonies.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Felonies</div>
                            </div>
                            <p>Felonies can range from burglary and arson to murder and sexual assault. For a felony, one typically receives jail time, numerous fines, and other punishments. </p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-handcuffs.png" alt="DWI" class="icon"  />
                                <div class="icon-bottom">Misdemeanors</div>
                            </div>
                            <p>Misdemeanors may include theft, trespassing, and vandalism and can result in up to one year of jail time.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-drugs.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Drug Defense</div>
                            </div>
                            <p>Drug charges are taken seriously in the state of Texas. They can include possession, distribution, and manufacturing.  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-injury.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Personal Injury</div>
                            </div>
                            <p>Personal injury cases can include slip and fall, negligence, and dog bites, to name a few.  </p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-accidents.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Car Accidents</div>
                            </div>
                            <p>If you were involved in a car accident at the fault of someone else, we can help you be compensated for your injuries and damage sustained to your vehicle. </p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-death.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Wrongful Death</div>
                            </div>
                            <p>If someone you love dies because of someone else’s negligence, we can help you build a case against the negligent person or entity.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-serious-injury.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">Serious Injuries</div>
                            </div>
                            <p>We can help you receive compensation if you have been seriously injured due to another person’s negligence.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="about-header">
</div>
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
