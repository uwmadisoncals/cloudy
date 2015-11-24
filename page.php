<?php get_header(); ?>

<!-- page-name START here -->
      <div id="page-name">
          <h2>
		  <?php 
		  	$pagename = get_post_meta($post->ID, "pagetitle_value", $single = true);
			if ($pagename != '') { echo $pagename; } else { the_title(); } 
		  ?>
        </h2>
        <p class="tagline"><?php echo get_post_meta($post->ID, "pagesubtitle_value", $single = true); ?></p>
        <p></p>
      </div>
      <!-- page-name END here -->
    </div>
    <!-- container END here -->
  </div>
  <!-- header END here -->
  <!-- content START here -->
  <div id="content">
    <!-- container START here -->
    <div class="container">
      <!-- main-colum START here -->
      <div id="main-colum">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       	 <?php the_content(''); ?>
      	<?php endwhile; endif; ?>
      </div>
<?php 
	$what_sidebar = get_post_meta($post->ID, "sidebar_value", $single = true); 
	if ( $what_sidebar == "Custom-Sidebar" ) { get_sidebar('custom'); } else { get_sidebar(); }
	 
?>
	</div>
    <!-- container END here -->
  </div>
  <!-- content END here -->
</div>
<!-- site-wrapper END here -->

<?php get_footer(); ?>