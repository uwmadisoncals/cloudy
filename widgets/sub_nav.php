
  <?php
	if($post->post_parent) {
		$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->post_parent."&echo=0");
	} else { 
		$children = wp_list_pages("sort_column=menu_order&depth=1&title_li=&child_of=".$post->ID."&echo=0");
	} if ($children) { ?>
    <li class="widget" id="subnav">
  		<h3>Sub Navigation</h3>
  		<ul class="subnav">
   		 <?php echo $children; ?>
  		</ul>
    </li>
    <?php } ?>

