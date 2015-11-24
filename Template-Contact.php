<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.form.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/form-init.js"></script>


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
        <!-- contact-wrap START here -->
        <div id="contact-warp">
          <div class="message"><div id="alert"></div></div>
          <form action="<?php bloginfo('template_directory'); ?>/sendmail.php" method="post" id="contactForm">
            <p class="label">Name:</p>
            <input type="text" name="name" value="" id="name" />
            <p class="label">Email:</p>
            <input type="text" name="email" value="" id="email" />
            <p class="label">Telephone:</p>
            <input type="text" name="tele" value="" id="tele" />
            <span style="display:none;">
            <p>Honeypot:</p>
            <input type="text" name="last" value="" id="last" />
            <input id="to" name="to" type="hidden" value="<?php echo stripslashes(get_option('cloudy_contact_email')); ?>" />
            </span>
            <p class="label">Message:</p>
            <textarea rows="8" name="message"></textarea>
            <input type="submit" value="Send Message" class="submit"/>
          </form>
        </div>
        <!-- contact-wrap END here --> 
      </div>
      <!-- main-colum END here -->
<?php get_sidebar('contact'); ?>
	</div>
    <!-- container END here -->
  </div>
  <!-- content END here -->
</div>
<!-- site-wrapper END here -->

<?php get_footer(); ?>

<?php get_footer(); ?>