<?php
$wp_customize->add_section('emp_section_components_footer', array(
  'title'    => __('Footer', 'empralidad'),
  'priority' => 6,
  'panel'    => 'emp_panel_components'
));
// Background color
$wp_customize->add_setting('emp_components_footer_background', array(
  'default'          => '#262626',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_footer_background_color_control', array(
  'label'      => __('Color de fondo', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_background'
)));
// Color typography
$wp_customize->add_setting('emp_components_footer_color', array(
  'default'          => '#ffffff',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_components_footer_color_control', array(
  'label'   => __('Color de texto', 'empralidad'),
  'section' => 'emp_section_components_footer',
  'settings'=> 'emp_components_footer_color'
)));
// Terms and conditions
$wp_customize->add_setting('emp_components_footer_term', array(
  'default'           => '#',
  'sanitize_callback' => 'sanitize_url_'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_term_control', array(
  'label'   => 'Pagina de Terminos y Condiciones',
  'section' => 'emp_section_components_footer',
  'settings'=> 'emp_components_footer_term',
  'type'    => 'dropdown-pages',
)));
// Privacy policies
$wp_customize->add_setting('emp_components_footer_poli', array(
  'default'           => '#',
  'sanitize_callback' => 'sanitize_url_'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_poli', array(
  'label'   => 'Pagina de Politicas de Privacidad',
  'section' => 'emp_section_components_footer',
  'settings'=> 'emp_components_footer_poli',
  'type'    => 'dropdown-pages',
)));
// Copyright
$wp_customize->add_setting('emp_components_footer_text', array(
  'default'           => 'Copyright © 2024',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_text_control', array(
  'label'   => __('Copyright de esta web ', 'empralidad'),
  'section' => 'emp_section_components_footer',
  'settings'=> 'emp_components_footer_text',
)));
// Nickname
$wp_customize->add_setting('emp_components_footer_social_nickname', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_social_nickname_control', array(
  'label'      => __('Nombre en Redes Sociales', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_social_nickname'
  
)));
// Instagram button
$wp_customize->add_setting('emp_components_footer_insta', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_insta_control', array(
  'label'      => __('Instagram', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_insta'
  
)));
// Tik Tok button
$wp_customize->add_setting('emp_components_footer_tiktok', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_tiktok_control', array(
  'label'      => __('Tik Tok', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_tiktok'
  
)));
// Youtube button
$wp_customize->add_setting('emp_components_footer_yt', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_yt_control', array(
  'label'      => __('Youtube', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_yt'
  
)));
// Facebook button
$wp_customize->add_setting('emp_components_footer_face', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_face_control', array(
  'label'      => __('Facebook', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_face'
  
)));
// Twitter button
$wp_customize->add_setting('emp_components_footer_tw', array(
  'default'          => '',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_tw_control', array(
  'label'      => __('Twitter', 'empralidad'),
  'section'    => 'emp_section_components_footer',
  'settings'   => 'emp_components_footer_tw'
  
)));
// Code
  $wp_customize->add_setting('emp_components_footer_qr', array(
    'default'          => '',
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_encoded'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_qr_control', array(
    'label'      => __('Codigo QR', 'empralidad'),
    'section'    => 'emp_section_components_footer',
    'settings'   => 'emp_components_footer_qr',
    'description'=> __( 'Formulario 960 D (Solo Argentina)', 'empralidad' )

  )));
// Disable owner
$wp_customize->add_setting('emp_components_footer_owner', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_components_footer_owner_control', array(
  'label'          => __( '', 'empralidad' ),
  'section'        => 'emp_section_components_footer',
  'settings'       => 'emp_components_footer_owner',
  'type'    			 => 'checkbox'
)));
?>
