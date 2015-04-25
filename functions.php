<?php
/**
 * functions and definitions
 */

$thumbnail_sizes = array(
                'hd-display' => 1920,
                'large-display' => 1200,
                'default-display' => 980,
                'tablets-portrait-display' => 768,
                'tablets-phones-display' => 640,
                'phones-display' => 480
            );

/** thumbnail support */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );

    // additional image sizes
    foreach($thumbnail_sizes as $size => $width) {
        add_image_size($size, $width, 9999); // unlimited height, no cropping
    }
}

/**
 * Markdown Image Manipulation
 */
add_filter( 'image_send_to_editor', 'markdown_insert_image', 10, 8 );
function markdown_insert_image( $html, $id, $caption, $title, $align, $url, $size, $alt )
{
    list( $img_src, $width, $height ) = wp_get_attachment_image_src( $id, $size );
    return "![{$title}]({$img_src})";
}

/**
 * Shortens string respecting word bounderies
 * @param type $str
 * @param type $length
 * @return type
 */
function shorten_str($str, $length = 80, $suffix = ' ...') {
    if (empty($str)) {
        return '';
    }

    if (strlen($str) > $length) {
        $str = preg_replace('/\s+?(\S+)?$/', '', substr($str, 0, $length)).$suffix;
    }

    return $str;
}

function mytheme_comment($comment) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID()?>">
		<article id="<?php comment_ID(); ?>" class="comment-body">
			<div class="comment-content">
				<?php comment_text() ?>
			</div>
			<div class="comment-details">
				<figure class="green-overlay">
					<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
				</figure>
				<ul class="comment-meta">
					<li class="comment-author">
						<?php echo get_comment_author_link() ?>
					</li>
					<li class="comment-time">
						<?php printf(__('%1$s'), get_comment_date()) ?>
					</li>
					<li class="comment-reply">
						<span class="reply-link">Reply</span>
					</li>
				</ul>
			</div>
		</article>
<?php
        }
?>