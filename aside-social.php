<?php

// prepare social sharing using WP Social Sharing

//add_action( 'init', 'SS_Public' );
$sspublic = new SS_Public();

remove_filter('the_title','wptexturize');
$title = urlencode(html_entity_decode(get_the_title()));
add_filter('the_title','wptexturize');

$url = urlencode( get_permalink() );

$loadjs='';

$opts=ss_get_options();
foreach ($opts['load_static'] as $static){
    if($static == 'load_js'){
       $loadjs='onclick="return ss_plugin_loadpopup_js(this);"';
    }
}


$twitter_username = '';

/*
 * google plus:
 * <a <?php echo $loadjs;?> rel="external nofollow" class="<?php echo $ssbutton_googleplus;?>" href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank" ><?php echo $googleplus_text; ?></a>
 * linked in:
 * <a <?php echo $loadjs;?> rel="external nofollow" class="<?php echo $ssbutton_linkedin;?>" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo substr($url,0,1024);?>&title=<?php echo substr($title,0,200);?>" target="_blank" ><?php echo $linkedin_text; ?></a>
 */


?>
<aside class="subscribe clearfix">
    <div class="subscribe-link">
        <svg viewBox="0 0 94 80">
            <path class="icon" d="M 20.34,53.36 C 12.99,53.36 7,59.33 7,66.68 7,74.02 12.98,80 20.34,80 27.7,80 33.68,74.03 33.68,66.68 33.68,59.34 27.69,53.36 20.34,53.36 Z M 86.93,71.14 C 86.65,32.53 52.85,0 12.87,0 11.94,0 11.19,0.75 11.19,1.68 L 11.19,17.1 C 11.19,18.02 11.94,18.78 12.87,18.78 44.31,18.78 68.03,41.49 68.03,71.62 68.03,72.55 68.78,73.3 69.71,73.3 L 85.25,73.3 C 85.28,73.3 85.3,73.3 85.32,73.3 86.25,73.3 87,72.55 87,71.62 87,71.46 86.97,71.29 86.93,71.14 Z M 12.87,26.29 C 11.94,26.29 11.19,27.04 11.19,27.97 L 11.19,40.29 C 11.19,41.21 11.94,41.97 12.87,41.97 32.93,41.97 44.9,53.06 44.9,71.63 44.9,72.55 45.65,73.3 46.58,73.3 L 58.82,73.3 C 59.75,73.3 60.5,72.55 60.5,71.63 60.5,47.89 37.8,26.29 12.87,26.29 Z M 12.87,26.29" />
        </svg>
        <h4>get RSS <br>feed</h4>
        <a href="<?php bloginfo('rss2_url'); ?>"></a>
    </div>
    <div class="subscribe-link">
        <svg viewBox="0 0 94 80">
            <path class="icon" d="M 91.22,0.17 C 89.48,0.89 2.82,31.57 1.19,32.19 -0.24,32.7 -0.55,33.93 1.19,34.65 3.23,35.47 20.58,42.45 20.58,42.45 L 20.58,42.45 32.12,47.07 C 32.12,47.07 87.44,6.22 88.16,5.71 88.87,5.2 43.55,51.48 43.55,51.48 L 49.88,54.66 49.88,54.66 C 49.88,54.66 73.66,67.49 75.3,68.41 76.83,69.23 78.66,68.52 79.18,66.67 79.69,64.51 93.67,3.76 93.98,2.43 94.18,0.68 93.06,-0.45 91.22,0.17 Z M 31.4,78.78 C 31.4,80.01 32.12,80.42 33.14,79.5 34.47,78.37 51.72,60.51 51.72,60.51 L 31.61,51.48 31.4,78.78 Z M 31.4,78.78" />
        </svg>
        <h4>get news<br>letter</h4>
        <a href="http://kijani.co/en/newsletter/"></a>
    </div>
    <div class="subscribe-link">
        <svg viewBox="0 0 94 80">
            <path class="icon" d="M 92.73,9.43 C 89.3,11.03 85.62,12.11 81.75,12.59 85.7,10.11 88.73,6.17 90.16,1.47 86.46,3.77 82.37,5.45 78.02,6.35 74.53,2.44 69.56,0 64.06,0 53.5,0 44.94,9 44.94,20.11 44.94,21.68 45.11,23.22 45.44,24.69 29.55,23.85 15.46,15.84 6.03,3.68 4.39,6.65 3.44,10.1 3.44,13.79 3.44,20.76 6.82,26.92 11.95,30.52 8.81,30.42 5.87,29.51 3.29,28.01 3.29,28.09 3.29,28.18 3.29,28.26 3.29,38 9.88,46.13 18.62,47.98 17.02,48.44 15.33,48.68 13.59,48.68 12.35,48.68 11.16,48.56 9.99,48.32 12.42,56.31 19.48,62.12 27.85,62.28 21.31,67.68 13.06,70.89 4.1,70.89 2.56,70.89 1.04,70.8 -0.46,70.61 8,76.32 18.05,79.64 28.85,79.64 64.02,79.64 83.25,49.01 83.25,22.44 83.25,21.57 83.23,20.7 83.19,19.84 86.93,17 90.17,13.46 92.73,9.43 Z M 92.73,9.43" />
        </svg>
        <h4>tweet <br>article</h4>
        <a <?php echo $loadjs;?> rel="external nofollow" href="http://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=<?php echo $url; ?><?php if(!empty($twitter_username)) {  echo '&via=' . $twitter_username; } ?>" target="_blank"></a>
    </div>
    <div class="subscribe-link">
        <svg viewBox="0 0 94 80">
            <path class="icon" d="M 86.31,4.93 L 86.31,74.96 C 86.31,77.34 84.39,79.28 82.02,79.31 L 81.96,79.31 61.9,79.31 61.9,48.82 72.13,48.82 73.67,36.94 61.9,36.94 61.9,29.36 C 61.9,25.92 62.86,23.57 67.79,23.57 L 74.08,23.57 74.08,12.95 C 72.99,12.8 69.26,12.48 64.91,12.48 55.84,12.48 49.63,18.01 49.63,28.18 L 49.63,36.94 39.38,36.94 39.38,48.82 49.63,48.82 49.63,79.31 11.93,79.31 C 9.53,79.31 7.59,77.36 7.59,74.96 L 7.59,4.93 C 7.59,2.53 9.53,0.59 11.93,0.59 L 81.96,0.59 C 84.36,0.59 86.31,2.53 86.31,4.93 Z M 86.31,4.93" />
        </svg>
        <h4>share <br>article</h4>
        <a <?php echo $loadjs;?> rel="external nofollow" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" ></a>
    </div>
</aside>
