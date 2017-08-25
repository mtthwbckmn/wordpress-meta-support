<?php

/* Add Open Graph & Twitter Card Support */
function insertMeta() {
    
    global $wp; // Get WordPress data.
    global $post; // Get post data.
     
    /* User Variables */
    $defTitle  = "My Site Title"; // Default Title
    $defDesc   = "My site's description."; // Default Description
    $defImg    = "https://example.com/image.jpg"; // Default Image
    $defWidth  = "500"; // Default Image Width
    $defHeight = "500"; // Default Image Height
    $fbAppId   = "123myfacebookappid"; // Facebook App ID
    $twitter   = "my_twitter_account"; // Twitter Account
    
    /* WordPress Variables */
    $siteName = get_bloginfo( 'name' ); // Get WordPress site title.
    $genLink  = home_url( add_query_arg( array(), $wp->request ) ); // Generate URL based on WordPress request.
    
    if ( !is_singular() ) {
        echo '<meta property="og:url" content="' . $genLink . '">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:description" content="' . $defDesc . '">';
        echo '<meta property="og:title" content="' . $defTitle . '">';
        echo '<meta property="og:site_name" content="' . $siteName . '">';
        echo '<meta property="og:image" content="' . $defImg . '">';
        echo '<meta property="og:image:height" content="' . $defHeight . '">';
        echo '<meta property="og:image:width" content="' . $defWidth . '">';
        if ( $fbAppId ) {
            echo '<meta property="fb:app_id" content="' . $fbAppId . '">';
        }
        echo '<meta name="twitter:card" content="summary">';
        echo '<meta name="twitter:site" content="@' . $twitter . '">';
        echo '<meta name="twitter:title" content="' . $defTitle . '">';
        echo '<meta name="twitter:description" content="' . $defDesc . '">';
        echo '<meta name="twitter:image" content="' . $defImg . '">';
    } else {
        /* WordPress Variables */
        $title  = get_the_title(); // Get post title.
        $link   = get_permalink(); // Get post permalink.
        $desc   = wp_trim_words( apply_filters( 'the_content', $post->post_content ), 30 ); // Get content & trim to 30 words.
        $thumb  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); // Get image array.
        $img    = esc_attr( $thumb[0] ); // Parse array for image URL.
        $width  = $thumb[1]; // Parse array for image width.
        $height = $thumb[2]; // Parse array for image height.

        /* Open Graph */
        if ( $link ) {
            echo '<meta property="og:url" content="' . $link . '">';
        } else {
            echo '<meta property="og:url" content="' . $genLink . '">';
        }
        echo '<meta property="og:type" content="article">';
        if ( $desc ) {
            echo '<meta property="og:description" content="' . $desc . '">';
        } else {
            echo '<meta property="og:description" content="' . $defDesc . '">';
        }
        if ( $title ) {
            echo '<meta property="og:title" content="' . $title . '">';
        } else {
            echo '<meta property="og:title" content="' . $defTitle . '">';
        }
        echo '<meta property="og:site_name" content="' . $siteName . '">';
        if ( $img ) {
            echo '<meta property="og:image" content="' . $img . '">';
            echo '<meta property="og:image:height" content="' . $width . '">';
            echo '<meta property="og:image:width" content="' . $height . '">';
        } else {
            echo '<meta property="og:image" content="' . $defImg . '">';
            echo '<meta property="og:image:height" content="' . $defWidth . '">';
            echo '<meta property="og:image:width" content="' . $defHeight . '">';
        }
        
        /* Facebook Options */
        if ( $fbAppId ) {
            echo '<meta property="fb:app_id" content="' . $fbAppId . '">';
        }
        
        /* Twitter Cards */
        echo '<meta name="twitter:card" content="summary">';
        if ( $twitter ) {
            echo '<meta name="twitter:site" content="@' . $twitter . '">';
        } else {
            // The Twitter username was left blank. Do nothing.
        }
        if ( $title ) {
            echo '<meta name="twitter:title" content="' . $title . '">';
        } else {
            echo '<meta name="twitter:title" content="' . $defTitle . '">'; 
        }
        if ( $desc ) {
            echo '<meta name="twitter:description" content="' . $desc . '">';
        } else {
            echo '<meta name="twitter:description" content="' . $defDesc . '">';
        }
        if ( $img ) {
            echo '<meta name="twitter:image" content="' . $img . '">';
        } else {
            echo '<meta name="twitter:image" content="' . $defImg . '">';
        }
    }
}
add_action( 'wp_head', 'insertMeta', 5 );

?>