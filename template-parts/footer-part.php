<section id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col contact-form">
                <span class="number">06</span>


                <?php if( $section_6 = get_field('section_6') ) : ?>

                <?php echo $section_6 ?>

                <?php else : ?>

                <h2>
                    Ready To Meet Your Future Home?
                    <span class="br-md">It’s Waiting To Meet You Too!</span>
                </h2>

                <p>We know the excitement can be hard to contain and at the same time, it can feel extremely
                    overwhelming. But not to worry, as the saying goes, an action is the solution to fear. At
                    Zia Homes, we’ll help guide you in finding the perfect home. Our team will gladly answer
                    your initial questions and guide you down the path of becoming a happy new homeowner. <a
                        href="tel:<?php printPhone();?>">Give us a call today!</a></p>

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



            <div class="col map-col">
                <a href="https://goo.gl/maps/Reg1gJNqpC62" target="_blank">

                    <div class="extra-padding">
                        <div id="map" class="map col">

                        </div>
                    </div>

                </a>
            </div>

            <div class="col box-container">
                <div class="contact-box">
                    <div>
                        <div>
                            <h3>CONTACT</h3>

                            <p><?php if (!empty(get_option('sherpa_business_address'))): ?>

                                <?=get_option('sherpa_business_address')?>

                                <?php endif;?>
                                <br />
                                <a href="tel:<?php printPhone();?>"><?php printPhone();?></a></p>


                            <h3>OFFICE HOURS</h3>

                            <p>Monday – Friday: 9 AM – 5 PM<br />
                                Saturday: By Appointment</p>

                            <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>