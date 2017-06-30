<?php get_header();?>
    <div id="co1-home">
        <div id="#home"></div>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <!--<div class="jumbotron">-->
            <!--<img src="./img/co1_cover2.jpg"/>-->
          <!--<div class="container">-->

            <!--<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>-->
            <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->

          <!--</div>-->
        <!--</div>-->
        <!-- Modal -->
        <!--<div class="modal fade" id="iframeModal" role="dialog">-->
            <!--<div class="modal-dialog modal-lg">-->

                <!--&lt;!&ndash; Modal content&ndash;&gt;-->
                <!--<div class="modal-content">-->
                    <!--<div class="modal-body">-->
                        <!--<iframe id="PLAYER1" src="https://player.vimeo.com/video/189868830?player_id=PLAYER1" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                    <!--</div>-->

                <!--</div>-->

            <!--</div>-->
        <!--</div>-->

        <img id="co1-logo" src="./co1-logo.png" alt="Company One Logo"/>
        <img id="heroImg" src="./img/co1_cover2.jpg"/>

        <section id="co1-quotes">
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
            <div class="container">
                <h1>DIGITAL</h1>
            </div>
            <div class="jumbotron">

                <div class="container">
                    <h2>We have just launched our premiere EP album</h2>

                    <h2 class="h-audio">'In the Womb'</h2>
                    <img src="./img/InTheWombCover.jpg" alt="In the Womb Album Cover - Company One">
                    <h3>Download and Listen Today by <br>clicking on one the following providers.<br><br></h3>

                    <p><a target="_blank" href="https://itunes.apple.com/us/album/in-the-womb/id1186002752"><img alt="Get it on iTunes" src="./img/Get_it_on_iTunes_Badge_US_1114.svg"/></a></p>
                    <p><a href='https://play.google.com/store/music/album/Company_One_In_the_Womb?id=Bx2z6usndoropw6cwlrqim46cpe&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/></a></p>
                    <p><a target="_blank" href="http://www.amazon.com/gp/product/B01N0QIJBH"><img alt="Available at Amazon" src="https://images-na.ssl-images-amazon.com/images/G/01/SellerCentral/legal/amazon-logo_transparent.png"/></a></p>
                    <p><a target="_blank" href="https://open.spotify.com/album/2usqionby073fH5Tq4afFS"><img alt="Listen on Spotify" src="./img/Spotify_Logo_RGB_Green.png"/></a></p>
                </div>
                <br/>
                <div class="container">
                    <h2>Official Company One Logos</h2>
                    <h3><a href="/digital/offical_logos.zip">Download Our Official Company One Logos Here</a></h3>
                </div>
            </div>
        </section>
        <section id="co1-tour">
            <div class="container">
                <h1>TOUR</h1>

                <h2><del><a href="#2016">2016</a></del> | <a href="#2017">2017</a></h2>
            </div>

                <div class="jumbotron">
                     <div class="container">
                         <p id="2016"></p>
                         <br><br>
                         <h2>- 2016 -</h2>

                         <p class="h-event"><time class="dt-start" datetime="2016-08-05">AUGUST 05</time> - <span class="h-location h-adr">ONCE BALLROOM <span class="h-locality">SOMERVILLE, MA</span></span></p>
                        <p class="h-event"><time class="dt-start" datetime="2016-08-06">AUGUST 06</time> - <span class="h-location h-adr">THE TAVERN <span class="h-locality">FRAMINGHAM, MA</span></span></p>
                        <p class="h-event"><time class="dt-start" datetime="2016-08-14">AUGUST 14</time> - <span class="h-location h-adr">MUSIC GO ROUND <span class="h-locality">NATICK, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-08-14">AUGUST 14</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-09-16">SEPTEMBER 16</time> - <span class="h-location h-adr">TCAN <span class="h-locality">NATICK, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-09-17">SEPTEMBER 17</time> - <span class="h-location h-adr">PA'S LOUNGE <span class="h-locality">SOMERVILLE, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-09-18">SEPTEMBER 18</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-10-16">OCTOBER 16</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA </span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-10-22">OCTOBER 22</time> - <span class="h-location h-adr">REGENT THEATER <span class="h-locality">ARLINGTON, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-10-30">OCTOBER 30</time> - <span class="h-location h-adr">THE HARD ROCK <span class="h-locality">BOSTON, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-10-31">OCTOBER 31</time> - <span class="h-location h-adr">THE MIDDLE EAST <span class="h-locality">CAMBRIDGE, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-11-02">NOVEMBER 2</time> - <span class="h-location h-adr"><a href="http://wemfradio.com/2016/11/02/the-underbelly-11-2-16-w-the-deltaz-company-one/" target="_blank">DAVE CRESPO'S SHOW "THE UNDERBELLY"</a><span class="h-locality">WEMF RADIO!</span></span></p>
                         <p>Thank you Dave for having us on your show!</p>
                         <p>Listen to the Podcast Below!</p>
                         <div class="powerpress_player"><img id="the_interview" width="100%" src="./img/Company_One_Band_WEMF_Radio.jpg" alt="Company One Band in the WEMF studio on 'The Underbelly'" />
                             <h3>The Interview</h3>
                             <audio controls=""><source src="http://www.wemfradio.com/wp-content/uploads/podcasts/SPO/11-2-16-Belly-CompanyOne.mp3" type="audio/mpeg"></audio>
                             <h3>The Live Performance</h3>
                             <audio controls=""><source src="http://www.wemfradio.com/wp-content/uploads/podcasts/SPO/11-2-16-Belly-CompanyOne-performance.mp3" type="audio/mpeg"></audio>
                         </div>
                         <p class="h-event"><time class="dt-start" datetime="2016-11-04">NOVEMBER 04</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-11-19">NOVEMBER 19</time> - <span class="h-location h-adr"><a href="http://www.thecladdaghpub.com/" target="_blank">CLADDAGH PUB</a> <span class="h-locality">LAWRENCE, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-11-20">NOVEMBER 20</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2016-12-10">DECEMBER 10</time> - <span class="h-location h-adr">CELEBRATION,<span class="h-locality">FL</span></span></p>
                         <span id="2017"></span>
                         <p class="h-event"><time class="dt-start" datetime="2016-12-18">DECEMBER 18</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <br><br>
                         <h2>- 2017 -</h2>
                         <br>
                         <br>
                         <br>
                         <p class="h-event"><time class="dt-start" datetime="2017-01-15">JANUARY 15</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-01-27">JANUARY 27</time> - <span class="h-location h-adr">THE RECORD CO. (The Cassette Sessions) <span class="h-locality">BOSTON, MA</span></span> <a href="http://www.bostonyouthmusicseries.com/purchase-tickets" target="_blank" class="btn btn-info btn-lg">BUY TICKETS</a></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-02-19">FEBRUARY 19</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-03-04">MARCH 04</time> - <span class="h-location h-adr"><a href="http://alchemyri.com/" target="_blank">ALCHEMY</a>  <span class="h-locality">PROVIDENCE, RI</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-03-19">MARCH 19</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-04-15">APRIL 15</time> - <span class="h-location h-adr"><a href="http://alchemyri.com/" target="_blank">ALCHEMY</a>  <span class="h-locality">PROVIDENCE, RI</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-04-22">APRIL 22</time> - <span class="h-location h-adr">MIDWAY CAFE <span class="h-locality">JAMAICA PLAIN, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-04-23">APRIL 23</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>
                         <p class="h-event"><time class="dt-start" datetime="2017-05-21">MAY 21</time> - <span class="h-location h-adr">THE RAVEN <span class="h-locality">WORCESTER, MA</span></span></p>

                         <!-- Modal -->
                         <div class="modal fade" id="ravenModal" role="dialog">
                             <div class="modal-dialog modal-lg">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title"><time class="dt-start">JANUARY 27</time> - <span class="h-location h-adr">THE RECORD CO.</span> <span class="h-locality">WORCESTER, MA</span></h4>
                                     </div>
                                     <div class="modal-body">
<!--                                         <iframe src="http://www.bostonyouthmusicandartsfestival.com/"></iframe>-->
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                     </div>
                                 </div>

                             </div>
                         </div>




                    </div>
                </div>
        </section>
        <img src="./img/co1_2.jpg" alt="Company One Band - TCAN in Natick"/>

        <section id="co1-video">
            <div class="container">
                <h1>VIDEO</h1>
            </div>
            <div class="container">
                <div class="col-md-12"><iframe width="100%" height="360" src="https://www.youtube.com/embed/VlIW4esK32s?rel=0" frameborder="0" allowfullscreen></iframe></div>
            </div>
            <div class="container">
                <div class="col-md-6"><iframe width="640" height="360" src="https://www.youtube.com/embed/SdvyJ2vJK3M?rel=0" frameborder="0" allowfullscreen></iframe></div>
                <div class="col-md-6"><iframe width="640" height="360" src="https://www.youtube.com/embed/6Ba7KeRPFvw?rel=0" frameborder="0" allowfullscreen></iframe></div>
            </div>
            <div class="container">
                <div class="col-md-12"><iframe src="https://player.vimeo.com/video/200453603" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            </div>
            <div class="container">
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/177960804" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/172517275" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            </div>
            <div class="container">
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/172186104" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/176693844" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>

            </div>
            <div class="container">
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/172186104" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <div class="col-md-6"><iframe src="https://player.vimeo.com/video/160515933" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            </div>
        </section>
        <img src="./img/co1_1.jpg" alt="Company One Band - TCAN in Natick"/>
        <section id="co1-about">
            <div class="container">
                <h1>About Us</h1>
            </div>
            <div class="jumbotron">
                <div class="container">
                    <h2>Band Members</h2>
                    <p>Marcelo Costa (vocals/bass)</p>
                    <p>Steven Richardson (lyrics/drums)</p>
                    <p>Eoghan McCarthy (orchestration/guitar)</p>

                    <h2>Bio</h2>
                    <p>We are a three-piece progressive, heavy, ambient rock band from west of Boston.</p>

                    <h2>Genre</h2>
                    <ul style="display: inline-block; padding: 0;">
                        <li>Experimental</li>
                        <li>Progressive</li>
                        <li>Heavy</li>
                        <li>Ambient Rock</li>
                    </ul>

                    <h2>Hometown</h2>
                    <p>Marlborough, MA, United States</p>

                    <h2>Awards</h2>
                    <ul style="display: inline-block; padding: 0;">
                        <li>2016 RADAR Finalist</li>
                        <li>2016 YPC Finalist</li>
                    </ul>

                    <h2>Where does the name <b><q>Company One</q></b> come from?</h2>
                    <p>The MA Civil War volunteer units comprised 13 companies, originally Company A-M,
                    with Marlborough (our hometown) supplying members for Company I. Over the years,
                    the letter 'I' has often been confused and interchanged with the number '1', and we
                    thought it was a pretty cool name. This is the company that went down to Harper's
                    Ferry and brought back a rather famous bell, called the John Brown Bell, which to this
                    day sits in a small stone tower in our hometown.</p>

                    <h2>Current Location</h2>
                    <address>Marlborough, MA, United States</address>

                    <h2>Influences</h2>
                    <ul style="
    display: inline-block;
    padding: 0;
">
                        <li>O'Brother</li>
                        <li>Caspian</li>
                        <li>Godspeed You! Black Emperor</li>
                        <li>Foxing</li>
                        <li>The Mars Volta</li>
                        <li>Jack White</li>
                        <li>David Bowie</li>
                        <li>Pink Floyd</li>
                        <li>Jimi Hendrix</li>
                        <li>The Who</li>
                    </ul>

                    <h2 id="co1-contact">Contact Information</h2>
                    <h3>General Manager</h3>
                    <p>Robert McCarthy</p>
                    <p>All bookings and inquiries can be sent to:</p>
                    <p><a href="mailto:robert.mccarthy@mac.com">robert.mccarthy@mac.com</a></p>
                </div>
            </div>
        </section>
        <section id="co1-facebook">
            <div class="container">
                <h1>FACEBOOK</h1>
            </div>
            <div class="container">
                <div style="text-align: center;">
                    <div class="fb-like" data-href="http://companyoneband.com/" data-width="250" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                </div>
            </div>
            <br/><br/>
            <div class="container">
                <div style="text-align: center;">
                    <div class="fb-page" data-href="https://www.facebook.com/CompanyOneBand" data-tabs="timeline" data-width="600" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/CompanyOneBand" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CompanyOneBand">CompanyOne</a></blockquote></div>
                </div>
            </div>
        </section>
        <div class="container">
          <hr>
        </div> <!-- /container -->
    </div>

<?php get_footer();?>