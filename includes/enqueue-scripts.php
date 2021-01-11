<?php
// Include template CSS
function emp_styles(){
  wp_enqueue_style ('emp_styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style ('emp_plugin-support', get_template_directory_uri() . '/includes/css/plugins-support.css');
  wp_enqueue_style ('emp_sfpo', get_template_directory_uri() . '/includes/css/sfpo.css');
  wp_enqueue_style ('font_awesome', get_template_directory_uri() . '/includes/fonts/fa/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'emp_styles');

// Include template JS
function emp_scripts(){
  wp_enqueue_script ('emp_jquery', get_template_directory_uri() . '/includes/js/jquery-3.3.1.min.js', array (), null, false );
  wp_enqueue_script ('bootstrap', get_template_directory_uri() . '/includes/js/bootstrap.bundle.min.js', array ('emp_jquery'), null, false);
  wp_enqueue_script ('emp_complements', get_template_directory_uri() . '/includes/js/complements.js', array ('emp_jquery'), null, false);
}
add_action('wp_enqueue_scripts', 'emp_scripts');

function emp_scripts_footer() {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);

  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('wp_enqueue_scripts', 'emp_scripts_footer');

function emp_deregister_styles() {
  wp_deregister_style('wp-block-library');
  wp_deregister_style('wc-block-style');
	wp_deregister_style('woocommerce');
	wp_deregister_style('woocommerce-smallcreen');
  wp_deregister_style('contact-form-7');
  wp_deregister_style('dnd-upload-cf7');
}
add_action('wp_print_styles', 'emp_deregister_styles', 100);
?>
