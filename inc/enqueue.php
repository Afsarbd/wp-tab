<?php
// enquery all stylesheet 
function components_css() {
  wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

  wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'fontawesomeCss', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
}
add_action( 'wp_print_styles', 'components_css' );

// wp default jquery 
function insert_jquery(){
   wp_enqueue_script('jquery');
}
add_filter('wp_head','insert_jquery');

//enqueue all javascript 

function components_script() {

		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

}
add_action( 'wp_print_styles', 'components_script' );





















?>
