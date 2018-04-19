<div id="sidebar" class="col-md-4">
    <?php if (is_page('contact')) {
        ?>
        <section id="contact-form">
            <div>
                <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
            </div>
        </section>
    <?php } ?>
    <?php if (!is_page('contact')) { //if the field is not empty
        ?>
        <section id="contact-form">
            <div>
                <?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]'); ?>
            </div>
        </section>
    <?php } ?>

    <div class="container-fluid bg-shield">
        <div class="bg">
            <div class="col-xs-12 text-center shield-container">
                <div class="shield-icon">

                    <div class="circle">
                        <span class="check-front"></span>
                        <span class="check">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 64.6 48.3" style="enable-background:new 0 0 64.6 48.3;"
                                         xml:space="preserve" class="svg-check">
<g id="Layer_2_1_">
	<g id="Layer_4">
		<path class="st0" d="M8,16.1l15.8,18.1L56.8,0l7.7,8.9L24.4,48.3L0,25.2L8,16.1z"/>
	</g>
</g>
</svg>
</span></div>
                </div>
            </div>
            <div class="col-xs-12 bg-transparent">
                <p>The following are a few examples of locations<br/>
                    we proudly protect:
                </p>
                <ul>
                    <li><span>Residential</span></li>
                    <li><span>Fast Food Restaurants</span></li>
                    <li><span>Construction Sites</span></li>
                    <li><span>Hotels & Motels</span></li>
                    <li><span>Warehouses</span></li>
                    <li><span>Federal</span></li>
                    <li><span>Shipping and Logistics</span></li>
                    <li><span>Investigative service</span></li>
                    <li><span>School Perimeters</span></li>
                    <li><span>Patrol</span></li>
                    <li><span>Churches</span></li>
                    <li><span>Empty & Abandoned Buildings</span></li>
                    <li><span>Event & Front Desk Security</span></li>
                    <li><span>Retail</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>