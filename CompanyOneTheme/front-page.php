<?php get_header();?>
        <img id="co1-logo" src="<?php echo get_option('band_theme_options')['custom_logo2'];?>" alt="Company One Logo"/>
        <img id="heroImg" src="<?php echo get_option('band_theme_options')['banner'];?>"/>
        <section id="co1-quotes">
             <div>
                 <a style="display: inline-block;position: relative;bottom: 6px;" href="https://companyone.bandcamp.com/" target="_blank">
                     <img style="width:auto; border-radius:5px;" src="http://companyoneband.com/wp-content/uploads/bandcamp.jpg" alt="Company One Band on Band Camp"/>
                 </a>
                 <div class="fb-like" data-href="http://companyoneband.com/" data-width="250" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                 <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:5U9igdiSh6tktEBXQAfATU&size=basic&theme=dark" width="200" height="25" scrolling="no" frameborder="0" style="border:none; padding: 0;" allowtransparency="true"></iframe>
             </div>
            <div class="container">
                <div id="quotesCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        if(have_posts()) {
                            while (have_posts()) { the_post();

                                $quotes = new WP_Query(array(
                                    'post_type' => 'quote',
                                    'order' => 'DESC',
                                    'orderby' => 'date'
                                ));

                                $quoteCount = 0;
                                if ($quotes->have_posts()){
                                    while ($quotes->have_posts()){
                                        $quotes->the_post();
                                        if ($quoteCount == 0) {
                                            $active = 'active';
                                        } else {
                                            $active = '';
                                        }

                                        ?>
                                        <div class="item <?php echo $active; ?>">
                                            <blockquote><?php echo '"'; the_content(); echo '"';?>
                                                <br/><br/>
                                                <em>— <?php the_title(); ?></em>
                                            </blockquote>
                                        </div>
                                        <?php
                                        $quoteCount++;
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="co1-digital">
            <?php
            // query for the about page
            $digital = new WP_Query( 'pagename=digital' );
            // "loop" through query (even though it's just one page)
            while ( $digital->have_posts() ) : $digital->the_post();
                ?>
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="jumbotron">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
        </section>
        <section id="co1-facebook">
            <div class="container">
                <h1>FACEBOOK</h1>
            </div>
<!--            <div class="container">-->
<!--                <div style="text-align: center;">-->
<!--                    <div class="fb-like" data-href="http://companyoneband.com/" data-width="250" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <br/><br/>-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="text-align: center;">
                        <div class="fb-page" data-href="https://www.facebook.com/CompanyOneBand" data-tabs="timeline" data-width="600" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/CompanyOneBand" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CompanyOneBand">CompanyOne</a></blockquote></div>
                    </div>
                    <div class="col-md-6">
                        <style>.widgettitle{text-align: center;}</style>
                        <?php echo do_shortcode('[widget id="xtfacebook_widget-2"]'); ?>
                    </div>
                </div>
            </div>
        </section>
    <hr>
        <section id="co1-tour">
            <?php
            // query for the about page
            $tour = new WP_Query( 'pagename=tour' );
            // "loop" through query (even though it's just one page)
            while ( $tour->have_posts() ) : $tour->the_post();
                ?>
                <div class="container">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php
                    $options = array('scope' => 'past', 'sort' => 'desc');
                    $pastShows = gigpress_shows($options);
                    if($pastShows !== ''){
                        ?>
                        <h4 class="sub-navigation">
                            <a id="upcoming-shows-link" href="#upcoming-shows">Future</a> <span>|</span> <a id="past-shows-link" href="#past-shows">Past</a>
                        </h4>
                    <?php }?>
                </div>

                <div class="jumbotron">
                    <div class="container">

                        <div id="upcoming-shows">
                            <h2>- Future Shows -</h2>
                            <?php echo do_shortcode('[gigpress_shows]'); ?>
                        </div>
                        <?php if($pastShows !== ''){ ?>
                            <div id="past-shows">
                                <h2>- Past Shows -</h2>
                                <?php echo $pastShows; ?>
                            </div>
                        <?php } ?>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
        </section>
        <img src="<?php echo $upload_dir['subdir'];?>/img/co1_2.jpg" alt="Company One Band - TCAN in Natick"/>

        <section id="co1-video" class="lazy-load" data-loading-text="<div class='glyphicon glyphicon-repeat fast-right-spinner'></div>"></section>
        <img src="<?php echo $upload_dir['subdir'];?>/img/co1_1.jpg" alt="Company One Band - TCAN in Natick"/>

        <section id="co1-about">
            <?php
            // query for the about page
            $about = new WP_Query( 'pagename=about' );
            // "loop" through query (even though it's just one page)
            while ( $about->have_posts() ) : $about->the_post();
                ?>
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="jumbotron">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
        </section>
        <hr/>
        <section id="co1-contact">
            <?php
            // query for the about page
            $contact = new WP_Query( 'pagename=contact' );
            // "loop" through query (even though it's just one page)
            while ( $contact->have_posts() ) : $contact->the_post();
                ?>
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="jumbotron">
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
        </section>
        <hr/>

<?php get_footer();?>