<?php
/*
Template Name: Video
Template Post Type: post, page, event
*/
// Start the loop.
while ( have_posts() ) {
    the_post();
?>
    <section id="co1-video">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php
        if (have_rows('video_rows')) {

            // loop through the rows of data
            while (have_rows('video_rows')) {
                the_row();

                if (get_row_layout() == 'video_row') {

                    $count = get_sub_field('count');
                    $colSize = $count == 1 ? '12' : '6';
                    $iFrameWidth = $count == 1 ? '100%' : '640';

                    while (have_rows('container_one')) {
                        the_row();
                        ?>
                        <div class="container">
                        <div class="col-md-<?php echo $colSize; ?>">
                            <iframe width="<?php echo $iFrameWidth; ?>" height="360"
                                    src="<?php the_sub_field('video_source') ?>" frameborder="0"
                                    allowfullscreen></iframe>
                        </div>
                    <?php }
                    if ($count == 2) {
                        while (have_rows('container_two')) {
                            the_row();
                            ?>
                            <div class="col-md-<?php echo $colSize; ?>">
                                <iframe width="<?php echo $iFrameWidth; ?>" height="360"
                                        src="<?php the_sub_field('video_source') ?>" frameborder="0"
                                        allowfullscreen></iframe>
                            </div>
                        <?php }
                    }
                    ?>
                    </div>
                    <?php
                }

            }
        }
        ?>
    </section>
<?php // End of the loop.
}
?>

