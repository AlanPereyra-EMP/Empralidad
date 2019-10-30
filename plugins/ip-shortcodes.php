  <?php
// SFPO "Shortcode for prices options"

if(!shortcode_exists('sfpo')) {
    function sfpo_shortcode($atts) {

    	// [sfpo 1st="Eco," 2nd="Profesional" 3rd="Premium" values="Description.false.true.true,Description 2.some text.more text.and more text"]

    	// atts
    	$atributes = shortcode_atts( array(
	      '1st' => 'Eco',
	      '2nd' => 'Normal',
	      '3rd' => 'Premium',
	      'values' => 'Basic options|true|true|true;Medium options|false|true|true;Special options|false|false|true'
	    ), $atts );

    	// Values to array ( ";" define end of array element)
    	if($atributes['1st']!='Eco'){
		    $st = $atts['1st'];
		    $st = explode(';', $st);
		}else{
			$st[] = $atributes['1st'];
		}
		if($atributes['2nd']!='Normal'){
		    $nd = $atts['2nd'];
		    $nd = explode(';', $nd);
		}else{
			$nd[] = $atributes['2nd'];
		}
		if($atributes['3rd']!='Premium'){
		    $rd = $atts['3rd'];
		    $rd = explode(';', $rd);
		}else{
			$rd[] = $atributes['3rd'];
		}
		if($atributes['values']!='Basic options|true|true|true;Medium options|false|true|true;Special options|false|false|true'){
		    $values = $atts['values'];
		    $values = explode(';', $values);
		}else{
			$values = $atributes['values'];
			$values = explode(';', $values);
			$st[] = 'Show more';
			$st[] = '#';
			$nd[] = 'Show more';
			$nd[] = '#';
			$rd[] = 'Show more';
			$rd[] = '#';
		}

        // Head
    	$thead = '<th class="w-20"></th>
		    	<th>'.$st[0].'</th>
		    	<th>'.$nd[0].'</th>
		    	<th>'.$rd[0].'</th>';

	    $rows = count($values);

    	$tbody = [];

		for ($i = 0; $i < $rows; $i++){

			// Convert to array values ("|" define end of array element)
			${'values'.$i} = $values[$i];
			${'values'.$i} = explode('|', ${'values'.$i});

			// Check, cross or text
			$check = '✔';
			$cross = '❌';

			if((${'values'.$i}[1]) === 'true'){
				$td1 = $check;
			}else if((${'values'.$i}[1]) === 'false'){
				$td1 = $cross;
			}else{
				$td1 = ${'values'.$i}[1];
			}

			if((${'values'.$i}[2]) === 'true'){
				$td2 = $check;
			}else if((${'values'.$i}[2]) === 'false'){
				$td2 = $cross;
			}else{
				$td2 = ${'values'.$i}[2];
			}

			if((${'values'.$i}[3]) === 'true'){
				$td3 = $check;
			}else if((${'values'.$i}[3]) === 'false'){
				$td3 = $cross;
			}else{
				$td3 = ${'values'.$i}[3];
			}

			// Build rows
    		${'row'.$i} =  '<tr>
					    		<th>'.${'values'.$i}[0].'</th>'.
					    		'<td>'.$td1.'</td>'.
					    		'<td>'.$td2.'</td>'.
					    		'<td>'.$td3.'</td>
				    		</tr>';
    		$tbody[] = ${'row'.$i};
    	}

    	$tbody['space'] = '<th></th><td></td><td></td><td></td>';

    	if($st[2]&&$nd[2]&&$rd[2]){
	    	$link0 = $st[2];
	    	$link1 = $nd[2];
	    	$link2 = $rd[2];
	    	$link_name0 = $st[1];
	    	$link_name1 = $nd[1];
	    	$link_name2 = $rd[1];

	    	$tbody['links'] = '<tr class="sfpo-links">
						    		<th class="sfpo-links-th" style="background: none!important;"></th>'.
						    		'<td><a class="shadow-grey-down button" href="'.$link0.'">'.$link_name0.'</a></td>'.
						    		'<td><a class="shadow-grey-down button" href="'.$link1.'">'.$link_name1.'</a></td>'.
						    		'<td><a class="shadow-grey-down button" href="'.$link2.'">'.$link_name2.'</a></td>
					    		</tr>';
		}

        // always return
        return '<div class="overflow-x-auto">
			        <table class="sfpo-table">'.
				        '<thead class="shadow-grey-down">'.
					        $thead.
					    '</thead>'.
				        '<tbody>'.
					        $tbody[0].$tbody[1].$tbody[2].$tbody[3].$tbody[4].$tbody[5].$tbody[6].$tbody[7].$tbody[8].$tbody[9].
					        $tbody[10].$tbody[11].$tbody[12].$tbody[13].$tbody[14].$tbody[15].$tbody[16].$tbody[17].$tbody[18].$tbody[19].
					        $tbody[20].$tbody[21].$tbody[22].$tbody[23].$tbody2[4].$tbody[25].$tbody[26].$tbody[27].$tbody[28].$tbody[29].
					        $tbody['links'].
				        '</tbody>'.
			        '</table>
		        </div>';
    }
    add_shortcode('sfpo', 'sfpo_shortcode');
}


/* Resent posts
if(!shortcode_exists('ip_categoryposts')) {
function ip_postsbycategory($atts) {

    $args = array(
        'posts_per_page' => 4,
        'offset' => 0,
        'orderby' => 'ID',
        'order' => 'DESC',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

        $the_query = new WP_Query( $args );







        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();

                $post = array (
                    'format' => get_post_format(),
                    'category' => the_category()
                );


                //content
                $if_post_thum;

                $posts .= '<section class="card p-0 to-fade to-fadein-animation">
                    <div class="card-header">'. $post->category .' </div>
                    <!-- body -->
                        <div class="card-block">
                    <!-- Img -->'
                        .$filter_slide1 = get_theme_mod('ip_img_filter1');
                        if ( has_post_thumbnail() ) { .'
                                <div class="position-relative nopadding">
                                    .'the_post_thumbnail( 'full', array( 'class' => 'col-12 mx-auto h-auto') );'.
                                    <div class="carousel-caption d-flex header-text1 h-100.' if ($filter_slide1 === 'color') { .' bg-title-content-color '. }else{ .' bg-title-content-dark '. } .'"></div>
                                    <div class="carousel-caption d-flex header-text1">
                                        <h2 class="container-fluid my-auto d-block text-white mh-100-auto">
                                            <a href="'. the_permalink(); .'"><h2 class="text-white">'. the_title(); .'</h2></a>
                                        </h2>
                                    </div>
                                </div>
                        '. } else { .'
                                <div class=" py-5 text-center text-justify text-white bg-personalized">
                                    <a href="'. the_permalink(); .'"><h2 class="text-white">'. the_title(); .'</h2></a>
                                </div>
                        '. } .'
                    <!-- end img -->
                            <br>
                            <div class="card-text p-3">
                                '. the_excerpt(); .'
                            </div>
                            <a href="'. the_permalink(); .'">
                                <button class="btn text-white container-fluid alingcenter mt-auto">
                                    Leer más
                                </button>
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            <small>'. the_date(); .' / Autor: '. the_author(); .' / '. the_tags(); .' </small>
                        </div>
                    <!-- end body -->
                </section>';
            endwhile;
        endif;
        wp_reset_postdata();

    return $posts;

}

// Add a shortcode
add_shortcode('ipcategoryposts', 'ip_postsbycategory');
}
*/
