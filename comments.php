

<section id="comments" style="float:left;">
        <?php 
        $args = array(
            'id_form' => 'comment-form'
        );
        comment_form($args); 
        ?>
    
        <ol class="commentlist">
                <?php 
                $comments_query = array(
                    'post_id'=> $post->ID
                );
                $comments = get_comments($comments_query);
                
                $options = array( 'style' => 'ol' );
                wp_list_comments($options, $comments); 
                ?>
        </ol>
</section>