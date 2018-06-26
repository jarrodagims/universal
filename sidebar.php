<div id="sidebar">
    <div class="right-home-sidebar">
        <div>
            <h3>Facebook</h3>
            <h4 class="hidden-xs">Recent Posts</h4>
            <?php echo do_shortcode('[custom-facebook-feed]'); ?>
            <a href="https://www.facebook.com/Maranatha-Physical-Medicine-Rehabilitation-PLLC-1011419035680375/" target="_blank" target="_blank">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-facebook"></span> Like Our
                    Page
                </button>
            </a>

            <h3>Twitter</h3>
            <h4 class="hidden-xs">Latest Tweets</h4>
            <?php echo do_shortcode('[custom-twitter-feeds]'); ?>
            <a href="https://twitter.com/MaranathaPMR" target="_blank">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-twitter"></span> Follow Us
                </button>
            </a>
        </div>
    </div>
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="31" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="222" title="Contact form 1"]');
            }
            ?>
        </div>
    <?php else : ?>
        <div class="green-box">
            <p>Rehabilitation Medicine as a whole treat several diseases, injuries, and symptoms. The umbrella, the
                focus is broken down to include:</p>
        </div>
    <?php endif; ?>
</div>
