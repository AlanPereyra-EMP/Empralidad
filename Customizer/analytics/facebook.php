<?php
// Script
$wp_customize->add_setting('emp_analytics_facebook_script', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_analytics_facebook_text_control', array(
  'label'      => __('Facebook analytics (pixel)', 'empralidad'),
  'section'    => 'emp_section_analytics',
  'settings'   => 'emp_analytics_facebook_script',
  'type'       => 'text'
)));
?>
