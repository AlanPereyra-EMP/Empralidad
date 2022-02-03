<?php
// Include template CSS
function emp_styles(){
  wp_enqueue_style ('emp_styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style ('font_awesome', get_template_directory_uri() . '/includes/fonts/fa/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'emp_styles');

// Include template JS
function emp_scripts(){
  wp_enqueue_script ('emp_complements', get_template_directory_uri() . '/includes/js/complements.js', array (), null, false);
}
add_action('wp_enqueue_scripts', 'emp_scripts');

function emp_scripts_footer() {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);

  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'emp_scripts_footer' );

function emp_deregister_styles() {
  wp_deregister_style('wc-block-style');
	wp_deregister_style('woocommerce');
	wp_deregister_style('woocommerce-smallcreen');
  wp_deregister_style('contact-form-7');
  wp_deregister_style('dnd-upload-cf7');
}
add_action('wp_print_styles', 'emp_deregister_styles', 100);
?>
