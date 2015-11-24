  <h3><?php echo stripslashes(get_option('cloudy_social_widget_title')); ?></h3>
          <p> 
          	  <?php if( get_option('cloudy_social_widget_twitter') != "") { ?>
              <a href="<?php echo stripslashes(get_option('cloudy_social_widget_twitter')); ?>" title="twitter"><img src="<?php bloginfo('template_directory'); ?>/images/social/twitter.png" alt="twitter" /></a>
              <?php } ?> 
              
              <?php if( get_option('cloudy_social_widget_facebook') != "") { ?>
              <a href="<<?php echo stripslashes(get_option('cloudy_social_widget_facebook')); ?>" title="facebook"><img src="<?php bloginfo('template_directory'); ?>/images/social/facebook.png" alt="facebook" /></a> 
              <?php } ?> 
              
              <?php if( get_option('cloudy_social_widget_flickr') != "") { ?>
              <a href="<?php echo stripslashes(get_option('cloudy_social_widget_flickr')); ?>" title="flickr"><img src="<?php bloginfo('template_directory'); ?>/images/social/flickr.png" alt="flickr" /></a> 
              <?php } ?> 
              <?php if( get_option('cloudy_social_widget_myspace') != "") { ?>
              <a href="<?php echo stripslashes(get_option('cloudy_social_widget_myspace')); ?>" title="my space"><img src="<?php bloginfo('template_directory'); ?>/images/social/myspace.png" alt="my space" /></a> 
              <?php } ?>
              <?php if( get_option('cloudy_social_widget_skype') != "") { ?>
              <a href="<?php echo stripslashes(get_option('cloudy_social_widget_skype')); ?>" title="skype"><img src="<?php bloginfo('template_directory'); ?>/images/social/skype.png" alt="skype" /></a> 
              <?php } ?>
          </p>