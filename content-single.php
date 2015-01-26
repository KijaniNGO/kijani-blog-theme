<?php
/**
 * The template for displaying content in the single.php template
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> title="<?php the_title(); ?>">
    <?php // estimated reading time
        $speed_wpm = 120;
        $words = str_word_count( strip_tags( $post->post_content ) );
        $minutes = ceil( $words / $speed_wpm );
    ?>
    <div class="meta">
        <?php echo get_the_date(); ?>
        <span>–</span>
        <?php echo $minutes ?> Min Read
    </div>
    <h1><?php
    $title = the_title('','',false);
    echo shorten_str($title, 50); // respect word bounderies
    // or hard version: echo substr($title,0,30);
    ?></h1>
    <div class="text">


        <?php
        $content = apply_filters( 'the_content', get_the_content() );

        // apply dropcap class
        $content = preg_replace('@<p>\s*((?:<[^<>]+>\s*)*)([^<>\s])@', '<p>$1<span class="dropcap">$2</span>', $content, 1);

        // patch image figure
        include_once 'simple_html_dom.php';

        // create DOM from string
        $html = str_get_html($content);

        // define replace function
        function image_replace($element) {
        // @todo: move to style to class and add -webkit -moz support
        if ($element->tag=='img')
            $element->outertext =
<<<HEREDOC
    <figure>
        <img class ="figure-photo"
             style="-webkit-filter: grayscale(25%);"
            alt="{$element->alt}"
            src="{$element->src}" />
        <figcaption>{$element->alt}</figcaption>
    </figure>
HEREDOC;
        }

        // register the callback function for image rendering
        $html->set_callback('image_replace');

        echo $html;

        ?>

    </div>
</article>

