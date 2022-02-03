<?php
// Add panel
$wp_customize->add_section('emp_section_analytics', array(
  'title'    => __('Analítica', 'empralidad'),
  'priority' => 3,
  'description'=> __( 'Permite tener información y estadística muy detallada sobre el sitio', 'empralidad' )
));

include get_template_directory().'/Customizer/analytics/google.php';
include get_template_directory().'/Customizer/analytics/facebook.php';
?>
