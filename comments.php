<section id="comments">

    <form action=<?php echo get_site_url().'/wp-comments-post.php'; ?> method="post" id="comment-form">
        <p class="comment-area">
            <span class="abort-button">x</span>
            <textarea id="comment" name="comment" required="required" rows="1" placeholder="Write a comment..."></textarea>
        </p>
        <div class="post-area clearfix">
            <?php if ( !is_user_logged_in() ) : ?>
            <p class="author-info">
                <input name="author" type="text" required="required" placeholder="Name">
                <input name="email" type="email" required="required" placeholder="Email">
                <input name="url" type="text" placeholder="Website (optional)">
            </p>
            <p class="captcha">
                Solve math problem to confirm that this is not spam: <br>
                <?php if( function_exists( 'cptch_display_captcha_custom' ) ) {
                    echo "<input type='hidden' name='cntctfrm_contact_action' value='true' />";
                    echo cptch_display_captcha_custom();
                } ?>
            </p>
            <p class="submit">
            <?php else: ?>
                <p class="submit logged-in">
            <?php endif; ?>
                <input name="submit" type="submit" id="submit" value="POST COMMENT">
                <input type="hidden" name="comment_post_ID" value=<?php echo get_the_ID(); ?> >
                <input type="hidden" name="comment_parent" value="0" id="comment-parent">
            </p>
        </div>
    </form>

    <ol class="commentlist">
        <?php
        $comments_query = array(
            'post_id'=> $post->ID
        );
        $comments = get_comments($comments_query);

        $options = array(
            'avatar_size' => 56,
            'style' => 'ol'
        );
        wp_list_comments('type=comment&callback=mytheme_comment', $comments);
        // wp_list_comments($options, $comments);
        ?>
    </ol>
</section>