<div id="sidebar">
  <ul>
  	<?php include (TEMPLATEPATH . "/widgets/sub_nav.php"); ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Custom-Sidebar") ) : ?>
    
    <?php endif; ?>
  </ul>
</div>
<!-- sidebar END here -->
<div class="clear"></div>
<!-- clear-div -->
