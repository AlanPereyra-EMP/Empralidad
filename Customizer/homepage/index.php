<?php
// Add panel
$wp_customize->add_panel( 'emp_panel_home', array(
  'priority' => 2,
  'title'    => __( 'Secciones homepage', 'empralidad' )
));
include get_template_directory().'/Customizer/homepage/titles.php';
include get_template_directory().'/Customizer/homepage/contents.php';
?>
