<?php
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

  $wp_customize->add_section('emp_section_woocommerce_featured', array(
    'title' => __('Productos destacados', 'empralidad'),
    'description'   => __('Los productos destacados se verán en la homepage'),
    'theme_supports'=> array('woocommerce'),
    'priority'      => 2,
    'panel'         => 'woocommerce'
  ));
  // Show
  $wp_customize->add_setting('emp_woocommerce_featured_show', array(
    'default'          => 'false',
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_encoded'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_show_control', array(
      'label'      => __( 'Mostrar u Ocultar', 'empralidad' ),
      'section'    => 'emp_section_woocommerce_featured',
      'settings'   => 'emp_woocommerce_featured_show',
      'type'    	 => 'checkbox',
      'input_attrs'=> array(
        'class'    => 'd-inline-block'
      )
  )));
  // Margin negative
  $wp_customize->add_setting('emp_woocommerce_featured_margin_negative', array(
    'default'          => 'false',
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_encoded'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_margin_negative_control', array(
      'label'      => __( 'Margen negativo', 'empralidad' ),
      'section'    => 'emp_section_woocommerce_featured',
      'settings'   => 'emp_woocommerce_featured_margin_negative',
      'type'    	 => 'checkbox',
      'input_attrs'=> array(
        'class'    => 'd-inline-block'
      )
  )));
  // Title
  $wp_customize->add_setting('emp_woocommerce_featured_title', array(
    'default'          => '',
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_string'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_title_control', array(
    'label'   => __('Título', 'empralidad'),
    'section' => 'emp_section_woocommerce_featured',
    'settings'=> 'emp_woocommerce_featured_title'

  )));
  // Text
  $wp_customize->add_setting('emp_woocommerce_featured_text', array(
    'default'          => '',
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_string'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_featured_text_control', array(
    'label'   => __('Texto (opcional)', 'empralidad'),
    'section' => 'emp_section_woocommerce_featured',
    'settings'=> 'emp_woocommerce_featured_text'

  )));
  // Size
  $wp_customize->add_setting('emp_woocommerce_featured_size', array(
    'default'           => 30,
    'trasnport'         => 'refresh',
    'sanitize_callback' => 'sanitize_string'
  ));
  $wp_customize->add_control('emp_woocommerce_featured_size_control', array(
    'label'      => __( 'Tamaño productos destacados', 'empralidad' ),
    'section'    => 'emp_section_woocommerce_featured',
    'settings'   => 'emp_woocommerce_featured_size',
    'description'=> __('(solo dispositivos grandes)','empralidad'),
    'type'			 => 'range',
    'input_attrs'=> array(
      'min'      => 12,
      'max'      => 40,
      'step'     => 1,
    )
  ));

  // Font size
  $wp_customize->add_setting('emp_woocommerce_featured_font_size', array(
    'default'           => 15,
    'trasnport'         => 'refresh',
    'sanitize_callback' => 'sanitize_string'
  ));
  $wp_customize->add_control('emp_woocommerce_featured_font_size_control', array(
    'label'      => __( 'Tamaño del texto de los productos destacados', 'empralidad' ),
    'section'    => 'emp_section_woocommerce_featured',
    'settings'   => 'emp_woocommerce_featured_font_size',
    'description'=> __('(solo dispositivos grandes)','empralidad'),
    'type'			 => 'range',
    'input_attrs'=> array(
      'min'      => 12,
      'max'      => 40,
      'step'     => 1,
    )
  ));

}
?>
