<div id="search">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
	<input type="submit" id="search-submit" value="" />
</form>
</div>
