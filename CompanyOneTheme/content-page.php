<?php
/*
Template Name: Default Content Page
Template Post Type: post, page, event
*/

// Start the loop.
while ( have_posts() ) : the_post();
    ?>
    <section id="co1-<?php the_title(); ?>">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
<?php    // End of the loop.
endwhile;
?>