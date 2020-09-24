<?php
//Text header homepage
$wp_customize->add_section('emp_section_head_text', array(
  'title'    => __('Titulo principal', 'empralidad'),
  'priority' => 1,
  'panel'    => 'emp_panel_home'
));
// Title 1
  $wp_customize->add_setting('emp_head_text_title', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_title_control', array(
  'label'   => __('Titulo principal', 'empralidad'),
  'section' => 'emp_section_head_text',
  'settings'=> 'emp_head_text_title'

)));
// Textarea 1
$wp_customize->add_setting('emp_head_textarea', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_head_text',
  'settings'   => 'emp_head_textarea',
  'type'       => 'textarea',
  'description'=> __( 'Texto destacado principal', 'empralidad' )
)));
// button show 1
$wp_customize->add_setting('emp_head_button_show1', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control1', array(
  'label'   => __( 'Mostrar botón', 'empralidad' ),
  'section' => 'emp_section_head_text',
  'settings'=> 'emp_head_button_show1',
  'type'   	=> 'checkbox'
)));
// Button 1
$wp_customize->add_setting('emp_head_btn1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control1', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_head_text',
  'settings'    => 'emp_head_btn1',
  'description'	=> __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Link button 1
$wp_customize->add_setting('emp_head_link_btn1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control1', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_head_text',
  'settings'    => 'emp_head_link_btn1',
  'description'	=> __( 'Pega acá el link del boton', 'empralidad' )
)));

//Title 2
$wp_customize->add_setting('emp_head_show2', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_show_control2', array(
  'label'   => __( 'Mostrar titulo', 'empralidad' ),
  'section' => 'emp_section_head_text2',
  'settings'=> 'emp_head_show2',
  'type'  	=> 'checkbox'
)));
$wp_customize->add_section('emp_section_head_text2', array(
  'title'    => __('Titulo secundario', 'empralidad'),
  'priority' => 2,
  'panel'    => 'emp_panel_home'
));
// Title 2
$wp_customize->add_setting('emp_head_text2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_control2', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_head_text2',
  'settings'=> 'emp_head_text2'
)));
// Textarea 2
$wp_customize->add_setting('emp_head_textarea2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea_control2', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_head_text2',
  'settings'   => 'emp_head_textarea2',
  'type'       => 'textarea',
  'description'=> __( 'Texto destacado principal', 'empralidad' )
)));
// button show 2
$wp_customize->add_setting('emp_head_button_show2', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control2', array(
  'label'     => __( 'Mostrar botón', 'empralidad' ),
  'section'   => 'emp_section_head_text2',
  'settings'  => 'emp_head_button_show2',
  'type'      => 'checkbox'
)));
// Button 2
$wp_customize->add_setting('emp_head_btn2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control2', array(
  'label'         => __('Texto de boton', 'empralidad'),
  'section'       => 'emp_section_head_text2',
  'settings'      => 'emp_head_btn2',
  'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Link button 2
$wp_customize->add_setting('emp_head_link_button2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control2', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_head_text2',
  'settings'    => 'emp_head_link_button2',
  'description'	=> __( 'Pega acá el link del boton', 'empralidad' )
)));

//Title 3
$wp_customize->add_setting('emp_head_show3', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_show_control3', array(
  'label'          => __( 'Mostrar titulo', 'empralidad' ),
  'section'        => 'emp_section_head_text3',
  'settings'       => 'emp_head_show3',
  'type'   				 => 'checkbox'
)));
$wp_customize->add_section('emp_section_head_text3', array(
  'title'    => __('Titulo secundario', 'empralidad'),
  'priority' => 3,
  'panel'    => 'emp_panel_home'
));
// Title 3
  $wp_customize->add_setting('emp_head_text3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_text_control3', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_head_text3',
  'settings'=> 'emp_head_text3'

)));
// Textarea 3
  $wp_customize->add_setting('emp_head_textarea3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_textarea3_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_head_text3',
  'settings'   => 'emp_head_textarea3',
  'type'       => 'textarea',
  'description'=> __( 'Texto destacado principal', 'empralidad' )

)));
// button show 3
$wp_customize->add_setting('emp_head_button_show3', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_aud_control3', array(
  'label'     => __( 'Mostrar botón', 'empralidad' ),
  'section'   => 'emp_section_head_text3',
  'settings'  => 'emp_head_button_show3',
  'type'      => 'checkbox'
)));
// Button 3
$wp_customize->add_setting('emp_head_button3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_btn_control3', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_head_text3',
  'settings'    => 'emp_head_button3',
  'description'	=> __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Link button 3
$wp_customize->add_setting('emp_head_link_button3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_head_link_btn_control3', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_head_text3',
  'settings'    => 'emp_head_link_button3',
  'description' => __( 'Pega acá el link del boton', 'empralidad' )
)));
?>
