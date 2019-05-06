<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" placeholder="Buscar..." value="<?php echo get_search_query()?>" name="s" id="s">
		<i class="fas fa-search" style="width: 9px;position: relative;right: -13%;top: 10px;"></i>
		<input type="submit" id="searchsubmit" value="">

	</div>
</form>