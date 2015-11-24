<?php get_header(); ?>

<!-- page-name START here -->
      <div id="page-name">
        <h2>
		  <?php the_title(); ?>
        </h2>
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
      <?php $Timthumb = get_option('cloudy_timthumb'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post" id="post-<?php the_ID(); ?>">
        <h3><?php the_title(); ?></h3>
          <div class="meta">
            <span class="category"><?php the_category(', ') ?></span>
            <span class="date"><?php the_time('j/n/Y') ?></span>
            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
          </div>
          <?php 
		  	$post_image = get_post_meta($post->ID, "post_image_value", $single = true);
			if ($post_image != '') {
		  ?>
          <?php if ($Timthumb == "Enable") { ?>
        <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $post_image; ?>&h=150&w=620&zc=1&q=100" alt="<?php the_title(); ?>" width="620px" height="150px" />
          <?php } else { ?>
            <img src="<?php echo $post_image; ?>" alt="<?php the_title(); ?>" width="620px" height="150px" />
          <?php } ?>
        <?php } ?>
        <?php the_content(''); ?>
      </div>
      
      <?php comments_template(); ?>
      
      <?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	  <?php endif; ?>

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
