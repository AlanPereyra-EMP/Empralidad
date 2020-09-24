<?php
// section 1
$wp_customize->add_section('emp_section_homepage1', array(
  'title'       => __('Contenido superior', 'empralidad'),
  'priority'    => 4,
  'panel'       => 'emp_panel_home',
  'description' => __('Esta sección se ubicará sobre el contenido proncipal', 'empralidad')
));
// Show 1
$wp_customize->add_setting('emp_homepage_show_1', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control1', array(
  'label'   => __( 'Mostrar', 'empralidad' ),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_show_1',
  'type'  	=> 'checkbox'
)));
// Title 1
$wp_customize->add_setting('emp_homepage_title1', array(
  'default'           => 'Anuncio destacado personalizable',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control1', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_title1'
)));
// Img 1
$wp_customize->add_setting('emp_homepage_img1', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control1', array(
  'label'   => __('Imagen', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_img1',
  'width'   => 500,
  'height'  => 250
)));
// Text 1
$wp_customize->add_setting('emp_homepage_text1', array(
  'default'           => 'Podes escribir acá avisos o pegar scripts de anuncios (adsense)',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control1', array(
  'label'   => __('Script o Texto descriptivo', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'type'    => 'textarea',
  'settings'=> 'emp_homepage_text1'
)));
// alings 1
$wp_customize->add_setting('emp_homepage_text_aling1', array(
  'default'           => 'center',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control1', array(
  'label'      => __( 'Alineación', 'empralidad' ),
  'section'    => 'emp_section_homepage1',
  'settings'   => 'emp_homepage_text_aling1',
  'type'       => 'radio',
  'choices'    => array(
    'left'     => __( 'Izquierda', 'empralidad' ),
      'center' => __( 'Centrado', 'empralidad' ),
      'right'  => __( 'Derecha', 'empralidad' ),
      'justify'=> __( 'Justificado', 'empralidad' )
  )
)));
// Button 1
$wp_customize->add_setting('emp_homepage_btn1', array(
  'default'           => 'Boton a otra pagina o a un articulo',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control1', array(
  'label'   => __('Texto de boton', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_btn1'

)));
// Link button 1
$wp_customize->add_setting('emp_homepage_link_btn1', array(
  'default'           => '#',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control1', array(
  'label'   => __('Link del boton', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_link_btn1'

)));
// Section 2
$wp_customize->add_section('emp_section_homepage2', array(
  'title'    => __('Contenido medio', 'empralidad'),
  'priority' => 5,
  'panel'    => 'emp_panel_home'
));
// Show 2
$wp_customize->add_setting('emp_homepage_show_2', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control2', array(
  'label'   => __( 'Mostrar', 'empralidad' ),
  'section' => 'emp_section_homepage2',
  'settings'=> 'emp_homepage_show_2',
  'type'  	=> 'checkbox'
)));
// Title 2
$wp_customize->add_setting('emp_homepage_title2', array(
    'default'           => '',
    'trasnport'         => 'refresh',
    'sanitize_callback' => 'sanitize_string'
  ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control2', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_homepage2',
  'settings'=> 'emp_homepage_title2'
)));
// Img 2
$wp_customize->add_setting('emp_homepage_img2', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control2', array(
  'label'   => __('Imagen', 'empralidad'),
  'section' => 'emp_section_homepage2',
  'settings'=> 'emp_homepage_img2',
  'width'   => 500,
  'height'  => 250
)));
// Text 2
$wp_customize->add_setting('emp_homepage_text2', array(
    'default'           => '',
    'trasnport'         => 'refresh',
    'sanitize_callback' => 'sanitize_encoded'
  ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control2', array(
  'label'   => __('Script o Texto descriptivo', 'empralidad'),
  'section' => 'emp_section_homepage2',
  'type'    => 'textarea',
  'settings'=> 'emp_homepage_text2'
)));
// alings 2
$wp_customize->add_setting('emp_homepage_text_aling2', array(
  'default'           => 'center',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control2', array(
  'label'      => __( 'Alineación', 'empralidad' ),
  'section'    => 'emp_section_homepage2',
  'settings'   => 'emp_homepage_text_aling2',
  'type'       => 'radio',
  'choices'    => array(
    'left'     => __( 'Izquierda', 'empralidad' ),
      'center' => __( 'Centrado', 'empralidad' ),
      'right'  => __( 'Derecha', 'empralidad' ),
      'justify'=> __( 'Justificado', 'empralidad' )
  )
)));
// Button 2
$wp_customize->add_setting('emp_homepage_btn2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control2', array(
  'label'   => __('Texto de boton', 'empralidad'),
  'section' => 'emp_section_homepage2',
  'settings'=> 'emp_homepage_btn2'
)));
// Link button 2
$wp_customize->add_setting('emp_homepage_link_btn2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control2', array(
  'label'   => __('Link del boton', 'empralidad'),
  'section' => 'emp_section_homepage2',
  'settings'=> 'emp_homepage_link_btn2'
)));
// Section 3
$wp_customize->add_section('emp_section_homepage3', array(
  'title'    => __('Contenido inferior', 'empralidad'),
  'priority' => 6,
  'panel'    => 'emp_panel_home'
));
// Show 3
$wp_customize->add_setting('emp_homepage_show_3', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_show_control3', array(
  'label'          => __( 'Mostrar', 'empralidad' ),
  'section'        => 'emp_section_homepage3',
  'settings'       => 'emp_homepage_show_3',
  'type'    			 => 'checkbox'
)));
// Title 3
$wp_customize->add_setting('emp_homepage_title3', array(
    'default'           => '',
    'trasnport'         => 'refresh',
    'sanitize_callback' => 'sanitize_string'
  ));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_control3', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_homepage3',
  'settings'=> 'emp_homepage_title3'
)));
// Img 3
$wp_customize->add_setting('emp_homepage_img3', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'emp_homepage_img_control3', array(
  'label'   => __('Imagen', 'empralidad'),
  'section' => 'emp_section_homepage3',
  'settings'=> 'emp_homepage_img3',
  'width'   => 500,
  'height'  => 250
)));
// Text 3
$wp_customize->add_setting('emp_homepage_text3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control3', array(
  'label'   => __('Script o Texto descriptivo', 'empralidad'),
  'section' => 'emp_section_homepage3',
  'type'    => 'textarea',
  'settings'=> 'emp_homepage_text3'
)));
// alings 3
$wp_customize->add_setting('emp_homepage_text_aling3', array(
  'default' => 'center',
  'trasnport' => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_title_aling_control3', array(
  'label'       => __( 'Alineación', 'empralidad' ),
  'section'     => 'emp_section_homepage3',
  'settings'    => 'emp_homepage_text_aling3',
  'type'        => 'radio',
  'choices'     => array(
    'left'      => __( 'Izquierda', 'empralidad' ),
      'center'  => __( 'Centrado', 'empralidad' ),
      'right'   => __( 'Derecha', 'empralidad' ),
      'justify' => __( 'Justificado', 'empralidad' )
  )
)));
// Button 3
$wp_customize->add_setting('emp_homepage_btn3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_btn_control3', array(
  'label'   => __('Texto de boton', 'empralidad'),
  'section' => 'emp_section_homepage3',
  'settings'=> 'emp_homepage_btn3'
)));
// Link button 3
$wp_customize->add_setting('emp_homepage_link_btn3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_link_btn_control3', array(
  'label'   => __('Link del boton', 'empralidad'),
  'section' => 'emp_section_homepage3',
  'settings'=> 'emp_homepage_link_btn3'
)));
?>
