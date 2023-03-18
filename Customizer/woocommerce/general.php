<?php
$wp_customize->add_section('emp_woocommerce_general', array(
  'title' => __('Configuraciones generales', 'empralidad'),
  'theme_supports'=> array('woocommerce'),
  'priority'      => 3,
  'panel'         => 'woocommerce'
));
$wp_customize->add_setting('emp_woocommerce_color', array(
  'default'          => '#000000',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_woocommerce_color_control', array(
  'label'   => __('Color de texto', 'empralidad'),
  'section'   => 'emp_woocommerce_general',
  'settings'=> 'emp_woocommerce_color'
)));
$wp_customize->add_setting('emp_woocommerce_bg', array(
  'default'          => '#ffffff',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_woocommerce_bg_control', array(
  'label'   => __('Color de fondo', 'empralidad'),
  'section'   => 'emp_woocommerce_general',
  'settings'=> 'emp_woocommerce_bg'
)));
?>
