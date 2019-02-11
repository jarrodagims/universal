<?php get_header();

/*
Template Name: Home
 */?>
<div class="sidebar-container">
    <div class="nav-sidebar"></div>

    <div class="content">
        <section id="home-module-1" class="home-module-1 waypoint">

            <?php echo get_template_part('template-parts/navbar'); ?>
            <div class="jumbotron">
                <div class="jumbo-content">
                    <div>
                        <div class="h2">Home Builder</div>
                        <h1>
                            <div class="fade-down">
                                <?php if( $h1 = get_field('custom_h1') ) : ?>

                                <?php echo $h1 ?>

                                <?php else : ?>
                                BUILDING HOMES <span class="br-xs">THAT
                                    <span class="br-md">LOOK ALMOST AS <span class="br-xs">GOOD AS
                                            YOU!</span></span></span>

                                <?php endif; ?>
                            </div>
                        </h1>

                        <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-primary">
                                CONTACT US
                            </button>
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <section id="home-module-2" class="home-module-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="extra-padding">
                            <?php if( $section_1_title = get_field('section_1_title') ) : ?>

                            <?php echo $section_1_title ?>

                            <?php else : ?>
                            <h3>Welcome to Zia Homes — Where Fun, Comfort, and Quality Collide To Bring You the Perfect
                                Home
                            </h3>
                            <?php endif; ?>
                            <div class="h4 expander" data-toggle="collapse" data-target="#collapse"
                                aria-expanded="false" aria-controls="collapse"><span>So you’re looking for a new home?
                                    Well, you’ve certainly arrived at the right place and we’re so happy you did!</span>
                            </div>
                            <h2 class="collapse expand" id="collapse">
                                <ul class="expand">
                                    <li>Best modern home builder in the El Paso area since 1985.</li>
                                    <li>We are a top performing new home builder.</li>
                                    <li>Our homes are highly reviewed by current homeowners.</li>
                                    <li>As a local builder for over 30 years, we consistently strive for customer
                                        satisfaction.</li>
                                    <li>When it comes to comfort and luxury, you get them both with Zia Homes!</li>
                                    <li>We do our best to provide custom homes, built with you in mind.</li>
                                    <li>Quality is in our DNA.</li>
                                    <li>To learn about our warranty, connect with us today.</li>
                                    <li>We take your reviews to heart. Let us know what you like, what you don’t like,
                                        and how we can improve our services.</li>
                                    <li>Our goal is to receive the highest rating possible from you — the future
                                        homeowner!
                                    </li>
                                    <li>We can help make your desired upgrades a reality, simply tell us what you have
                                        in mind.</li>
                                    <li>Be sure to check our Facebook for Open House events.</li>
                                    <li>When it comes to the construction of your home, we’ll guide you through every
                                        step of the way.</li>
                                    <li>Our lots are primarily located on the east side of town, with some on the far
                                        west side.</li>
                                    <li>Come experience our model homes in person!</li>
                                </ul>
                            </h2>

                            <?php if( $section_1_text = get_field('section_1_text') ) : ?>

                            <?php echo $section_1_text ?>

                            <?php else : ?>

                            <p>Zia Homes considers home building both a joy and a privilege. We incorporate a playful
                                attitude to make the process of buying a new home one that’s easy to follow and doesn’t
                                feel stiff or exhausting. <span class="br-xs">Our homes are comfortable and built with
                                    the quality one should receive in a 21st century home. And most importantly, we keep
                                    you—the future dweller— at heart in everything we do.</span>
                            </p>
                            <?php endif; ?>
                            <a href="<?=SITEURL?>/about-us/" class="contact-us"
                                style="-webkit-transform: translateZ(0px);">
                                <button class="btn btn-primary" style="-webkit-transform: translateZ(0px);">
                                    MORE ABOUT US
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="extra-padding">
                            <picture>
                                <source srcset="<?=IMGURL?>bg-interior.jpg" media="(min-width: 992px)">
                                <img src="<?=IMGURL?>interior-sm.jpg" alt="Interior" />
                            </picture>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ribbon">

        </section>

        <section id="home-module-3" class="home-module-3">



            <div class="container">

                <div class="slide-next"></div>

                <div class="slideshow">


                    <?php  wp_reset_postdata();
                $paged = get_query_var('paged') ? get_query_var('paged') : 1; //The magic, ternary if statement


                // if ( get_query_var('paged') ) $paged = get_query_var('page');
                // if ( get_query_var('page') ) $paged = get_query_var('page');
            
                $tax_post_args = array(
                            'post_type' => 'floorplan',
                            'posts_per_page' => 5,
                            'order' => 'ASC',
                            'paged' => $paged
                        );
                  
                        $query = new WP_Query( $tax_post_args );

                        $posts_per_row = 3;
                        $post_counter = 0;

                        if ( $query->have_posts() ) : ?>

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="col img-container d-lg-none">
                                            <?php
                                        $image = get_field('3d_image');
                                        if( !empty($image) ): ?>
                                            <img src="<?php echo $image['url']; ?>"
                                                alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col">
                                            <table class="floorplan" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>FLOORPLAN</td>
                                                    <td><?php echo get_field('floorplan'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>LIVING AREA
                                                    </td>
                                                    <td><?php echo get_field('living_area'); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BEDROOMS
                                                    </td>
                                                    <td><?php echo get_field('bedrooms'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>BATHROOMS
                                                    </td>
                                                    <td><?php echo get_field('bathrooms'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>PRICE
                                                    </td>
                                                    <td><span class="brand"><?php echo get_field('price'); ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row row-buttons">
                                        <div class="col">
                                            <a href="<?=SITEURL?>/floor-plans/" class="contact-us">
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
                            <div class="col d-none d-lg-block img-container">
                                <?php
                                        $image = get_field('3d_image');
                                        if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <?php endwhile; wp_reset_postdata(); ?>

                    <!-- show pagination here -->
                    <?php else : ?>

                    <!-- show 404 error here -->
                    <?php endif; ?>
                </div>
            </div>


            <ul class="slide-nav">
                <?php  wp_reset_postdata();
                $paged = get_query_var('paged') ? get_query_var('paged') : 1; //The magic, ternary if statement


                // if ( get_query_var('paged') ) $paged = get_query_var('page');
                // if ( get_query_var('page') ) $paged = get_query_var('page');
            
                $tax_post_args = array(
                            'post_type' => 'floorplan',
                            'posts_per_page' => 5,
                            'order' => 'ASC',
                            'paged' => $paged
                        );
                  
                        $query = new WP_Query( $tax_post_args );

                        $posts_per_row = 3;
                        $post_counter = 0;

                        if ( $query->have_posts() ) : ?>

                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <li><a href="#"><?php the_title(); ?></a></li>


                <?php endwhile; wp_reset_postdata(); ?>

                <!-- show pagination here -->
                <?php else : ?>

                <!-- show 404 error here -->
                <?php endif; ?>
            </ul>
        </section>

        <section id="home-module-4" class="home-module-4">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="extra-padding">

                            <?php if( $section_4 = get_field('section_4') ) : ?>

                            <?php echo $section_4 ?>

                            <?php else : ?>
                            <h3>Why Choose Zia Homes?</h3>

                            <p>The answer is simple. We understand the needs of El Paso residents. Just like ordering a
                                dish
                                that contains all the right flavors, we construct homes with all the right ingredients
                                and
                                the finished product is one you’ll certainly enjoy. Like our saying goes, we’re the
                                cheese
                                to your enchiladas and we say that for a reason!
                            </p>

                            <p>Our decades of experience as a home builder in the Sun City has given us the ability to
                                test
                                out different ingredients, play with design, then share them with the community. We have
                                a
                                keen understanding of comfort, luxury, and quality. You’ll find that our homes
                                incorporate
                                these traits into the aesthetics both indoors and outdoors. From the moment you arrive
                                at
                                your front driveway to walking into the hallway that leads to the living space — we
                                bring to
                                life an opulence that can be felt throughout the entire home. Just like every bite you
                                take
                                should taste delicious, we believe in providing that same goodness.</p>

                            <?php endif; ?>


                            <a href="<?=SITEURL?>/our-home-features/" class="contact-us">
                                <button class="btn btn-primary">
                                    CHECK OUT OUR FEATURES
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                    <img src="<?=IMGURL ?>family-sm.jpg" alt="Why choose Zia Homes" class="d-lg-none " />
        </section>

        <section class="ribbon-2">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-md-start justify-content-center align-items-center">
                        <div>CONTACT US TODAY!</div> <a href="<?=SITEURL?>/contact-us/" class="contact-us">
                            <button class="btn btn-secondary">
                                CONTACT US
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section id="home-module-5" class="home-module-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="extra-padding">
                            <?php if( $section_3 = get_field('section_3') ) : ?>

                            <?php echo $section_3 ?>

                            <?php else : ?>
                            <h3>YOU KNOW WHAT MAKES US GOOD…
                                <span class="br-md">HERE’S WHAT MAKES US THE BEST</span>
                            </h3>

                            <p>Our secret family recipe consists of building high-quality homes at affordable prices.
                                Once you add in excellent customer service, you have a recipe for success! As a home
                                builder who places their future homeowners at the forefront of everything we do, we have
                                plenty of additional upgrades to choose from, we guarantee you will find exactly what
                                you’re looking for, plus more! </p>

                            <?php endif; ?>


                            <a href="<?=SITEURL?>/real-estate-el-paso/" class="contact-us">
                                <button class="btn btn-primary">
                                    READ OUR FAQ
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-module-6" class="home-module-6">
            <div id="slide-blog-nav" class="pager">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col">

                        <div class="extra-padding">


                            <?php if( $section_5_title = get_field('section_5_title') ) : ?>

                            <?php echo $section_5_title ?>

                            <?php else : ?>

                            <h2>HERE’S WHAT YOU GET WHEN <span class="br-xs">YOU CHOOSE ZIA HOMES</span>
                                <span class="br-md br-xs">AS YOUR HOME BUILDER:</span></h2>

                            <?php endif;?>

                            <div class="row slideshow-blog">

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>A Killer <span class="br-md">Appliance Package</span></h3>
                                            <p>Imagine cooking up a storm with an exquisite stainless-steel appliance
                                                package. When you close on a home using our valued partner, that’s
                                                exactly what you’ll get.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>BEAUTIFUL
                                                <span class="br-md">LANDSCAPING</span></h3>
                                            <p>At Zia Homes, we believe that a beautiful home begins from the outside
                                                in. Whether you are interested in the addition of grass, trees or rocks,
                                                we can customize your yard according to your liking. Curb appeal will be
                                                heightened to the max! </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>landscaping.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>The Best Features <span class="br-md">in the Sun City</span></h3>
                                            <p>Our homes are equipped to include the standard features we believe all
                                                homeowners should receive in a modern, luxury home. Come see them for
                                                yourself, today.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>partners.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>Energy-Efficient <span class="br-md">Throughout</span></h3>
                                            <p>Modern homes should take into account the realities of the environment
                                                and the need for sustainability. When you invest in a home, you’re
                                                investing in the future and that means the future of your children and
                                                their community. For those reasons, we attempt to provide
                                                energy-efficiency throughout our homes, giving you the opportunity to
                                                reduce costs and better the environment.</p>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>partners.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>
                                                A PARTNER WHO
                                                <span class="br-md">COMMUNICATES</span></h3>
                                            <p>There’ll be no shortage of emails, phone calls, or text messages to go
                                                around! Because when you choose to work with us, we take that
                                                relationship seriously. We’re always attentive to your needs and do our
                                                best to provide you with answers quickly and thoughtfully.</p>
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
                                            <p>Feel confident knowing the home of your dreams is under warranty. Zia
                                                Homes offers an all-inclusive warranty that includes a two-year systems
                                                warranty and a 10 year extended warranty. So even if there are hiccups
                                                along the way, they will be gone in no time!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col">
                                    <div class="mini-card"><img src="<?=IMGURL?>buyers.jpg" alt="">
                                        <div class="extra-padding">
                                            <h3>
                                                And Best of All, <span class="br-md">Peace of Mind!</span>
                                            </h3>
                                            <p>Whether you are moving from an apartment, an older home, or your
                                                brother’s basement, moving is stressful. We take that stress away by
                                                ensuring you’re completely satisfied and secure in your decision.
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
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
            </div>

        </section>
    </div>
</div>

<?php get_footer();?>