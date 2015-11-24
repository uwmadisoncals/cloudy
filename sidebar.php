<div id="sidebar">
  <ul>
  	<?php include (TEMPLATEPATH . "/widgets/sub_nav.php"); ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Default-Sidebar") ) : ?>
    <li class="widget">
      <h3>Archives</h3>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>
    <?php endif; ?>
  </ul>
</div>
<!-- sidebar END here -->
<div class="clear"></div>
<!-- clear-div -->
