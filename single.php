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
            <?php endwhile; // end of the loop. ?>
            
            <?php get_template_part( 'aside' ); ?>
            <?php 
            get_template_part( 'comments' ); 
            // comments_template();  // use this line to include social plugin
            ?> 
            
            
        </div>
    </main>



<?php get_footer(); ?>
