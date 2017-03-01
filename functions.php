<?php

//File included

require_once('libs/ReduxCore/framework.php');
require_once('libs/sample/themeoption.php');
require_once('inc/customposts.php');
require_once('meta-box/init.php');
require_once('meta-box/afsarwebdev-functions.php');
require_once('inc/enqueue.php');

//Enque Scripts
function afsarwebdev_common_functions(){

	//Title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.

	add_theme_support( 'post-thumbnails' );



}
add_action( 'after_setup_theme', 'afsarwebdev_common_functions' );









































































?>
