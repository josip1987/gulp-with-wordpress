<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ) ?>">
	<input type="search" class="form-control" placeholder="Search Articles..." 
	value="<?php echo get_search_query() ?>" name="s" title="Search" required>
	<input type="submit" class="search-submit" value="Search">
</form>