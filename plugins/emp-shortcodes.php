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

  	if ($first[1]||$second[1]||$third[1]||$fourth[1]) {
      $tbody['links'] = '<tr class="sfpo-links"><th class="sfpo-links-th"></th>';

      for($i = 0; $i < $real_columns+2; $i++){
        if($op[$i][2] != ''){
          $link = $op[$i][2];
          $link_name = $op[$i][1];
          $tbody['links'] .='<td><a class="shadow-grey-down" href="'.$op[$i][2].'">'.$op[$i][1].'</a></td>';
        }else{
          $tbody['links'] .='<td></td>';
        }
      }

      $tbody['links'] .= '</tr>';
    }else{
      $tbody['links'] = '';
    }

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
?>
