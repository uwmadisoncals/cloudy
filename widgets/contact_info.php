<h3><?php echo stripslashes(get_option('cloudy_contact_info_widget_title')); ?></h3>
	<?php if( get_option('cloudy_contact_info_widget_img') != "") { ?>
    <img src="<?php echo get_option('cloudy_contact_info_widget_img'); ?>" alt="Our Office" width="235px" height="150px"/><br />
    <?php } ?>
    <p><?php echo stripslashes(get_option('cloudy_contact_info_widget_content')); ?></p>