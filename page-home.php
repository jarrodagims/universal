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

                <p>Jon Joseph of the Joseph Law Firm is an attorney dedicated to helping the El Paso community. Whether you’ve been injured in a car accident or need legal defense for a crime committed, we can help you build a strong case.</p>
            </div>
        </div>
    </div>
</section>

<section class="icon-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>What Do We Do?</h4>
                <p class="blurb">At the Joseph Law Firm, we specialize in criminal law and personal injury.
                    We can help you with a variety of cases. Some of the most common include:</p>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/dwi/">
                                <div class="icon-header">
                                    <img src="<?=STYLEURL?>/img/icon-dwi.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>DWI</span>
                                    <span class="icon-plus">+</span>
                                </div>
                             </div>
                            </a>
                            <p>If you’re charged with a DWI, you may face hefty fines, penalties, and even jail time. Working with a lawyer can help you lessen your punishments, especially if you are a first-time offender. </p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/serious-felonies/">
                                <div class="icon-header">
                                    <img src="<?=STYLEURL?>/img/icon-felonies.png" alt="Felonies" class="icon" />
                                    <div class="icon-bottom">
                                        <span>Felonies</span>
                                        <span class="icon-plus">+</span>
                                    </div>
                                </div>
                            </a>
                            <p>Felonies can range from burglary and arson to murder and sexual assault. For a felony, one typically receives jail time, numerous fines, and other punishments. </p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/misdemeanors/">
                                <div class="icon-header">
                                    <img src="<?=STYLEURL?>/img/icon-handcuffs.png" alt="Misdemeanors<" class="icon"  />
                                    <div class="icon-bottom">
                                        <span>Misdemeanors</span>
                                        <span class="icon-plus">+</span>
                                    </div>
                                </div>
                            </a>
                            <p>Misdemeanors may include theft, trespassing, and vandalism and can result in up to one year of jail time.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/drug-defense/">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-drugs.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>Drug Defense</span>
                                    <span class="icon-plus">+</span>
                                </div>
                            </div>
                            </a>
                            <p>Drug charges are taken seriously in the state of Texas. They can include possession, distribution, and manufacturing.  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/personal-injury-lawyer/">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-injury.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>Personal Injury</span>
                                    <span class="icon-plus">+</span>
                                </div>
                            </div>
                            </a>
                            <p>Personal injury cases can include slip and fall, negligence, and dog bites, to name a few.  </p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/car-accidents/">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-accidents.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>Car Accidents</span>
                                    <span class="icon-plus">+</span>
                                </div>
                            </div>
                            </a>
                            <p>If you were involved in a car accident at the fault of someone else, we can help you be compensated for your injuries and damage sustained to your vehicle. </p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/wrongful-death/">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-death.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>Wrongful Death</span>
                                    <span class="icon-plus">+</span>
                                </div>
                            </div>
                            </a>
                            <p>If someone you love dies because of someone else’s negligence, we can help you build a case against the negligent person or entity.</p>
                        </div>
                        <div class="col-md-3">
                            <a href="<?=SITEURL?>/serious-injuries/">
                            <div class="icon-header">
                                <img src="<?=STYLEURL?>/img/icon-serious-injury.png" alt="DWI" class="icon" />
                                <div class="icon-bottom">
                                    <span>Serious Injuries</span>
                                    <span class="icon-plus">+</span>
                                </div>
                            </div>
                            </a>
                            <p>We can help you receive compensation if you have been seriously injured due to another person’s negligence.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="about-header">
    <div class="container">
        <div class="jumbotron text-center">
            <h2>We can also help you with domestic crimes, theft crimes, defective product cases, medical malpractice, and premise liability cases. </h2>

            <a href="<?=SITEURL?>/criminal" class="btn btn-primary btn-md">Learn More</a>
        </div>
    </div>
</div>

<div class="banner-hero container">
    <div class="banner-bg">
        <div class="block-left">

        </div>
    </div>
    <div class="banner"><p>If you’ve been charged with a crime or need representation
            for a personal injury case, we can help.</p> <a href="<?=SITEURL?>/criminal/"><button class="btn btn-md btn-success">LEARN MORE</button></a></div>
    <div class="banner-bottom">
        Call to schedule a consultation today!
    </div>
</div>
<div class="jumbotron text-center location-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?=STYLEURL?>/img/map-pin.png" alt="Directions" />

                <h3>Where We Are Located</h3>

                <p>The <strong>Joseph Law Firm</strong> is located in the heart of downtown El Paso. We’re dedicated to serving the El Paso community because we know that when you need legal representation, you deserve nothing but the best. With personalized assistance, we can help you build a strong case.</p>
        </div>
    </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.388304874376!2d-106.49007768442243!3d31.75989354245232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e758562239e3a1%3A0x305a29935ab6472e!2sThe+Law+Offices+of+Joseph+D.+Vasquez!5e0!3m2!1sen!2sus!4v1522682034508" width="100%" height="176" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php get_footer(); ?>
