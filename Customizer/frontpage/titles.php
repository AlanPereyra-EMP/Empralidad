<?php
// Add panel
$wp_customize->add_panel( 'emp_panel_titles', array(
  'priority' => 2,
  'title'    => __('Títulos homepage', 'empralidad')
));
// Active title
$wp_customize->add_section('emp_section_front_title', array(
  'title'      => __('Título principal', 'empralidad'),
  'priority'   => 1,
  'panel'      => 'emp_panel_titles',
  'description'=> __('Este título contiene el titulo principal de la web o el de la página estática', 'empralidad')
));
$wp_customize->add_setting('emp_front_title_show', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_show_control', array(
  'label'   => __( 'Mostrar titulo', 'empralidad' ),
  'section' => 'emp_section_front_title',
  'settings'=> 'emp_front_title_show',
  'type'  	=> 'checkbox'
)));
// hr
$wp_customize->add_setting('emp_front_title_hr_show', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_hr_show_control', array(
  'label'   => __( 'Mostrar linea', 'empralidad' ),
  'section' => 'emp_section_front_title',
  'settings'=> 'emp_front_title_hr_show',
  'type'  	=> 'checkbox'
)));
// Textarea 1
$wp_customize->add_setting('emp_front_textarea', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_textarea_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title',
  'settings'   => 'emp_front_textarea',
  'type'       => 'textarea',
  'description'=> __('Texto destacado principal', 'empralidad')
)));
// Show more text 1
$wp_customize->add_setting('emp_front_show_more_text', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_show_more_text_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title',
  'settings'   => 'emp_front_show_more_text',
  'type'       => 'text',
  'description'=> __('Texto sobre el botón "ver más"', 'empralidad')
)));
// Image top 1
$wp_customize->add_setting('emp_front_image_top1', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_front_image_top_control1', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen superpuesta', 'empralidad'),
  'section'    => 'emp_section_front_title',
  'settings'   => 'emp_front_image_top1',
  'description'=> __('Seleciona una imagen destacada (cuadrada)', 'empralidad')
)));
// Image background 1
$wp_customize->add_setting('emp_front_image1', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_front_image_control1', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen de fondo', 'empralidad'),
  'section'    => 'emp_section_front_title',
  'settings'   => 'emp_front_image1',
  'description'=> __('Seleciona una imagen de fondo (vertical)', 'empralidad')
)));
// button show 1
$wp_customize->add_setting('emp_front_button_show1', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_button_show_control1', array(
  'label'   => __( 'Mostrar botón', 'empralidad' ),
  'section' => 'emp_section_front_title',
  'settings'=> 'emp_front_button_show1',
  'type'   	=> 'checkbox'
)));
// Button principal 1
$wp_customize->add_setting('emp_front_btn1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_btn_control1', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_front_title',
  'settings'    => 'emp_front_btn1',
  'description'	=> __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Button icon 1
$wp_customize->add_setting('emp_section_front_button_icon1', array(
  'default'           => 'center',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_section_front_button_icon1_control1', array(
  'label'          => __( 'Icono del botón', 'empralidad' ),
  'section'        => 'emp_section_front_title',
  'settings'       => 'emp_section_front_button_icon1',
  'type'           => 'radio',
  'choices'        => array(
  ''  			       => __( '----', 'empralidad' ),
  'fab fa-whatsapp'=> __( 'fa-whatsapp', 'empralidad' ),
  'fas fa-truck'   => __( 'fa-truck', 'empralidad' ),
  'fas fa-store'  	=> __( 'fa-store', 'empralidad' ),
  'fas fa-store-alt' => __( 'fa-store-alt', 'empralidad' ),
  'fas fa-arrow-right'=> __( 'fa-arrow-right', 'empralidad' )
  )
)));
// Link button 1
$wp_customize->add_setting('emp_front_link_btn1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_link_btn_control1', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_front_title',
  'settings'    => 'emp_front_link_btn1',
  'description'	=> __( 'Pega acá el link del boton', 'empralidad' )
)));

// button secondary show 1
$wp_customize->add_setting('emp_front_button_secondary_show1', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_button_secondary_show_control1', array(
  'label'       => __( 'Mostrar botón', 'empralidad' ),
  'section'     => 'emp_section_front_title',
  'settings'    => 'emp_front_button_secondary_show1',
  'type'   	    => 'checkbox',
  'description'	=> __( 'Solo puede activarse si el botón principal se está usando', 'empralidad' )
)));
// Button secondary 1
$wp_customize->add_setting('emp_front_btn_secondary1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_btn_secondary_control1', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_front_title',
  'settings'    => 'emp_front_btn_secondary1',
  'description'	=> __( 'botón secundario hacia alguna web', 'empralidad' )
)));
// Button icon 1
$wp_customize->add_setting('emp_section_front_button_secondary_icon1', array(
  'default'           => 'center',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_section_front_button_secondary_icon1_control1', array(
  'label'          => __( 'Icono del botón', 'empralidad' ),
  'section'        => 'emp_section_front_title',
  'settings'       => 'emp_section_front_button_secondary_icon1',
  'type'           => 'radio',
  'choices'        => array(
  ''  			       => __( '----', 'empralidad' ),
  'fab fa-whatsapp'=> __( 'fa-whatsapp', 'empralidad' ),
  'fas fa-truck'   => __( 'fa-truck', 'empralidad' ),
  'fas fa-store'  	=> __( 'fa-store', 'empralidad' ),
  'fas fa-store-alt' => __( 'fa-store-alt', 'empralidad' ),
  'fas fa-arrow-right'=> __( 'fa-arrow-right', 'empralidad' )
  )
)));
// Link button 1
$wp_customize->add_setting('emp_front_link_btn_secondary1', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_link_btn_secondary_control1', array(
  'label'       => __('Link del boton secundario', 'empralidad'),
  'section'     => 'emp_section_front_title',
  'settings'    => 'emp_front_link_btn_secondary1',
  'description'	=> __( 'Pega acá el link del boton secundario', 'empralidad' )
)));

// title secondary 2
$wp_customize->add_setting('emp_front_title_show2', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_show_control2', array(
  'label'   => __( 'Mostrar titulo', 'empralidad' ),
  'section' => 'emp_section_front_title2',
  'settings'=> 'emp_front_title_show2',
  'type'  	=> 'checkbox'
)));
// hr
$wp_customize->add_setting('emp_front_title_hr_show2', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_hr_show_control2', array(
  'label'   => __( 'Mostrar linea', 'empralidad' ),
  'section' => 'emp_section_front_title2',
  'settings'=> 'emp_front_title_hr_show2',
  'type'  	=> 'checkbox'
)));
$wp_customize->add_section('emp_section_front_title2', array(
  'title'    => __('Título secundario', 'empralidad'),
  'priority' => 2,
  'panel'    => 'emp_panel_titles'
));
// Title 2
$wp_customize->add_setting('emp_front_text2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_text_control2', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_front_title2',
  'settings'=> 'emp_front_text2'
)));
// Textarea 2
$wp_customize->add_setting('emp_front_textarea2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_textarea_control2', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title2',
  'settings'   => 'emp_front_textarea2',
  'type'       => 'textarea',
  'description'=> __( 'Texto destacado principal', 'empralidad' )
)));
// Image top 2
$wp_customize->add_setting('emp_front_image_top2', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_front_image_top_control2', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen superpuesta', 'empralidad'),
  'section'    => 'emp_section_front_title2',
  'settings'   => 'emp_front_image_top2',
  'description'=> __('Seleciona una imagen destacada (cuadrada)', 'empralidad')
)));
// Show more text 2
$wp_customize->add_setting('emp_front_show_more_text2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_show_more_text2_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title2',
  'settings'   => 'emp_front_show_more_text2',
  'type'       => 'text',
  'description'=> __('Texto sobre el botón "ver más"', 'empralidad')
)));
// Image background 2
$wp_customize->add_setting('emp_front_image2', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_front_image_control2', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen de fondo', 'empralidad'),
  'section'    => 'emp_section_front_title2',
  'settings'   => 'emp_front_image2',
  'description'=> __( 'Seleciona una imagen de fondo (vertical)', 'empralidad' )
)));
// button show 2
$wp_customize->add_setting('emp_front_button_show2', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_button_show_control2', array(
  'label'     => __( 'Mostrar botón', 'empralidad' ),
  'section'   => 'emp_section_front_title2',
  'settings'  => 'emp_front_button_show2',
  'type'      => 'checkbox'
)));
// Button 2
$wp_customize->add_setting('emp_front_btn2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_btn_control2', array(
  'label'         => __('Texto de boton', 'empralidad'),
  'section'       => 'emp_section_front_title2',
  'settings'      => 'emp_front_btn2',
  'description'	  => __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Link button 2
$wp_customize->add_setting('emp_front_link_button2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_link_btn_control2', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_front_title2',
  'settings'    => 'emp_front_link_button2',
  'description'	=> __( 'Pega acá el link del boton', 'empralidad' )
)));

// button secondary show 2
$wp_customize->add_setting('emp_front_button_secondary_show2', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_button_secondary_show_control2', array(
  'label'       => __( 'Mostrar botón', 'empralidad' ),
  'section'     => 'emp_section_front_title2',
  'settings'    => 'emp_front_button_secondary_show2',
  'type'   	    => 'checkbox',
  'description'	=> __( 'Solo puede activarse si el botón principal se está usando', 'empralidad' )
)));
// Button secondary 2
$wp_customize->add_setting('emp_front_btn_secondary2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_btn_secondary_control2', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_front_title2',
  'settings'    => 'emp_front_btn_secondary2',
  'description'	=> __( 'botón secundario hacia alguna web', 'empralidad' )
)));
// Link button 2
$wp_customize->add_setting('emp_front_link_btn_secondary2', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_link_btn_secondary_control2', array(
  'label'       => __('Link del boton secundario', 'empralidad'),
  'section'     => 'emp_section_front_title2',
  'settings'    => 'emp_front_link_btn_secondary2',
  'description'	=> __( 'Pega acá el link del boton secundario', 'empralidad' )
)));

// title secondary 3
$wp_customize->add_setting('emp_front_title_show3', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_show_control3', array(
  'label'   => __( 'Mostrar titulo', 'empralidad' ),
  'section' => 'emp_section_front_title3',
  'settings'=> 'emp_front_title_show3',
  'type'   	=> 'checkbox'
)));
// Hr 3
$wp_customize->add_setting('emp_front_title_hr_show3', array(
  'default'           => false,
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_title_hr_show_control3', array(
  'label'   => __( 'Mostrar linea', 'empralidad' ),
  'section' => 'emp_section_front_title3',
  'settings'=> 'emp_front_title_hr_show3',
  'type'  	=> 'checkbox'
)));
$wp_customize->add_section('emp_section_front_title3', array(
  'title'    => __('Título secundario', 'empralidad'),
  'priority' => 3,
  'panel'    => 'emp_panel_titles'
));
// Title 3
  $wp_customize->add_setting('emp_title_text3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_title_text_control3', array(
  'label'   => __('Titulo', 'empralidad'),
  'section' => 'emp_section_front_title3',
  'settings'=> 'emp_title_text3'

)));
// Textarea 3
  $wp_customize->add_setting('emp_title_textarea3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_title_textarea3_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title3',
  'settings'   => 'emp_title_textarea3',
  'type'       => 'textarea',
  'description'=> __( 'Texto destacado principal', 'empralidad' )

)));
// Image top 3
$wp_customize->add_setting('emp_front_image_top3', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_front_image_top_control3', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen superpuesta', 'empralidad'),
  'section'    => 'emp_section_front_title3',
  'settings'   => 'emp_front_image_top3',
  'description'=> __('Seleciona una imagen destacada (cuadrada)', 'empralidad')
)));
// Show more text 3
$wp_customize->add_setting('emp_front_show_more_text3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_show_more_text3_control', array(
  'label'      => __('Texto', 'empralidad'),
  'section'    => 'emp_section_front_title3',
  'settings'   => 'emp_front_show_more_text3',
  'type'       => 'text',
  'description'=> __('Texto sobre el botón "ver más"', 'empralidad')
)));
// Image background 3
$wp_customize->add_setting('emp_title_image3', array(
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'emp_title_image_control3', array(
  'mime_type'  => 'image',
  'label'      => __('Imagen de fondo', 'empralidad'),
  'section'    => 'emp_section_front_title3',
  'settings'   => 'emp_title_image3',
  'description'=> __( 'Seleciona una imagen de fondo (vertical)', 'empralidad' )
)));
// button show 3
$wp_customize->add_setting('emp_title_button_show3', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_title_button_show_control3', array(
  'label'     => __( 'Mostrar botón', 'empralidad' ),
  'section'   => 'emp_section_front_title3',
  'settings'  => 'emp_title_button_show3',
  'type'      => 'checkbox'
)));
// Button 3
$wp_customize->add_setting('emp_title_button3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_title_btn_control3', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_front_title3',
  'settings'    => 'emp_title_button3',
  'description'	=> __( 'Agrega un boton hacia alguna web', 'empralidad' )
)));
// Link button 3
$wp_customize->add_setting('emp_title_link_button3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_title_link_btn_control3', array(
  'label'       => __('Link del boton', 'empralidad'),
  'section'     => 'emp_section_front_title3',
  'settings'    => 'emp_title_link_button3',
  'description' => __( 'Pega acá el link del boton', 'empralidad' )
)));
// button secondary show 3
$wp_customize->add_setting('emp_front_button_secondary_show3', array(
  'default'           => 'false',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_button_secondary_show_control3', array(
  'label'       => __( 'Mostrar botón', 'empralidad' ),
  'section'     => 'emp_section_front_title3',
  'settings'    => 'emp_front_button_secondary_show3',
  'type'   	    => 'checkbox',
  'description'	=> __( 'Solo puede activarse si el botón principal se está usando', 'empralidad' )
)));
// Button secondary 3
$wp_customize->add_setting('emp_front_btn_secondary3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_btn_secondary_control3', array(
  'label'       => __('Texto de boton', 'empralidad'),
  'section'     => 'emp_section_front_title3',
  'settings'    => 'emp_front_btn_secondary3',
  'description'	=> __( 'botón secundario hacia alguna web', 'empralidad' )
)));
// Link button 3
$wp_customize->add_setting('emp_front_link_btn_secondary3', array(
  'default'           => '',
  'trasnport'         => 'refresh',
  'sanitize_callback' => 'sanitize_string'
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_front_link_btn_secondary_control3', array(
  'label'       => __('Link del boton secundario', 'empralidad'),
  'section'     => 'emp_section_front_title3',
  'settings'    => 'emp_front_link_btn_secondary3',
  'description'	=> __( 'Pega acá el link del boton secundario', 'empralidad' )
)));
?>
