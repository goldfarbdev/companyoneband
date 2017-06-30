<?php
/*
Template Name: Tour
Template Post Type: post, page, event
*/
// Start the loop.
while ( have_posts() ) : the_post();
?>
    <section id="co1-tour">
        <div class="container">
            <h1 class="text-center"><?php the_title(); ?></h1>
            <?php
                $options = array('scope' => 'past', 'sort' => 'asc', 'limit' => '10');
                $pastShows = gigpress_shows($options);
                if($pastShows !== ''){
            ?>
            <h4 class="sub-navigation">
                <a id="past-shows-link" href="#past-shows">Past</a> <span>|</span> <a id="upcoming-shows-link" href="#upcoming-shows">Future</a>
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
    </section>
<?php    // End of the loop.
endwhile;
?>

