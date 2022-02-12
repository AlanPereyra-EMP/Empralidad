<?php
// Add panel
$wp_customize->add_panel( 'emp_panel_sections', array(
  'priority' => 2,
  'title'    => __( 'Contenido adicional', 'empralidad' )
));
// section 1
$wp_customize->add_section('emp_section_homepage1', array(
  'title'       => __('Contenido extra/shortcode', 'empralidad'),
  'priority'    => 4,
  'panel'       => 'emp_panel_sections',
  'description' => __('Soporta shortcodes de woocomerce', 'empralidad')
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
// Margin 1
$wp_customize->add_setting('emp_homepage_size1', array(
  'default'           => 0,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_homepage_size_control1', array(
  'label'      => __( 'Márgenes', 'empralidad' ),
  'section'    => 'emp_section_homepage1',
  'settings'   => 'emp_homepage_size1',
  'type'			 => 'range',
  'input_attrs'=> array(
    'min'      => 0,
    'max'      => 15,
    'step'     => 1
  )
));
// Text 1
$wp_customize->add_setting('emp_homepage_text1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control1', array(
  'label'   => __('Script, shortcode o texto', 'empralidad'),
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
// Show label
$wp_customize->add_setting('emp_homepage_categories_label_show', array(
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_encoded'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_categories_label_show_control', array(
    'label'      => __( 'Mostrar u Ocultar titulo de categoria', 'empralidad' ),
    'section'    => 'emp_section_homepage1',
    'settings'   => 'emp_homepage_categories_label_show',
    'type'    	 => 'checkbox',
    'input_attrs'=> array(
      'class'    => 'd-inline-block'
    )
)));
// Carousel text color
$wp_customize->add_setting('emp_homepage_carousel_background', array(
  'default'          => '#262626',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_homepage_carousel_background_color_control', array(
  'label'      => __('Color de fondo', 'empralidad'),
  'section'    => 'emp_section_homepage1',
  'settings'   => 'emp_homepage_carousel_background'
)));
// Color typography
$wp_customize->add_setting('emp_homepage_carousel_color', array(
  'default'          => '#ffffff',
  'trasnport'        => 'refresh',
  'sanitize_callback'=> 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'emp_homepage_carousel_color_control', array(
  'label'   => __('Color de texto', 'empralidad'),
  'section' => 'emp_section_homepage1',
  'settings'=> 'emp_homepage_carousel_color'
)));
// Section 2
$wp_customize->add_section('emp_section_homepage2', array(
  'title'    => __('Contenido medio', 'empralidad'),
  'priority' => 5,
  'panel'    => 'emp_panel_sections'
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
// Margin 2
$wp_customize->add_setting('emp_homepage_size2', array(
  'default'           => 0,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_homepage_size_control2', array(
  'label'      => __( 'Márgenes', 'empralidad' ),
  'section'    => 'emp_section_homepage2',
  'settings'   => 'emp_homepage_size2',
  'type'			 => 'range',
  'input_attrs'=> array(
    'min'      => 0,
    'max'      => 15,
    'step'     => 1
  )
));
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
// Text 2
$wp_customize->add_setting('emp_homepage_text2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control2', array(
  'label'   => __('Script, shortcode o texto', 'empralidad'),
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
  'panel'    => 'emp_panel_sections'
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
// Margin 3
$wp_customize->add_setting('emp_homepage_size3', array(
  'default'           => 0,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control('emp_homepage_size_control3', array(
  'label'      => __( 'Márgenes', 'empralidad' ),
  'section'    => 'emp_section_homepage3',
  'settings'   => 'emp_homepage_size3',
  'type'			 => 'range',
  'input_attrs'=> array(
    'min'      => 0,
    'max'      => 15,
    'step'     => 1
  )
));
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
// Text 3
$wp_customize->add_setting('emp_homepage_text3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_encoded'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_homepage_text_control3', array(
  'label'   => __('Script, shortcode o texto', 'empralidad'),
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
