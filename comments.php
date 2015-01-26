

<section id="comments">
        <?php comment_form(); ?>
        <ol class="commentlist">
                <?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
        </ol>
</section>