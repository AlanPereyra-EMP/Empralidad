<?php
$wp_customize->add_section('emp_section_components_head', array(
  'title'    => __('Cabecera', 'empralidad'),
  'priority' => 3,
  'panel'    => 'emp_panel_components',
  'description'=> __( 'En la cabecera se encuentra el título principal', 'empralidad' )
));
// Font size
$wp_customize->add_setting('emp_components_head_title_size', array(
  'default'           => 150,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_components_head_title_size_control', array(
  'label'      => __( 'Tamaño del título', 'empralidad' ),
  'section'    => 'emp_section_components_head',
  'settings'   => 'emp_components_head_title_size',
  'type'			 => 'range',
  'input_attrs'=> array(
    'min'      => 45,
    'max'      => 250,
    'step'     => 1,
  )
));
// filter-brightness
$wp_customize->add_setting('emp_components_head_filter', array(
  'default'           => '1',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_components_head_filter_control1', array(
  'label'          => __( 'Opacidad de imagen/video', 'empralidad' ),
  'section'        => 'emp_section_components_head',
  'settings'       => 'emp_components_head_filter',
  'type'					 => 'range',
  'input_attrs' 	 => array(
    'min'          => 0.01,
    'max'          => 1,
    'step'         => 0.01,
  )
));
// Video background
$wp_customize->add_setting('emp_components_head_video', array(
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_string',

));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_components_head_video_control', array(
  'mime_type'  => 'video',
  'label'      => __('Video de  fondo', 'empralidad'),
  'section'    => 'emp_section_components_head',
  'settings'   => 'emp_components_head_video',
  'description'=> __( 'Seleciona un video de fondo (adaptativo)', 'empralidad' )
)));
// Image background
$wp_customize->add_setting('emp_components_head_image', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string',

));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_components_head_image_control', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen de fondo', 'empralidad'),
  'section'    => 'emp_section_components_head',
  'settings'   => 'emp_components_head_image',
  'description'=> __( 'Seleciona una imagen de fondo (png)', 'empralidad' )
)));
// Background color
$wp_customize->add_setting('emp_components_head_title_background', array(
  'default' => '#ffffff',
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_head_title_background_control', array(
  'label'=> __('Color de fondo', 'empralidad'),
  'section'=> 'emp_section_components_head',
  'settings'=> 'emp_components_head_title_background'
)));
// Color typography
$wp_customize->add_setting('emp_components_head_title_color', array(
  'default' => '#262626',
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_head_title_color_control', array(
  'label'=> __('Color Texto', 'empralidad'),
  'section'=> 'emp_section_components_head',
  'settings'=> 'emp_components_head_title_color'

)));
?>
