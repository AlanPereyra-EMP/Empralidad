<?php
// EMP-Carousel
// [emp_carousel w="31.6" values="http://src-image.jpg|Description|http://url-link-img.com;http://src-image1.jpg|Description|http://url-link-img1.com"]

if(!shortcode_exists('emp_carousel')) {
  function emp_carousel_shortcode($atts) {

  	// atts
  	$atributes = shortcode_atts( array(
      'w' => '31.6',
      'values' => 'default'
    ), $atts );

  	// Values to array ( ";" define end of array element)
		if($atributes['values']!='default'){
		    $emp_values = $atts['values'];
		    $emp_values = explode(';', $emp_values);
		}else{
			$emp_values = array();
      $emp_img_default = get_template_directory_uri() . '/screenshot.jpg';
      for($i = 0; $i < 3; $i++){
  			$emp_values[] .= $emp_img_default.'|Description|#';
      }
		}

    $emp_imgs = count($emp_values);

		for ($i = 0; $i < $emp_imgs; $i++){

			// Convert to array values ("|" define end of array element)
			${'values'.$i} = $emp_values[$i];
			${'values'.$i} = explode('|', ${'values'.$i});

      $emp_img = ${'values'.$i}[0];
      $emp_description = ${'values'.$i}[1];
      $emp_link = ${'values'.$i}[2];

      $emp_list_li .= '<li class="product-category product" style="width:'.$atributes['w'].'%!important">
                        <a href="'.$emp_link.'">
                          <img src="'.$emp_img.'" width="600" height="600"/>
                        </a>
                        <h2 class="woocommerce-loop-category__title">'.
                          $emp_description.
                        '</h2>
                      </li>';
	  }

    return '<div class="woocommerce">
              <ul class="products">'.
                $emp_list_li.
              '</ul>
            </div>';
  }
  add_shortcode('emp_carousel', 'emp_carousel_shortcode');
}
