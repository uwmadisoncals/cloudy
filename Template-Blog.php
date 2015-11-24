<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<!-- page-name START here -->
      <div id="page-name">
      	<h2>
        <?php 
			$pagename = get_post_meta($post->ID, "pagetitle_value", $single = true);
			if ($pagename != '') { echo $pagename; } else { echo "Blog"; } ?>
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
      <?php
		$paged = get_query_var('paged');
   		$remove_cats = get_option('cloudy_blog_cats');
		$items = get_option('cloudy_blog_items');
		$Timthumb = get_option('cloudy_timthumb');
		query_posts('cat='.$remove_cats.'&paged='.$paged.'&posts_per_page='.$items); 
	  ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta">
            <span class="category"><?php the_category(', ') ?></span>
            <span class="date"><?php the_time('j/n/Y') ?></span>
            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
          </div>
          <?php 
		  	$post_image = get_post_meta($post->ID, "post_image_value", $single = true);
			if ($post_image != '') {
		  ?>
          <a href="<?php the_permalink() ?>">
          <?php if ($Timthumb == "Enable") { ?>
        <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $post_image; ?>&h=150&w=620&zc=1&q=100" alt="<?php the_title(); ?>" width="620px" height="150px" />
          <?php } else { ?>
            <img src="<?php echo $post_image; ?>" alt="<?php the_title(); ?>" width="620px" height="150px" />
          <?php } ?>
          </a>
          <?php } ?>
          <p><?php echo substr(get_the_content(), 0, 500); ?>...</p>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More <span>&rArr;</span></a>
        </div>
		<?php endwhile; ?> 
        <?php else : ?>
      <h2>Not Found</h2>
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <?php endif; ?>
      <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      
      </div>
      <!-- main-colum END here -->
	<?php get_sidebar(); ?>
	</div>
    <!-- container END here -->
  </div>
  <!-- content END here -->
</div>
<!-- site-wrapper END here -->

<?php get_footer(); ?>