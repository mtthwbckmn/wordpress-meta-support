<?php

/* Add Open Graph & Twitter Card Support */
function insertMeta() {
    
    global $wp; // Get WordPress data.
    global $post; // Get post data.
     
    /* User Defaults */
    $defTitle  = "My Site Title"; // Default Title
    $defDesc   = "My site's description."; // Default Description
    $defImg    = "https://example.com/image.jpg"; // Default Image
    $defWidth  = "500"; // Default Image Width
    $defHeight = "500"; // Default Image Height
    $fbAppId   = "123myfacebookappid"; // Facebook App ID
    $twitter   = "my_twitter_account"; // Twitter Account
    
    /* WordPress Defined Variables */
    $siteName = get_bloginfo( 'name' ); // Get WordPress site title.
    $genLink  = home_url( add_query_arg( array(), $wp->request ) ); // Generate URL based on WordPress request.
    
    if ( !is_singular() || is_home() || is_front_page() ) {
        echo '<meta property="og:url" content="' . $genLink . '">'."\n";
        echo '<meta property="og:type" content="website">'."\n";
        echo '<meta property="og:description" content="' . $defDesc . '">'."\n";
        echo '<meta property="og:title" content="' . $defTitle . '">'."\n";
        echo '<meta property="og:site_name" content="' . $siteName . '">'."\n";
        echo '<meta property="og:image" content="' . $defImg . '">'."\n";
        echo '<meta property="og:image:height" content="' . $defHeight . '">'."\n";
        echo '<meta property="og:image:width" content="' . $defWidth . '">'."\n";
        if ( $fbAppId ) {
            echo '<meta property="fb:app_id" content="' . $fbAppId . '">'."\n";
        }
        echo '<meta name="twitter:card" content="summary">'."\n";
        echo '<meta name="twitter:site" content="@' . $twitter . '">'."\n";
        echo '<meta name="twitter:title" content="' . $defTitle . '">'."\n";
        echo '<meta name="twitter:description" content="' . $defDesc . '">'."\n";
        echo '<meta name="twitter:image" content="' . $defImg . '">'."\n";
    } else {
        /* WordPress Post + Page Defined Variables */
        $title  = get_the_title(); // Get post title.
        $link   = get_permalink(); // Get post permalink.
        $desc   = wp_trim_words( apply_filters( 'the_content', $post->post_content ), 30 ); // Get content & trim to 30 words.
        $thumb  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); // Get image array.
        $img    = esc_attr( $thumb[0] ); // Parse array for image URL.
        $width  = $thumb[1]; // Parse array for image width.
        $height = $thumb[2]; // Parse array for image height.

        /* Open Graph */
        if ( $link ) {
            echo '<meta property="og:url" content="' . $link . '">'."\n";
        } else {
            echo '<meta property="og:url" content="' . $genLink . '">'."\n";
        }
        if ( is_page() ) {
            echo '<meta property="og:type" content="website">'."\n";
        } else {
            echo '<meta property="og:type" content="article">'."\n";
        }
        if ( $desc ) {
            echo '<meta property="og:description" content="' . $desc . '">'."\n";
        } else {
            echo '<meta property="og:description" content="' . $defDesc . '">'."\n";
        }
        if ( $title ) {
            echo '<meta property="og:title" content="' . $title . '">'."\n";
        } else {
            echo '<meta property="og:title" content="' . $defTitle . '">'."\n";
        }
        echo '<meta property="og:site_name" content="' . $siteName . '">'."\n";
        if ( $img ) {
            echo '<meta property="og:image" content="' . $img . '">'."\n";
            echo '<meta property="og:image:height" content="' . $width . '">'."\n";
            echo '<meta property="og:image:width" content="' . $height . '">'."\n";
        } else {
            echo '<meta property="og:image" content="' . $defImg . '">'."\n";
            echo '<meta property="og:image:height" content="' . $defWidth . '">'."\n";
            echo '<meta property="og:image:width" content="' . $defHeight . '">'."\n";
        }
        
        /* Facebook Options */
        if ( $fbAppId ) {
            echo '<meta property="fb:app_id" content="' . $fbAppId . '">'."\n";
        }
        
        /* Twitter Cards */
        echo '<meta name="twitter:card" content="summary">'."\n";
        if ( $twitter ) {
            echo '<meta name="twitter:site" content="@' . $twitter . '">'."\n";
        } else {
            // The Twitter username was left blank. Do nothing.
        }
        if ( $title ) {
            echo '<meta name="twitter:title" content="' . $title . '">'."\n";
        } else {
            echo '<meta name="twitter:title" content="' . $defTitle . '">'."\n"; 
        }
        if ( $desc ) {
            echo '<meta name="twitter:description" content="' . $desc . '">'."\n";
        } else {
            echo '<meta name="twitter:description" content="' . $defDesc . '">'."\n";
        }
        if ( $img ) {
            echo '<meta name="twitter:image" content="' . $img . '">'."\n";
        } else {
            echo '<meta name="twitter:image" content="' . $defImg . '">'."\n";
        }
    }
}
add_action( 'wp_head', 'insertMeta', 5 );

?>