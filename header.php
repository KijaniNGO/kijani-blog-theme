<?php
/**
 * The themes Header file.
 *
 *
 */

// retrieve page information
$slug = basename(get_permalink());
$blog_css = ($slug === 'archive') ? 'archive' : 'blogpost';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <script src="//use.typekit.net/ndr8xkb.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $blog_css; ?>.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link rel='icon' href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png">

    <?php
    // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions.
    ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <!--META-->
    <title><?php
    $title = wp_title( '|', false, 'right' );
    $title .= get_bloginfo( 'name', 'display' );
    echo (empty($title)) ? 'Kijani Blog' : $title;
    ?></title>

    <?php
    // wordpress header hook (OpenGraph, TwitterCards etc. will be added here automaticly
    wp_head();
    ?>

</head>
<body <?php body_class(); ?>>
    <div id="center">
