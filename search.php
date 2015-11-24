<?php get_header(); ?>
<!-- page-name START here -->
      <div id="page-name">
        <h2>Search Results</h2>
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
        <div class="post" id="post-<?php the_ID(); ?>">
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta">
            <span class="category"><?php the_category(', ') ?></span>
            <span class="date"><?php the_time('j/n/Y') ?></span>
            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
          </div>
        </div>
		<?php endwhile; ?> 
        <?php else : ?>
      <h3>Not Found</h3>
      <p>Sorry, but you are looking for something that isn't here.</p>
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