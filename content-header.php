<?php
// retrieve page information
$slug = basename(get_permalink());

?>

<header>
    <div class="top-bar">
        <a class="logo" href="http://kijani.co/">
            <svg viewBox="0 0 270 80" >
                <g class="logo">
                    <g>
                        <path d="M 94.38,24.23 C 97.45,25.84 99.42,34.49 100.48,37.41 102.49,42.97 103.24,45.79 100.62,51.11 98.12,56.18 95.31,62.71 90.96,66.58 85.79,71.18 76.85,73.45 70.29,75.34 64.17,77.11 54.87,77.14 55.19,68.93 55.55,59.93 65.9,55.76 73.84,54.64 76.98,54.19 78.91,53.64 81.57,51.8 83.03,50.79 87.5,46.14 88.9,49.16 90.37,52.36 87.18,56.53 84.9,58.51 83.84,59.42 75.96,65.12 75.09,64.3 77.54,66.63 85.31,60.56 86.83,58.69 89.47,55.45 91.36,51.07 93.34,47.42 95.33,43.75 93.79,40.29 92.78,36.4 92.57,35.49 90.49,22.18 94.38,24.23 95.89,25 92.89,23.44 94.38,24.23 Z M 94.38,24.23" />
                        <path d="M 8.7,24.23 C 5.63,25.84 3.66,34.49 2.6,37.41 0.59,42.97 -0.16,45.79 2.46,51.11 4.96,56.18 7.77,62.71 12.12,66.58 17.29,71.18 26.23,73.45 32.79,75.34 38.91,77.11 48.21,77.14 47.89,68.93 47.53,59.93 37.18,55.76 29.24,54.64 26.1,54.19 24.17,53.64 21.51,51.8 20.05,50.79 15.58,46.14 14.18,49.16 12.71,52.36 15.9,56.53 18.18,58.51 19.24,59.42 27.12,65.12 27.99,64.3 25.54,66.63 17.77,60.56 16.25,58.69 13.61,55.45 11.72,51.07 9.74,47.42 7.75,43.75 9.29,40.29 10.3,36.4 10.52,35.49 12.59,22.18 8.7,24.23 7.21,25 10.2,23.44 8.7,24.23 Z M 8.7,24.23" />
                        <path d="M 10.97,18.73 C 10.07,16.98 21.83,8.51 23.21,7.61 28.4,4.18 33.71,2.98 39.95,1.44 54.01,-2.02 70.65,0.98 82.77,9.71 88.74,13.99 94.43,18.05 87.04,23.76 80.67,28.67 68.92,25.77 63.64,20.35 61.58,18.23 44.97,15.11 45.55,13.59 48.33,6.4 62.38,9.27 68.31,12.63 68.74,12.88 68.98,12.04 69.3,12.3 60.06,5.2 44.25,7.04 33.54,9.89 30.29,10.76 13.69,24.09 10.97,18.73 10.22,17.24 11.72,20.21 10.97,18.73 Z M 10.97,18.73" />
                    </g>
                    <g>
                        <path d="M 119.08,62.03 L 119.08,7.16 C 119.08,5.09 120.13,4.06 122.23,4.06 L 125.39,4.06 C 127.45,4.06 128.5,5.09 128.5,7.16 L 128.5,38.42 139.7,22.18 C 140.27,21.37 140.87,20.79 141.48,20.43 142.1,20.07 142.95,19.89 144.03,19.89 L 148.45,19.89 C 149.5,19.89 150.19,20.29 150.49,21.09 150.8,21.89 150.66,22.64 150.03,23.34 L 138.28,38.16 150.49,61.77 C 150.94,62.59 151,63.34 150.64,64.06 150.27,64.78 149.58,65.14 148.57,65.14 L 144.53,65.14 C 143.42,65.14 142.57,64.96 142,64.62 141.42,64.26 140.93,63.68 140.53,62.85 L 132.28,45.89 128.5,50.69 128.5,62.03 C 128.5,64.1 127.47,65.14 125.39,65.14 L 122.23,65.14 C 120.13,65.12 119.08,64.1 119.08,62.03 Z M 119.08,62.03" />
                        <path d="M 162.16,19.83 L 159,19.83 C 156.9,19.83 155.79,20.89 155.79,22.92 L 155.79,62.01 C 155.79,64.08 156.9,65.04 159,65.04 L 162.16,65.04 C 164.22,65.04 165.29,64.08 165.29,62.01 L 165.29,22.92 C 165.29,20.89 164.22,19.83 162.16,19.83 Z M 162.16,19.83" />
                        <path d="M 178.61,19.83 L 175.46,19.83 C 173.36,19.83 172.37,20.89 172.37,22.92 L 172.37,67.97 C 172.37,70.18 171.42,71.27 169.58,71.27 168.95,71.27 168.12,71.15 167.09,70.94 166.22,70.74 165.51,70.94 165.03,71.51 164.54,72.09 164.28,72.95 164.28,74.02 L 164.28,76.49 C 164.28,77.47 164.5,78.19 164.93,78.61 165.35,79.04 166.08,79.36 167.07,79.58 168.18,79.8 169.39,79.92 170.73,79.92 174.04,79.92 176.69,78.98 178.69,77.13 180.69,75.28 181.66,72.29 181.66,68.17 L 181.66,22.92 C 181.66,20.89 180.67,19.83 178.61,19.83 Z M 178.61,19.83" />
                        <path d="M 187.2,52.41 L 187.2,52.25 C 187.2,47.9 188.54,44.56 191.18,42.17 193.83,39.78 197.61,38.58 202.48,38.58 L 208.31,38.58 208.31,34.72 C 208.31,29.95 206.37,27.58 202.48,27.58 200.89,27.58 199.67,28.02 198.81,28.88 197.94,29.76 197.51,30.83 197.51,32.15 197.51,33.9 196.6,34.8 194.78,34.8 L 191.21,34.8 C 189.14,34.8 188.09,33.76 188.09,31.69 188.09,27.96 189.41,24.91 192.03,22.5 194.66,20.09 198.14,18.9 202.48,18.9 207.03,18.9 210.69,20.21 213.5,22.82 216.31,25.43 217.71,29.2 217.71,34.12 L 217.71,50.85 C 217.71,55.77 216.31,59.54 213.5,62.15 210.69,64.76 207.01,66.07 202.48,66.07 197.98,66.07 194.3,64.86 191.47,62.41 188.62,59.98 187.2,56.63 187.2,52.41 Z M 198.22,46.99 C 197.15,47.94 196.6,49.44 196.6,51.45 196.6,53.46 197.15,54.96 198.22,55.93 199.29,56.91 200.73,57.41 202.48,57.41 206.37,57.41 208.31,55.04 208.31,50.28 L 208.31,45.53 202.48,45.53 C 200.73,45.53 199.31,46.01 198.22,46.99 Z M 198.22,46.99" />
                        <path d="M 223.47,62.03 L 223.47,34.14 C 223.47,29.22 224.86,25.45 227.67,22.84 230.48,20.23 234.16,18.92 238.69,18.92 243.24,18.92 246.92,20.23 249.73,22.86 252.56,25.49 253.97,29.26 253.97,34.14 L 253.97,62.03 C 253.97,64.1 252.92,65.14 250.82,65.14 L 247.66,65.14 C 245.6,65.14 244.55,64.1 244.55,62.03 L 244.55,34.72 C 244.55,29.95 242.59,27.58 238.67,27.58 234.79,27.58 232.85,29.95 232.85,34.72 L 232.85,62.03 C 232.85,64.1 231.8,65.14 229.69,65.14 L 226.58,65.14 C 224.52,65.12 223.47,64.1 223.47,62.03 Z M 223.47,62.03" />
                        <path d="M 267.01,19.83 L 263.85,19.83 C 261.75,19.83 260.7,20.89 260.7,22.92 L 260.7,62.01 C 260.7,64.08 261.75,65.04 263.85,65.04 L 267.01,65.04 C 269.07,65.04 270,64.08 270,62.01 L 270,22.92 C 270,20.89 269.07,19.83 267.01,19.83 Z M 267.01,19.83" />
                    </g>
                </g>
            </svg>
        </a>
        <div class="nav-trigger">
            <span class="menu-text">Menu</span><span class="menu-icon"></span>
        </div>
    </div>
    <div class="hero-img">
        <?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.
            $post_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id() );
        ?>
            <picture class="green-overlay">
                <source media="(min-width: 1400px)" srcset="<?php echo $post_thumb_url[0]; ?>">
                <img src="<?php echo $post_thumb_url[0]; ?>" class="grayscale" alt="hero image">
            </picture>
        <?php else : ?>
            <div class="default-back"></div>
        <?php endif; ?>
    </div>
</header>

<?php
    // add image url to post meta
    ob_start();
    if ( has_post_thumbnail() ) {
        $post_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id() );

        $image_url = get_image_generation_url($post_thumb_url[0], urlencode(the_title('','',false)), 600);
        add_post_meta(the_ID(), '_amt_image_url', $image_url);
    }
    ob_end_clean();

    // print_r($image_url);
    //
    // $supported_custom_fields = array( '_amt_image_url' );
    //
    // $custom_fields = get_post_custom_keys( $post_id );
    // print_r($custom_fields);
    // print_r(" | ");
    // if ( empty( $custom_fields ) ) {
    //     print_r("empty");
    //     print_r(" | ");
    // }
    //
    // foreach( $supported_custom_fields as $sup_field ) {
    //     // If such a field exists in the db, return its content as the news keywords.
    //     print_r($sup_field);
    //     print_r(" | ");
    //     if ( in_array( $sup_field, $custom_fields ) ) {
    //         print_r("found");
    //         print_r(" | ");
    //         print_r( get_post_meta( $post_id, $sup_field, true ));
    //         print_r(" | ");
    //     }
    // }
?>
