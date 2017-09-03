<?php

/*
Description: View the WordPress functions being used to construct the tags automatically.
File Path: wordpress-meta-support/snippets/wordpress-functions.php
Copyright (c) 2017 Matthew Beckman (https://matthewbeckman.co)
*/

/* WordPress Data */
global $wp; // Get WordPress site data.
global $post; // Get WordPress post data.

/* WordPress Global Functions */
get_bloginfo( 'name' ); // Site title.
home_url( add_query_arg( array(), $wp->request ) ); // Canonical URL from WordPress request.

/* WordPress Post Functions */
get_the_title(); // Post title.
get_permalink(); // Post permalink.
wp_trim_words( apply_filters( 'the_content', $post->post_content ), 30 ); // Post content & trim to first 30 words.
wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); // Image array from post.
esc_attr( $yourImageVariable[0] ); // Parse image array for image URL.
$yourImageVariable[1]; // Parse image array for image width.
$yourImageVariable[2]; // Parse image array for image height.
get_the_archive_title(); // Archive page title.

?>