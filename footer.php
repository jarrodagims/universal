<div id="map-section">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.4467991876736!2d-106.29499158484415!3d31.731003281300335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7436466f74de9%3A0x89cd8fa03f0ca35!2sAGI+Marketing!5e0!3m2!1sen!2sus!4v1539116531397"
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col logo-footer">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.svg"
                            alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>"/></a>
            </div>
            <div class="col phone-footer">
                <a href="tel:9152095381">915.209.5381</a>
            </div>

            <div class="col address-footer">
                <p>1370 Pullman Dr, Suite G<br />El Paso, TX 79936</p>
            </div>

            <div class="col button-footer">
                <div>
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn btn-primary">
                            Send Me Some Info About Digital Marketing
                        </button>
                    </a>
                </div>
            </div>
            <div class="col">
                <?php $sm = new SocialMedia(array('facebook', 'twitter', 'linkedin', 'youtube'));
                $sm->setSize('md');
                $sm->showNetworkButtons(); 
                $sm->setColorType('singleColor');
                ?>
                <p class="small">Privacy Policy | Site Copyright &copy; <?php echo date('Y'); ?> <img class="logo-sm" src="<?= IMGURL ?>agi-cool.svg" alt="AGI Marketing" /></p>
            </div>
            <div class="d-none d-sm-block d-md-none">
                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>