<?php
/*
Template Name: Jumbo
Template Post Type: post, page, event
*/


// Start the loop.
while ( have_posts() ) : the_post();

?>
    <section id="co1-<?php echo lcfirst(get_the_title()); ?>">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="jumbotron">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
    </section>
<?php    // End of the loop.
endwhile;
?>