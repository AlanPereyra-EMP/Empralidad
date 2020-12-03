<?php
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

  $wp_customize->add_section('emp_section_woocommerce_whatsapp', array(
    'title' => __('Whatsapp', 'empralidad'),
    'description'   => __('Agrega un botón para consultar stock a todos los productos'),
    'theme_supports'=> array('woocommerce'),
    'priority'      => 1,
    'panel'         => 'woocommerce'
  ));
  // Show 1
  $wp_customize->add_setting('emp_woocommerce_whatsapp_show', array(
    'default'          => false,
    'trasnport'        => 'refresh',
    'sanitize_callback'=> 'sanitize_encoded'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'emp_woocommerce_whatsapp_show_control', array(
      'label'      => __( 'Mostrar', 'empralidad' ),
      'section'    => 'emp_section_woocommerce_whatsapp',
      'settings'   => 'emp_woocommerce_whatsapp_show',
      'type'    	 => 'checkbox',
      'input_attrs'=> array(
        'class'    => 'd-inline-block'
      )
  )));

}
?>
