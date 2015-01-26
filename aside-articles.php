<?php

// see http://codex.wordpress.org/Function_Reference/WP_Query for details

$exclude_posts = array($post->ID);

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => '6',
    'post__not_in' => $exclude_posts
);
$query = new WP_Query($args);
$counter = 0;

if ( $query->have_posts() ) :
?>

<aside class="articles clearfix">
    <h2 class="title">More Articles</h2>
    <?php
    // looping
    while ( $query->have_posts() ) :
        $query->the_post();
        $counter++;
    ?>
        <a class="article-box a-no-<?php echo $counter ?>" href="<?php echo get_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) :
                $article_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
            ?>
                <figure class="green-overlay">
                    <img class="grayscale" src="<?php echo $article_thumb_url[0]; ?>" alt="">
                </figure>
            <?php else : ?>
                <div class="default-back"></div>
            <?php endif; ?>
            <p><?php the_date() ?></p>
            <h3><?php the_title(); ?></h3>
        </a>
    <?php
    endwhile;

    ?>

    <h3 class="archive-link"><a href="<?php echo get_site_url(); ?>/archive">go to archive</a></h3>
</aside>

<?php

else:
    echo 'No data :-(';
endif;

/* Restore original Post Data */
wp_reset_postdata();