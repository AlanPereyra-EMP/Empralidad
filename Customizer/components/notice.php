<?php
$wp_customize->add_section('emp_section_components_notice', array(
  'title'    => __('Aviso general', 'empralidad'),
  'priority' => 1,
  'panel'    => 'emp_panel_components',
  'description'=> __( 'Será visible en toda la web excepto en los formularios de contacto', 'empralidad' )
));
// Show
$wp_customize->add_setting('emp_components_notice_show', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_component_show_notice_control', array(
  'label'   => __( 'Mostrar', 'empralidad' ),
  'section' => 'emp_section_components_notice',
  'settings'=> 'emp_components_notice_show',
  'type'  	=> 'checkbox'
)));
// Text
$wp_customize->add_setting('emp_components_notice_text', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_notice_text_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_components_notice',
  'settings'   => 'emp_components_notice_text',
  'type'       => 'text'

)));
// Primary color
$wp_customize->add_setting('emp_components_notice_background', array(
  'default'           => '#005777',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_notice_background_color_control', array(
  'label'   => __('Color de fondo', 'empralidad'),
  'section' => 'emp_section_components_notice',
  'settings'=> 'emp_components_notice_background'

)));
// Text color
$wp_customize->add_setting('emp_components_notice_color', array(
  'default'           => '#ffffff',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_notice_color_control', array(
  'label'   => __('Color de texto', 'empralidad'),
  'section' => 'emp_section_components_notice',
  'settings'=> 'emp_components_notice_color'

)));
?>
