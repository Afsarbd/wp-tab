<?php

// Register Custom Post
add_action( 'init', 'tab_custom_post' );
function tab_custom_post() {

// Tab section
  register_post_type( 'tab',
    array(
      'labels' => array(
        'name' => __( 'Tab' ),
        'singular_name' => __( 'tab' ),
         'add_new_item' => __( 'Add New tab Item' )
      ),
    'public' => true,
    'menu_position' => 5,
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'has_archive' => true,
    )
  );

}

?>
