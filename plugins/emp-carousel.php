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
		    $values = $atts['values'];
		    $values = explode(';', $values);
		}else{
			$values = array();
      $img_default = get_template_directory_uri() . '/screenshot.jpg';
      for($i = 0; $i < 3; $i++){
  			$values[] .= $img_default.'|Description|#';
      }
		}

    $imgs = count($values);
    $width = $atributes['w'];

		for ($i = 0; $i < $imgs; $i++){

			// Convert to array values ("|" define end of array element)
			${'values'.$i} = $values[$i];
			${'values'.$i} = explode('|', ${'values'.$i});

      $img = ${'values'.$i}[0];
      $description = ${'values'.$i}[1];
      $link = ${'values'.$i}[2];

      $list_li .= '<li class="product-category product first" style="width:'.$width.'%!important";>
                    <a href="'.$link.'">
                      <img src="'.$img.'" width="600" height="600" sizes="(max-width: 600px) 100vw, 600px"
                    </a>
                    <h2 class="woocommerce-loop-category__title">'.
                      $description.
                    '</h2>
                  </li>';
	  }

    return '<div class="woocommerce columns-4">
              <ul class="products columns-4">'.
                $list_li.
              '</ul>
            </div>';
  }
  add_shortcode('emp_carousel', 'emp_carousel_shortcode');
}
