<?php
// retrieve user information @todo: use wp in the loop function
$post_id = get_queried_object_id();
$post_author_id = get_post_field( 'post_author', $post_id );
$curauth = get_userdata($post_author_id);
?>

<aside class="author clearfix">
    <h2 class="title">Author</h2>
    <?php
        if ( has_wp_user_avatar($curauth->ID) ):
            $avatar_url = get_wp_user_avatar_src($curauth->ID, 'thumbnail');
    ?>
    <figure class="green-overlay">
        <img src="<?php echo $avatar_url; ?>" class="grayscale" alt="<?php echo $curauth->display_name; ?>">
    </figure>

    <?php endif; ?>

    <h3><?php echo $curauth->display_name; ?></h3>
    <p class="clearfix">
        <?php echo $curauth->description; ?>
    </p>
</aside>

