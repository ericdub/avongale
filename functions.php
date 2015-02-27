<?php 
function mytheme_enqueue() {

//Load Dashicons

wp_enqueue_style('dashicons');

 

//Load Theme Stylesheet With Dashicons Dependancy

wp_enqueue_style('themename', get_stylesheet_uri(), array('dashicons'));

}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

?>
