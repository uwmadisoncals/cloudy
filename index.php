<?php get_header(); ?>

<?php 
	$what_slider = get_option('cloudy_slider_type');
	if ($what_slider != "None") { ?>
<!-- slider-wrapper START here -->
      <div id="slider-wrapper">
        <div id="slideshow"> 
        <?php
	    $slider_cat = get_option('cloudy_slider_cat');
		$slider_items = get_option('cloudy_slider_items');
		$Timthumb = get_option('cloudy_timthumb');
		query_posts('category_name='.$slider_cat.'&posts_per_page='.$slider_items); 
	    ?>
        <?php while (have_posts()) : the_post(); ?>
        
        		<?php if ($Timthumb == "Enable") { ?>
            		<img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "full_image_value", $single = true); ?>&h=270&w=940&zc=1&q=100" alt="" height="270px" width="940px" />
                <?php } else { ?>
                    <img src="<?php echo get_post_meta($post->ID, "full_image_value", $single = true); ?>" alt="" height="270px" width="940px" />
                <?php } ?>
        <?php endwhile; ?>
        </div>
        <?php if ( $what_slider == "Fading-Slider" ||  $what_slider == "Carousel-Slider" ) { ?> 
        	<div id="slider-nav"></div>
        <?php } ?>
      </div>
      <!-- slider-wrapper END here -->
<?php } ?>
      <!-- quote-bar START here -->
      <div id="quote-bar">
        <h2><?php echo stripslashes(get_option('cloudy_quotebar_text')); ?></h2>
        <a href="<?php echo get_option('cloudy_quotebar_link'); ?>" class="quote">Get a Quote</a>
      </div>
      <!-- quote-bar END here -->
    </div>
    <!-- container END here -->
  </div>
  <!-- header END here -->
  <!-- content START here -->
  <div id="content">
    <!-- container START here -->
    <div class="container">
      <!-- left-box START here -->
      <div class="box">
        <h3><?php echo stripslashes(get_option('cloudy_left_box_title')); ?></h3>
        <?php 
			$left_image = get_option('cloudy_left_box_image');
			if ( $left_image != '' ) {	
		?>
        <img src="<?php echo $left_image; ?>" alt=""/>
        <?php } ?>
        <p><?php echo stripslashes(get_option('cloudy_left_box_content')); ?></p>
        <a href="<?php echo get_option('cloudy_left_box_link'); ?>" class="more-link">Read More <span>&rArr;</span></a>
      </div>
      <!-- left-box END here -->
      <!-- middle-box START here -->
      <div class="box">
        <h3><?php echo stripslashes(get_option('cloudy_middle_box_title')); ?></h3>
        <?php 
			$middle_image = get_option('cloudy_middle_box_image');
			if ( $middle_image != '' ) {	
		?>
        <img src="<?php echo $middle_image; ?>" alt=""/>
        <?php } ?>
        <p><?php echo stripslashes(get_option('cloudy_middle_box_content')); ?></p>
        <a href="<?php echo get_option('cloudy_middle_box_link'); ?>" class="more-link">Read More <span>&rArr;</span></a>
      </div>
      <!-- middle-box END here -->
      <!-- right-box START here -->
      <div class="box no-margin">
        <h3><?php echo stripslashes(get_option('cloudy_right_box_title')); ?></h3>
        <?php 
			$right_image = get_option('cloudy_right_box_image');
			if ( $right_image != '' ) {	
		?>
        <img src="<?php echo $right_image; ?>" alt=""/>
        <?php } ?>
        <p><?php echo stripslashes(get_option('cloudy_right_box_content')); ?></p>
        <a href="<?php echo get_option('cloudy_right_box_link'); ?>" class="more-link">Read More <span>&rArr;</span></a>
      </div>
      <!-- right-box END here --> 
    </div>
    <!-- container END here -->
  </div>
  <!-- content END here -->
</div>
<!-- site-wrapper END here -->
<?php get_footer(); ?>