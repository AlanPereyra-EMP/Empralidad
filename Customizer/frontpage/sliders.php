<?php
// Slider 1
$wp_customize->add_section('emp_section_slider', array(
  'title'      => __('Sliders homepage', 'empralidad'),
  'priority'   => 2,
  'description'=> __('El slider solo se verá en la homepage', 'empralidad')
));
// Sliders show 1
$wp_customize->add_setting('emp_slider_show1', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_slider_show_control1', array(
  'label'   => __( 'Mostrar titulo', 'empralidad' ),
  'section' => 'emp_section_slider',
  'settings'=> 'emp_slider_show1_show',
  'type'  	=> 'checkbox'
)));
// Slider 1
$wp_customize->add_setting('emp_slider_image1', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_slider_image_control1', array(
  'mime_type'  => 'image',
  'label'      => __('Slider 1', 'empralidad'),
  'section'    => 'emp_section_slider',
  'settings'   => 'emp_slider_image1',
  'description'=> __('Seleciona una imagen horizontal (entre 4:3 y 16:9)', 'empralidad')
)));
// Slider 2
$wp_customize->add_setting('emp_slider_image2', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_slider_image_control2', array(
  'mime_type'  => 'image',
  'label'      => __('Slider 2', 'empralidad'),
  'section'    => 'emp_section_slider',
  'settings'   => 'emp_slider_image2',
  'description'=> __('Seleciona una imagen horizontal (entre 4:3 y 16:9)', 'empralidad')
)));
// Slider 3
$wp_customize->add_setting('emp_slider_image3', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_slider_image_control3', array(
  'mime_type'  => 'image',
  'label'      => __('Slider 3', 'empralidad'),
  'section'    => 'emp_section_slider',
  'settings'   => 'emp_slider_image3',
  'description'=> __('Seleciona una imagen horizontal (entre 4:3 y 16:9)', 'empralidad')
)));
?>
