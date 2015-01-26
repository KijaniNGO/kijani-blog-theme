<?php
/**
 * functions and definitions
 *
 * 
 */

add_theme_support( 'post-thumbnails' );

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