<?php get_header(); ?>
<!-- page-name START here -->
      <div id="page-name">
        <?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive for <?php the_time('F, Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
		<?php } ?>
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
      <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <div class="meta">
            <span class="category"><?php the_category(', ') ?></span>
            <span class="date"><?php the_time('j/n/Y') ?></span>
            <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
          </div>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More <span>&rArr;</span></a>
        </div>
		<?php endwhile; ?> 
        <?php else : ?>
      <h2>Not Found</h2>
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