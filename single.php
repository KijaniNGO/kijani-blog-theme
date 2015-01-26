<?php
// The Template for displaying all single posts.

get_header(); ?>

    <?php get_template_part( 'masthead' ); ?>

        <?php get_template_part( 'content', 'header' ); ?>

        <main class="clearfix">
        <div class="container">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'single' ); ?>
            
            <?php get_template_part( 'aside' ); ?>
            
            <?php //comments_template(); ?> 
            
            <?php endwhile; // end of the loop. ?>
        </div>
    </main>



<?php get_footer(); ?>
