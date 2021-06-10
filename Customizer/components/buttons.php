<?php
$wp_customize->add_section('emp_section_components_btn', array(
    'title'=> __('Botones', 'empralidad'),
    'priority' => 5,
    'panel' => 'emp_panel_components'
  ));
// btn bg
$wp_customize->add_setting('emp_components_btn_bg', array(
  'default' => '#005777',
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_btn_bg_control', array(
  'label'=> __('Color de fondo', 'empralidad'),
  'section'=> 'emp_section_components_btn',
  'settings'=> 'emp_components_btn_bg'

)));
// btn text color
$wp_customize->add_setting('emp_components_btn_color', array(
  'default' => '#ffffff',
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_btn_color_control', array(
  'label'=> __('Color de texto', 'empralidad'),
  'section'=> 'emp_section_components_btn',
  'settings'=> 'emp_components_btn_color'

)));
?>
