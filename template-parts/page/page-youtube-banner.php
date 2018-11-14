<?php if (get_field('banner_middle_bg')) :
    $bg =  get_field('banner_middle_bg');
    ?>
    <section class="banner-middle youtube-banner" style="<?php if(get_field('banner_middle_bg')) : echo "background-image: url(" . $bg['url'] . ");";  endif; ?>">
        <div class="container">
            <div class="row icon-row">
                <div class="col">
                    <img src="<?= IMGURL ?>icon-youtube.svg" alt="Youtube" />
                    <p class="title">YouTube charges only when<br />
                    someone watches your ad.<br />
                        And it is only <span class="brand">$0.10 per view</span>.</p>
                </div>
                <div class="col">
                    <img src="<?= IMGURL ?>icon-tv.svg" alt="Youtube" />
                    <p class="title">Purchase intent is 150%<br />
                        higher from paid YouTube ads<br />
                        than TV commercials.
                    </p>
                </div>
                <div class="col">
                    <img src="<?= IMGURL ?>icon-eye.svg" alt="Youtube" />
                    <p class="title">Almost 5 billion videos<br />
                        are watched on YouTube every<br />
                        single day.</p>
                </div>
                <div class="col">
                        <img src="<?= IMGURL ?>icon-map.svg" alt="Youtube" />
                    <p class="title">YouTube is the 3rd<br />
                        most visited site in the world, after<br />
                        Facebook & Google.
                    </p>
                </div>
                <?php
                echo get_field('banner_middle_text');
                ?>
            </div>
        </div>
        <div class="container dark-bg text-white">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <h2>The Various Ways<br />
                        You Can Advertise<br />
                        on YouTube</h2>

                    <p>Have you ever gone to YouTube to watch a video and an ad popped up? Surely, your answer is “Yes.”</p>

                    <p class="small">These ads, while we may be inclined to skip them, are a great way to advertise to potential customers.</p>
                </div>
                <div class="col col-md-8 table">
                    <div class="row table-header">
                        <div class="col">
                            <div class="cell"><h2>There are multiple kinds of ads we can run
                                    on YouTube, including:</h2></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="cell"><p class="check">Skippable Video Ads</p></div>
                        </div>
                        <div class="col  col-sm-12 col-lg-7">
                            <div class="cell"><p>These ads can be inserted at the beginning, middle, or end of a video and are typically longer ads. They allow users to skip the video after five seconds. They’re compatible with both desktop and mobile devices.</p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="cell"><p class="check">Non-skippable Video Ads</p></div>
                        </div>
                        <div class="col col-sm-12 col-lg-7">
                            <div class="cell"><p>These video ads come before a video and must be watched before the user can watch their video. They’re usually only 15 to 20 seconds and are compatible across devices.</p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="cell"><p class="check">Bumper Ads</p></div>
                        </div>
                        <div class="col col-sm-12 col-lg-7">
                           <div class="cell"><p>Bumper ads are non-skippable ads that appear before
                            the main video and are only six seconds long.</p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="cell"><p class="check">Overlay Ads</p></div>
                        </div>
                        <div class="col col-sm-12 col-lg-7">
                           <div class="cell"><p>Overlay ads appear on top of the video themselves toward the bottom of the window. They’re transparent and occupy only about 20 percent of the screen.</p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="cell"><p class="check">Sponsored Cards</p></div>
                        </div>
                        <div class="col col-sm-12 col-lg-7">
                           <div class="cell"><p>These ads appear throughout the video to show content that is relevant to what the viewer is watching.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>