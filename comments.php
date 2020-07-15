<?php
$args_comments = array(
	'max_depth'		=> '2'
	);
wp_list_comments($args_comments);
comment_form();
?>