<?php get_header();

/*
    Template Name: Home
*/ ?>
<div class="sidebar-container">
    <div class="nav-sidebar"></div>

    <div class="content">
        <section class="home-module-1">
            <?php echo get_template_part('template-parts/navbar'); ?>
            <div class="jumbotron">
                <div class="jumbo-content">
                    <h2>Home Builder</h2>
                    <h1>BUILDING HOMES <span class="br-xs">THAT
                            <span class="br-md">LOOK ALMOST AS <span class="br-xs">GOOD AS YOU!</span></span></span>
                    </h1>

                    <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                        <button class="btn btn-primary">
                            CONTACT US
                        </button>
                    </a>

                    <a href="<?=SITEURL?>/contact-us/" class="learn-more">
                        <button class="btn btn-primary btn-transparent">
                            Learn More
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section class="home-module-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>WHERE FUN, COMFORT, AND
                            <span class="br-md">QUALITY COLLIDE TO BRING YOU</span>
                            THE PERFECT HOME</h2>
                        <h3>Well, you’ve certainly arrived at the right place and we’re so happy you did!
                        </h3>
                        <p>Zia Homes considers home building both a joy and a privilege. We incorporate a playful
                            attitude
                            to
                            make the process of buying a new home one that’s easy to follow and doesn’t feel stiff or
                            exhausting. Our homes are comfortable and built with the quality one should receive in a
                            21st
                            century home. And most
                            importantly, we keep you—the future dweller— at heart in everything we do.
                        </p>

                        <a href="<?=SITEURL?>/contact-us/" class="contact-us"
                            style="-webkit-transform: translateZ(0px);">
                            <button class="btn btn-primary" style="-webkit-transform: translateZ(0px);">
                                MORE ABOUT US
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <img src="<?=IMGURL?>bg-interior.jpg" alt="Interior">
                    </div>
                </div>
            </div>
        </section>

        <section class="ribbon">

        </section>

        <section class="home-module-3">
            <div class="container">
                <div class="row">
                    <div class="col full-height">
                        <div>
                            <div class="row">
                                <div class="col floor-header number-header">
                                    <h2>FLOORPLANS</h2>
                                </div>
                            </div>
                            <div class="row full-height">
                                <div class="col floor-header">


                                    <h3>POPLIN</h3>
                                </div>
                                <div class="col">


                                    <table class="floorplan" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>FLOORPLAN</td>
                                            <td>SINGLE STORY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LIVING AREA
                                            </td>
                                            <td>1750 SQ. FT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BEDROOMS
                                            </td>
                                            <td>4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BATHEOOMS
                                            </td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>PRICE
                                            </td>
                                            <td><span class="brand">$280,000</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row row-buttons">
                                <div class="col">
                                    <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                                        <button class="btn btn-primary">
                                            VIEW OUR FLOORPLANS
                                        </button>
                                    </a>

                                    <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                                        <button class="btn btn-outline">
                                            <span>SCHEDULE A TOUR</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col">
                        <img src="<?=IMGURL?>3d.png" alt="3d View">
                    </div>
                </div>
            </div>
            <ul class="slide-nav">
                <li class="active"><a href="#">POPLIN</a></li>
                <li><a href="#">PAISLEY</a></li>
                <li><a href="#">CAMBRIC</a></li>
                <li><a href="#">VELOUR</a></li>
                <li><a href="#">TRELLIS</a></li>
            </ul>
        </section>

        <section class="home-module-4">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>THE ANSWER IS SIMPLE.
                            <span class="br-md">WE UNDERSTAND THE NEEDS OF</span> EL PASO RESIDENTS. </h2>

                        <p>
                            Just like ordering a dish that contains all the right flavors, we construct homes with all
                            the
                            right
                            ingredients and the finished product is one you’ll certainly enjoy. Like our saying goes,
                            we’re
                            the
                            cheese to your enchiladas and we say that for a reason!
                        </p>

                        <p>Our decades of experience as a home builder in the Sun City has given us the ability to test
                            out
                            different ingredients, play with design, then share them with the community. We have a keen
                            understanding of comfort, luxury, and quality. You’ll find that our homes incorporate these
                            traits
                            into the aesthetics both indoors and outdoors. From the moment you arrive at your front
                            driveway
                            to
                            walking into the hallway that leads to the living space — we bring to life an opulence that
                            can
                            be
                            felt throughout the entire home. Just like every bite you take should taste delicious, we
                            believe in
                            providing that same goodness.</p>


                        <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-primary">
                                CHECK OUT OUR FEATURES
                            </button>
                        </a>

                    </div>
                    <div class="col">


                    </div>
                </div>
            </div>

        </section>

        <section class="ribbon-2">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-md-start justify-content-center align-items-center">
                        CONTACT US TODAY! <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-secondary">
                                CONTACT US
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-module-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <h2>YOU KNOW WHAT MAKES US GOOD…
                            <span class="br-md">HERE’S WHAT MAKES US THE BEST</span>

                        </h2>

                        <p>
                            Our secret family recipe consists of building high-quality homes at affordable prices. Once
                            you
                            add
                            in excellent customer service, you have a recipe for success! As a home builder who places
                            their
                            future homeowners at the forefront of everything we do, we have plenty of additional
                            upgrades to
                            choose from, we guarantee you will find exactly what you’re looking for, plus more! </p>

                        <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-primary">
                                READ OUR FAQ
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-module-6">
            <div class="container">

                <div class="row">
                    <div class="col">

                        <h2>HERE’S WHAT YOU GET WHEN <span class="br-xs">YOU CHOOSE ZIA HOMES</span>
                            <span class="br-md br-xs">AS YOUR HOME BUILDER:</span></h2>

                        <div class="row">

                            <div class="col">
                                <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                    <div class="extra-padding">
                                        <h3>BEAUTIFUL
                                            <span class="br-md">LANDSCAPING</span></h3>
                                        <p>At Zia Homes, we believe that a beautiful home begins from the outside in.
                                            Whether
                                            you
                                            are
                                            interested in the addition of grass, trees or rocks, we can customize your
                                            yard
                                            according to
                                            your liking. Curb appeal will be heightened to the max! </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mini-card"><img src="<?=IMGURL?>partners.jpg" alt="">
                                    <div class="extra-padding">
                                        <h3>
                                            A PARTNER WHO
                                            <span class="br-md">COMMUNICATES</span></h3>
                                        <p>There’ll be no shortage of emails, phone calls, or text
                                            message to go around! Because when you choose to work with us, we take that
                                            relationship
                                            seriously. We’re always attentive to your needs and do our best to provide
                                            you
                                            with
                                            answers
                                            quickly and thoughtfully. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mini-card"><img src="<?=IMGURL?>buyers.jpg" alt="">
                                    <div class="extra-padding">
                                        <h3>
                                            A COMPREHENSIVE
                                            <span class="br-md">BUYER’S WARRANTY</span>
                                        </h3>
                                        <p>Feel confident knowing the home of your dreams is under warranty. Zia Homes
                                            offers an
                                            all-inclusive warranty that includes a two-year systems warranty and a 10
                                            year
                                            extended
                                            warranty. So even if there are hiccups along the way, they will be gone in
                                            no
                                            time!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-buttons">
                            <div class="col">
                                <a href="<?=SITEURL?>/blog/" class="contact-us">
                                    <button class="btn btn-primary">
                                        CHECK OUT OUR BLOG
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col contact-form">
                        <span class="number">06</span>
                        <h2>
                            Ready To Meet Your Future Home?
                            <span class="br-md">It’s Waiting To Meet You Too!</span>
                        </h2>

                        <p>
                            <span class="br-md">We know the excitement can be hard to contain and at the same time, it
                                can feel extremely</span>
                            <span class="br-md">overwhelming. But not to worry, as the saying goes, an action is the
                                solution to fear. At
                                Zia
                                Homes,</span>
                            <span class="br-md">we’ll help guide you in finding the perfect home. Our team will gladly
                                answer your initial
                                questions</span>
                            and guide you down the path of becoming a happy new homeowner. <a
                                href="tel:
    9155918153">Give us
                                a
                                call today</a>!</p>


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

                    <div id="map" class="map col"></div>
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

                        var image = '/wordpress/wp-content/themes/zia-homes/img/mapPin.svg';


                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'Hello World!',
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
                                <h3>
                                    CONTACT</h3>

                                <p>2244 Trawood Dr # 207, El Paso, Tx 79935</p>

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
        </section>

    </div>
</div>

<?php get_footer(); ?>