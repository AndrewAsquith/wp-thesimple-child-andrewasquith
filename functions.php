<?php

Function child_enqueue_scripts() {
	wp_register_style( 'childtheme_style', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childtheme_style' );
	

wp_enqueue_style('simple-mediaplayer', get_template_directory_uri() . '/css/' . 'mediaelementplayer.css' ); 
wp_enqueue_style('simple-hoverex', get_template_directory_uri() . '/css/' . 'hoverex-all.css');
wp_enqueue_style('simple-vectoricons', get_template_directory_uri() . '/css/' . 'vector-icons.css');
wp_enqueue_style('simple-fontawesome', get_template_directory_uri() . '/css/' . 'font-awesome.min.css');
wp_enqueue_style('simple-linecon', get_template_directory_uri() . '/css/' . 'linecon.css');
wp_enqueue_style('simple-lineaicon', get_template_directory_uri() . '/css/' . 'lineaicon.css');
wp_enqueue_style('simple-steadysets', get_template_directory_uri() . '/css/' . 'steadysets.css');
wp_enqueue_style('simple-jquerypie', get_template_directory_uri() . '/css/' . 'jquery.easy-pie-chart.css');
wp_enqueue_style('simple-odometer', get_template_directory_uri() . '/css/' . 'odometer-theme-minimal.css');
wp_enqueue_style('simple-linearicons', get_template_directory_uri() . '/css/' . 'linearicons.css');
wp_enqueue_style('simple-snap', get_template_directory_uri() . '/css/' . 'snap.css');
wp_enqueue_style('simple-jqueryfullpage', get_template_directory_uri() . '/css/' . 'jquery.fullPage.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts', 20);


function cleanup_simple_async_css() {
	wp_dequeue_script( 'simple-load-css-async' );
	wp_deregister_script( 'simple-load-css-async' );
}

add_action ('wp_print_scripts', 'cleanup_simple_async_css', 20);
?>
