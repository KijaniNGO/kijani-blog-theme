<?php
/**
 * The main template file.
 *
 */

// here workaround for main page, really not recommended. We 
// have to code a own index page
query_posts( 'posts_per_page=1' );

include_once 'single.php';



        
        