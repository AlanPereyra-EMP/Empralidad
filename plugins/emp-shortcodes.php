<?php
// SFPO "Shortcode for prices options"

if(!shortcode_exists('emp_table')) {
  function emp_table_shortcode($atts) {

  	// [emp_table 1="Eco" 2="Profesional" 3="Premium" values="Description|false|true|true;Description 2|some text|more text|and more text"]

  	// atts
  	$atributes = shortcode_atts( array(), $atts );

  	// Values to array ( ";" define end of array element)
    $first = $atts['1'];
    $first = explode('|', $first);

	  $second = $atts['2'];
	  $second = explode('|', $second);

	  $third = $atts['3'];
	  $third = explode('|', $third);

    $fourth = $atts['4'];
	  $fourth = explode('|', $fourth);

    $fifth = $atts['5'];
	  $fifth = explode('|', $fifth);

	  $values = $atts['values'];
	  $values = explode(';', $values);

    // Head
  	$thead = '<th class="w-20"></th>';

    $op = [];
    $op[0] = $first;
    $op[1] = $second;
    $op[2] = $third;
    $op[3] = $fourth;
    $op[4] = $fifth;

    $columns = count($op);

    for($i = 0; $i < $columns; $i++){
      if($op[$i][0] != ''){
        $thead .= '<th>'.$op[$i][0].'</th>';

        $real_columns = 0;
        $real_columns++;
      }
    }

    $rows = count($values);

  	$tbody = [];

		for ($i = 0; $i < $rows; $i++){

			// Convert to array values ("|" define end of array element)
			${'values'.$i} = $values[$i];
			${'values'.$i} = explode('|', ${'values'.$i});

			// Check, cross or text
			$check = '<i class="fas fa-check fa-2x"></i>';
			$cross = '<i class="fas fa-times text-danger fa-2x"></i>';

      $td_all = '';

      for($l = 1; $l < 6; $l++){
        if((${'values'.$i}[$l]) != ''){
    			if((${'values'.$i}[$l]) === 'true'){
    				$td = $check;
    			}else if((${'values'.$i}[$l]) === 'false'){
    				$td = $cross;
    			}else{
    				$td = ${'values'.$i}[$l];
    			}
          $td_all .= '<td>'.$td.'</td>';
        }
      }

		// Build rows
  		${'row'.$i} =  '<tr>
      					    		<th>'.${'values'.$i}[0].'</th>'.
      					    		$td_all
    				    		.'</tr>';
  		$tbody[] = ${'row'.$i};
  	}

  	$tbody['links'] = '<tr class="sfpo-links"><th class="sfpo-links-th" style="background: none!important;"></th>';

    for($i = 0; $i < $real_columns+4; $i++){
      if($op[$i][2] != ''){
        $link = $op[$i][2];
        $link_name = $op[$i][1];
        $tbody['links'] .='<td><a class="shadow-grey-down btn" href="'.$op[$i][2].'">'.$op[$i][1].'</a></td>';
      }else{
        $tbody['links'] .='<td></td>';
      }
    }

    $tbody['links'] .= '</tr>';

    return '<div class="overflow-x-auto">
            <table class="sfpo-table">'.
  	        '<thead class="shadow-grey-down">'.
    		        $thead.
    		    '</thead>'.
    	        '<tbody>'.
    		        $tbody[0].$tbody[1].$tbody[2].$tbody[3].$tbody[4].$tbody[5].$tbody[6].$tbody[7].$tbody[8].$tbody[9].
    		        $tbody[10].$tbody[11].$tbody[12].$tbody[13].$tbody[14].$tbody[15].$tbody[16].$tbody[17].$tbody[18].$tbody[19].
    		        $tbody[20].$tbody[21].$tbody[22].$tbody[23].$tbody[24].$tbody[25].$tbody[26].$tbody[27].$tbody[28].$tbody[29].
    		        $tbody['links'].
    	        '</tbody>'.
            '</table>
		        </div>';
  }
  add_shortcode('emp_table', 'emp_table_shortcode');
}


// Resent posts
if(!shortcode_exists('emp_posts')) {
  function emp_postsbycategory($atts) {

    $attributes = shortcode_atts( array(
      'posts' => '4',
      'category' => ''
    ), $atts );

      $args = array(
        'posts_per_page' => $attributes['posts'],
        'offset' => 0,
        'category_name' => $attributes['category'],
        'orderby' => 'ID',
        'order' => 'DESC',
        'post_status' => 'publish',
        'suppress_filters' => true
      );

          $the_query = new WP_Query( $args );



          if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) { $the_query->the_post();

                $post_format = get_post_format();

                $post_categories = get_the_category();
                $post_category = esc_html( $post_categories[0]->name );
                $post_category_id = get_cat_ID( $post_category );
                $post_category_link = get_category_link( $post_category_id );

                $post_filter = get_theme_mod('emp_img_filter1');
                $post_thumbnail = get_the_post_thumbnail();
                $post_permalink = get_the_permalink();
                $post_title = get_the_title();
                $post_excerpt = get_the_excerpt();
                $post_date = get_the_date();
                $post_author = get_the_author();
                $post_tags = get_the_tags();
                $post_content = get_the_content();


                if ($post_filter === 'color') {
                  $post_filter = 'bg-title-content-color';
                }else{
                  $post_filter = 'bg-title-content-dark';
                }


                $posts .= '<section class="card p-0 to-fade to-fadein-animation">
                    <div class="card-header"><a href="'.$post_category_link.'">'. $post_category .'</a> </div>
                    <!-- body -->
                        <div class="card-block">';


                if ($post_format === 'image' || $post_format === 'video'){
                  $posts .= '<a href="'.$post_permalink.'">'.
                                $post_thumbnail.'
                            </a>
                            <div class="card-block">
                                <a href="'.$post_permalink.'"><button class="btn text-white container-fluid alingcenter mt-auto">Comentarios</button></a>
                            </div>';
                } else if ($post_format === 'image'){

                } else if ($post_format === 'video'){

                } else {
                  if ( has_post_thumbnail() ) {
                    $posts .= '<div class="position-relative nopadding">
                                  '.$post_thumbnail.'
                                  <div class="carousel-caption d-flex header-text1 h-100 '.$post_filter.'"></div>
                                  <div class="carousel-caption d-flex header-text1">
                                      <h2 class="container-fluid my-auto d-block text-white mh-100-auto">
                                          <a href="'.$post_permalink.'"><h2 class="text-white">'.$post_title.'</h2></a>
                                      </h2>
                                  </div>
                              </div>';
                  } else {
                    $posts .= '<div class=" py-5 text-center text-justify text-white bg-personalized">
                                <a href="'.$post_permalink.'"><h2 class="text-white">'.$post_title.'</h2></a>
                              </div>';
                  }

                }
                if ($post_format === 'audio'){
                  $posts .=  '<div class="card-text p-3 audio-content">'.
                          $post_content.'
                      </div>
                  </div>';

                } else if ($post_format === 'image'){

                } else if ($post_format === 'video'){

                } else {
                  $posts .= '<br>
                      <div class="card-text p-3">'.
                          $post_excerpt.'
                      </div>
                      <a href="'.$post_permalink.'">
                          <button class="btn text-white container-fluid alingcenter mt-auto">
                              Leer más
                          </button>
                      </a>
                  </div>';
                }


                $posts .= '<div class="card-footer text-muted">
                            <small>'.$post_date.' / Autor: '.$post_author.' / '.$post_tags.' </small>
                        </div>
                    <!-- end body -->
                </section>';
              }
          }
          wp_reset_postdata();

      return '<div class="card-columns-2">'.$posts.'</div>';

  }

  // Add a shortcode
  add_shortcode('emp_posts', 'emp_postsbycategory');
}
?>
