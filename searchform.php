<form role="search" method="get" id="searchform" class="searchform mw-1200px" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" placeholder="Buscar..." value="<?php echo get_search_query()?>" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Ir">
	</div>
</form>
