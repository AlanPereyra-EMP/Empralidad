<?php
$wp_customize->add_setting('emp_whatsapp_color', array(
  'default'          => '#000000',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_whatsapp_color_control', array(
  'label'   => __('Color de texto', 'empralidad'),
  'panel'   => 'woocommerce',
  'settings'=> 'emp_whatsapp_color'
)));
$wp_customize->add_setting('emp_whatsapp_bg', array(
  'default'          => '#ffffff',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_whatsapp_bg_control', array(
  'label'   => __('Color de fondo', 'empralidad'),
  'panel'   => 'woocommerce',
  'settings'=> 'emp_whatsapp_bg'
)));
?>
