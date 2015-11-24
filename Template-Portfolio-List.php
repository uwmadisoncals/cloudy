<?php
/*
Template Name: Portfolio - List View
*/
?>

<?php get_header(); ?>

<!-- page-name START here -->
      <div id="page-name">
        <?php 
		  $pagename = get_post_meta($post->ID, "pagetitle_value", $single = true);
		  ?>
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
  <?php
	$port_cat = htmlspecialchars(get_post_meta($post->ID, "portfolio_value", $single = true));
	$port_items = get_option('cloudy_portfolio_items');
	$the_query = 'category_name='.$port_cat.'&posts_per_page='.$port_items.'&paged='.$paged;
  ?>
  <!-- content START here -->
  <div id="content">
    <!-- container START here -->
    <div class="container">
      <!-- list START here -->
      <div id="list">
      	<?php 
			$paged = get_query_var('paged');
			$Timthumb = get_option('cloudy_timthumb');
			query_posts($the_query);
		?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="box post" id="post-<?php the_ID(); ?>">
          <a href="<?php echo get_post_meta($post->ID, "full_image_value", $single = true); ?>" rel="prettyPhoto[gallery]" class="port-box pic">
          <?php if ($Timthumb == "Enable") { ?>
          <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "post_image_value", $single = true); ?>&h=150&w=290&zc=1&q=100" alt="Item Title" width="290px" height="150px" />
          <?php } else { ?>
          <img src="<?php echo get_post_meta($post->ID, "post_image_value", $single = true); ?>" alt="Item Title" width="290px" height="150px" />
          <?php } ?>
          </a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta">
            <span class="category"><?php the_category(', ') ?></span>
            <span class="date"><?php the_time('j/n/Y') ?></span>
            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
          </div>
          <p><?php echo substr(get_the_content(), 0, 300); ?>...</p>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More <span>&rArr;</span></a>
        </div>
        <?php endwhile; ?> 
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      <?php else : ?>
      <h2>Not Found</h2>
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <?php endif; ?>
      </div>
      <!-- list START here -->
    </div>
    <!-- container END here -->
  </div>
  <!-- content END here -->
</div>
<!-- site-wrapper END here -->
<?php get_footer(); ?>