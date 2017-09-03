<?php

/*
Description: Example of the WordPress function being used to insert content into the head.
File Path: wordpress-meta-support/snippets/basic-function.php
Copyright (c) 2017 Matthew Beckman (https://matthewbeckman.co)
*/

function insertHead() {
    // Do something here to add to the WordPress head.
}
add_action( 'wp_head', 'insertHead', 5 );

?>