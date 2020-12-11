<?php
// Script
$wp_customize->add_setting('emp_analytics_google_script', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_analytics_google_text_control', array(
  'label'      => __('Google analytics (gtag.js)', 'empralidad'),
  'section'    => 'emp_section_analytics',
  'settings'   => 'emp_analytics_google_script',
  'type'       => 'text'
)));
?>
