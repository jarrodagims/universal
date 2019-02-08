<?php get_header(); /*
Template Name: About Us
 */?><?php get_template_part('template-parts/page/page', 'top-banner');?>
<section id="main" class="about-us">
    <article>
        <div class="content page-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row reverse">
                            <div class="col"> <img src="<?=IMGURL?>bg-chairs.jpg" alt="" />
                            </div>
                            <div class="col offset-left">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="img-row">
                            <hr />
                            <div class="row text-center">
                                <div class="col">
                                    <h2>OUR TEAM INCLUDES <span class="br-md">THE FOLLOWING MEMBERS:</span></h2>
                                </div>
                            </div>
                            <div class="d-flex row text-center img-row">
                                <div class="col"> <img class="alignnone wp-image-54 size-full"
                                        src="<?=IMGURL?>viviana.jpg" alt="" width="406" height="352" />
                                    <p>
                                        VIVIANA RONQUILLO <br />CEO
                                    </p> <a href="mailto:ziainc@sbcglobal.net">ziainc@sbcglobal.net</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-56 size-full" src="<?=IMGURL?>rene.jpg"
                                        alt="" width="406" height="352" />
                                    <p>
                                        RENE BOTELLO <br />MARKETING DIRECTOR
                                    </p> <a href="mailto:renebotello@summusrealty.com">renebotello@summusrealty.com</a>
                                </div>
                                <div class="col"> <img class="alignnone wp-image-57 size-full" src="<?=IMGURL?>ana.jpg"
                                        alt="" width="406" height="352" />
                                    <p>
                                        ANA HERNANDEZ <br />SOCIAL MEDIA MANAGER
                                    </p> <a
                                        href="mailto:anahernandez@summusrealty.com">anahernandez@summusrealty.com</a>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div><img class="alignleft size-full wp-image-73" src="<?=IMGURL?>handshake.jpg" alt=""
                                width="556" />
                            <h2>Our Mission
                            </h2>


                            <p>Zia Home’s mission is to provide El Pasoans high-quality homes that provide comfortable
                                and safe living at affordable prices. We strive to be on the cutting edge of home
                                building and energy codes to bring you the best homes in El Paso, Texas.
                            </p>

                            <h2>Our Vision
                            </h2>


                            <p>We envision a community where new and seasoned families alike can achieve their goals of
                                becoming homeowners.
                            </p>

                            <h2>About Our Employees
                            </h2>


                            <p>You’ll quickly learn that the crew at Zia Homes are some of the nicest, if not the
                                nicest, group of people you’ll ever meet. We don’t just say this because we like talking
                                good about ourselves, we genuinely believe in being good-hearted people and it reflects
                                in our everyday interactions with potential homeowners. Customer service,
                                professionalism, and diligence are at the core of our business practices.
                            </p>

                            <h2>Who We Serve</h2>
                            <p>We build homes throughout the entire El Paso area. The majority of our lots are located
                                on the east side of town with some on the west side as well. Please see our list of
                                available lots, where we continuously add new homes and provide you with insight into
                                our inventory.</p>
                            <h2>What Sets Us Apart?</h2>
                            <p>Beyond being your trusted home builder, you can count on Zia Homes to deliver a finished
                                product that is completed to your satisfaction. Before we hand over your keys, you’ll
                                have the opportunity to inspect and request adjustments so that once move-in day
                                arrives, you can begin your next journey as a homeowner with peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner banner-bottom">
                <img src="<?=IMGURL?>bg-mid-banner.jpg" class="bg-banner-bottom" alt="Real Estate">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-bottom">
                            <div class="text-center">
                                <h2>About Zia Homes’ Quality Assurance</h2>
                                <p>At Zia Homes, we pride ourselves in building a quality home from the ground up. We
                                    take great lengths to ensure every house built has passed a three-phase quality
                                    assurance process. The inspections are conducted by a licensed real estate inspector
                                    who is responsible for providing us with a written report of each inspection. The
                                    field superintendents use this report to correct any defects prior to delivering the
                                    house to the buyers.
                                </p>
                            </div>

                            <div class="highlight-box">
                                <div class="box-header">
                                    <p>Below are the three inspections that are conducted on every house: </p>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        Pre-Slab Inspection. This initial phase will ensure that the house is squared
                                        and is
                                        placed correctly on the property.
                                    </div>
                                    <div class="col">
                                        Pre-Roof Inspection. In this next step, we ensure that
                                        the framing and the prep work on the roof are done correctly before the roof is
                                        installed.
                                    </div>
                                    <div class="col">
                                        Pre-Walk Through Inspection. During this final phase of inspection, we will
                                        ensure that the house has been detailed and is ready for the buyer’s New Home
                                        Orientation.</div>
                                </div>
                            </div>

                            <h2>Come See Us in Person</h2>
                            <p>Our main office is located on the east side of town on 2077 N. Zaragoza #B203, El Paso,
                                TX 79938. We’re happy to assist you Monday through Friday from 9 a.m. to 5 p.m. and on
                                Saturdays by appointment. </p>
                            <h2>Connect With Us Today!</h2>
                            <p>Now that you’ve learned a thing or two about us, we want to get to know you! Please feel
                                free to give us a call at <a href="tel:<?php printPhone();?>"><?php printPhone();?></a>.
                                We look forward to meeting you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<?php get_footer();?>