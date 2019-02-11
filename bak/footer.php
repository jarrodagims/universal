<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>

<?php if (!is_front_page()): ?>
</div> <!-- end sidebar container -->
<?php endif;?>
<?php if (!is_page('contact-us')): ?>
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

            <!-- <div class="map col">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13568.887513821299!2d-106.3226118!3d31.7644338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaabe3f730c44f680!2sZia+Homes+Inc!5e0!3m2!1sen!2sus!4v1548778060474"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>


                    </div> -->

            <div class="col map-col">
                <a href="https://goo.gl/maps/Reg1gJNqpC62" target="_blank">

                    <div class="extra-padding">
                        <div id="map" class="map col">

                        </div>
                    </div>

                </a>
            </div>

            <script>
            function initMap() {
                // Styles a map in night mode.

                var myLatLng = {
                    lat: 31.764737609832668,
                    lng: -106.32264095000005
                };

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng, // Configure your latitude and longitude
                    zoom: 14,
                    disableDefaultUI: true,
                    styles: // Please paste the generated code from Style Wizard here.
                        [{
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#212121"
                                }]
                            },
                            {
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "color": "#5e5e5e"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#757575"
                                }]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#212121"
                                }]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#757575"
                                }]
                            },
                            {
                                "featureType": "administrative.country",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#9e9e9e"
                                }]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "administrative.locality",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#bdbdbd"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#757575"
                                }]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#181818"
                                }]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#616161"
                                }]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#1b1b1b"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#2c2c2c"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#8a8a8a"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#373737"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#3c3c3c"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#6e6e6e"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#ffffff"
                                }]
                            },
                            {
                                "featureType": "road.highway.controlled_access",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#4e4e4e"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#616161"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#757575"
                                }]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#000000"
                                }]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#3d3d3d"
                                }]
                            }
                        ]
                });

                var image = '../wp-content/themes/zia-homes/img/mapPin.svg';


                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Zia Homes',
                    icon: image
                });

                marker.setMap(map);


            }
            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-5ozVWQaaSdI_RbSAiSz4A2p509v1IrY&callback=initMap"
                async defer>
            </script>

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
<?php endif; ?>
<div class="sub-footer">
    &copy; <?php echo date('Y'); ?> Zia Homes | All Rights Reserved
</div>
</body>

</html>