<?php

$themename = "Cloudy";
$shortname = "cloudy";

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 

array( "name" => "General",
	"type" => "section"),
	
	array( "type" => "open"),
 
		array(	"name" => "Custom Logo Image URL",
				"desc" => "Enter the full path <em>(starting with http://)</em> to your logo here.",
				"id" => $shortname."_logo_path",
				"std" => "",
				"type" => "text"),
				
		array(	"name" => "Theme Skin",
				"desc" => "Select the skin for your theme.",
				"id" => $shortname."_skin",
				"std" => "Day",
				"type" => "select",
				"options" => array("Day", "Night")),	
				
		array(	"name" => "Enable Cufon?",
				"desc" => "Do you want to use the cufon font replacment technology ?",
				"id" => $shortname."_cufon",
				"std" => "Enable",
				"type" => "select",
				"options" => array("Enable", "Disable")),
				
		array(	"name" => "Enable Timthumb - Auto image resizer plugin?",
				"desc" => "Do you want to use the timthumb plugin to resize your images ?",
				"id" => $shortname."_timthumb",
				"std" => "Enable",
				"type" => "select",
				"options" => array("Enable", "Disable")),	
				
		array(	"name" => "Pages to exclude from the Main Navigation",
				"desc" => "<strong><em>*optional</em></strong><br>Insert the IDs (comma seperated) of the pages you want to exclude from the main navigation.<br>
				<em>(example:1, 5, 25)</em>",
				"id" => $shortname."_exclude_pages",
				"std" => "",
				"type" => "text"),
				
		array(  "name" => "Custom Favicon",
				"desc" => "A favicon is a 16x16 pixel icon that represents your site. Paste the URL to a .ico image that you want to use as the favicon",
				"id" => $shortname."_favicon",
				"type" => "text",
				"std" => ""),	
				
		array(  "name" => "Custom Css",
				"desc" => "<strong><em>*optional</em></strong><br>Here you enter some custom css rules. <em>(example: a {color:red;})</em><br /> If you are not familiar with CSS and how it works do not enter anything here.",
				"id" => $shortname."_custom_css",
				"std" => "",
				"type" => "textarea"),
						
	array( "type" => "close"),

array( "name" => "Home-Page Slider",
	"type" => "section"),
	
	array( "type" => "open"),
	
		array(  "name" => "Slider Type",
				"desc" => "Choose the type of slider you want to use on the home-page.",
				"id" => $shortname."_slider_type",
				"std" => "",
				"type" => "select",
				"options" => array("Curtain-Slider", "Fading-Slider", "Carousel-Slider", "None")),
		
		array(  "name" => "Choose Slider Category",
				"desc" => "Choose the category for the home-page slider.",
				"id" => $shortname."_slider_cat",
				"type" => "select",
				"options" => $wp_cats,
				"std" => "Choose a category..."),
			   
		array(  "name" => "Select Slider Items",
				"desc" => "Enter the number of items you want to be displayed in the home-page slider.",
				"id" => $shortname."_slider_items",
				"type" => "text",
				"std" => ""),

	array( "type" => "close"),

array( "name" => "Home-Page Settings",
	"type" => "section"),
	
	array( "type" => "open"),
	
		array(	"name" => "Quote Bar Text",
				"desc" => "Enter the text for the quote-bar, this shouldn't be longet then 50 chars.",
				"id" => $shortname."_quotebar_text",
				"std" => "",
				"type" => "text"),
				
		array(	"name" => "Quote Bar Link",
				"desc" => "Enter the url you want the 'get a quote' button on the quote-bar to link to.",
				"id" => $shortname."_quotebar_link",
				"std" => "",
				"type" => "text"),
		
		array(	"name" => "Left Box Title",
				"desc" => "Enter the title for the Left box.",
				"id" => $shortname."_left_box_title",
				"std" => "",
				"type" => "text"),
		
		array( "name" => "Left Box Image",
				"desc" => "Enter the full path <em>(starting with http://)</em> to the image for the Left box. It should be 290px wide and 60px high.",
				"id" => $shortname."_left_box_image",
				"std" => "",
				"type" => "text"),
					
		array(	"name" => "Left Box Content",
				"desc" => "Enter the content for the Left box.",
				"id" => $shortname."_left_box_content",
				"std" => "",
				"type" => "textarea"),
		
		array(	"name" => "Left Box Link",
				"desc" => "Insert the url you want the 'Read More' button on the Left box to link to.",
				"id" => $shortname."_left_box_link",
				"std" => "",
				"type" => "text"),
		
		array(	"name" => "Middle Box Title",
				"desc" => "Enter the title for the Middle box.",
				"id" => $shortname."_middle_box_title",
				"std" => "",
				"type" => "text"),
		
		array( "name" => "Middle Box Image",
				"desc" => "Enter the full path <em>(starting with http://)</em> to the image for the Middle box. It should be 290px wide and 60px high.",
				"id" => $shortname."_middle_box_image",
				"std" => "",
				"type" => "text"),
					
		array(	"name" => "Middle Box Content",
				"desc" => "Enter the content for the Middle box.",
				"id" => $shortname."_middle_box_content",
				"std" => "",
				"type" => "textarea"),
		
		array(	"name" => "Middle Box Link",
				"desc" => "Insert the url you want the 'Read More' button on the Middle box to link to.",
				"id" => $shortname."_middle_box_link",
				"std" => "",
				"type" => "text"),
				
		array(	"name" => "Right Box Title",
				"desc" => "Enter the title for the Right box.",
				"id" => $shortname."_right_box_title",
				"std" => "",
				"type" => "text"),
		
		array( "name" => "Right Box Image",
				"desc" => "Enter the full path <em>(starting with http://)</em> to the image for the Right box. It should be 290px wide and 60px high.",
				"id" => $shortname."_right_box_image",
				"std" => "",
				"type" => "text"),
					
		array(	"name" => "Right Box Content",
				"desc" => "Enter the content for the Right box.",
				"id" => $shortname."_right_box_content",
				"std" => "",
				"type" => "textarea"),
		
		array(	"name" => "Right Box Link",
				"desc" => "Insert the url you want the 'Read More' button on the Right box to link to.",
				"id" => $shortname."_right_box_link",
				"std" => "",
				"type" => "text"),
		
	array( "type" => "close"),
	
array( "name" => "Portfolio Settings",
	"type" => "section"),
	
	array( "type" => "open"),
					
		array(	"name" => "Posts to display",
				"desc" => "Enter the number of posts per page you want to display in the portfolio pages.",
				"id" => $shortname."_portfolio_items",
				"std" => "",
				"type" => "text"),	
		
	array( "type" => "close"),

array( "name" => "Blog Page Settings",
	"type" => "section"),
	
	array( "type" => "open"),	
	
		array(  "name" => "Categories To Exclude",
				"desc" => "<strong><em>*optional</em></strong><br>Insert the IDs (comma seperated) of the categories you want to exclude from the blog. Don't forget to add a minus sign before each category ID.<br>
				<em>(example:-1, -5, -25)</em>",
				"id" => $shortname."_blog_cats",
				"std" => "",
				"type" => "text"),				
									
		array(  "name" => "Posts to display",
				"desc" => "Enter the number of posts per page you want to display in the blog page.",
				"id" => $shortname."_blog_items",
				"std" => "",
				"type" => "text"),
		
	array( "type" => "close"),

array( "name" => "Contact Page Settings",
	"type" => "section"),
	
	array( "type" => "open"),
							
		array(  "name" => "Contact E-mail",
				"desc" => "Enter the e-mail address you want the emails from the contact form to be sent to.",
				"id" => $shortname."_contact_email",
				"std" => "",
				"type" => "text"),
				
		array(  "name" => "Contact Info Widget Title",
				"desc" => "Enter the title for the sidebar's Contact Info Widget.",
				"id" => $shortname."_contact_info_widget_title",
				"std" => "",
				"type" => "text"),
				
		array(  "name" => "Contact Info Widget Image",
				"desc" => "Enter the full path <em>(starting with http://)</em> to the sidebar's Contact Info Widget. It should be 235px wide and 150px high.",
				"id" => $shortname."_contact_info_widget_img",
				"std" => "",
				"type" => "text"),
		
		array(	"name" => "Contact Info Widget Text",
				"desc" => "Enter the content for the sidebar's Contact Info Widget. You can use HTML to style it.",
				"id" => $shortname."_contact_info_widget_content",
				"std" => "",
				"type" => "textarea"),
		
		array(	"name" => "Social Widget Title",
				"desc" => "Enter the title you want to be displayed in the social contact widget",
				"id" => $shortname."_social_widget_title",
				"std" => "",
				"type" => "text"),
							
		array(	"name" => "Twitter",
				"desc" => "Enter your Twitter account page.<br><em>(If left blank then nothing be presented.)</em>",
				"id" => $shortname."_social_widget_twitter",
				"std" => "",
				"type" => "text"),
							
		array(	"name" => "Facebook",
				"desc" => "Enter your Facebook page.<br><em>(If left blank then nothing be presented.)</em>",
				"id" => $shortname."_social_widget_facebook",
				"std" => "",
				"type" => "text"),
							
		array(	"name" => "Flickr",
				"desc" => "Enter your Flickr page.<br><em>(If left blank then nothing be presented.)</em>",
				"id" => $shortname."_social_widget_flickr",
				"std" => "",
				"type" => "text"),
						
		array(	"name" => "MySpace",
				"desc" => "Enter your MySpace page.<br><em>(If left blank then nothing be presented.)</em>",
				"id" => $shortname."_social_widget_myspace",
				"std" => "",
				"type" => "text"),
						
		array(	"name" => "Skype",
				"desc" => "Enter your Skype account.<br><em>(If left blank then nothing be presented.)</em>",
				"id" => $shortname."_social_widget_skype",
				"std" => "",
				"type" => "text"),	
		
	array( "type" => "close"),

array( "name" => "Footer",
	"type" => "section"),
	
	array( "type" => "open"),
	
		array(  "name" => "Copyright Text",
				"desc" => "Enter text used in the right side of the footer. It can be HTML",
				"id" => $shortname."_copyrights_text",
				"type" => "text",
				"std" => ""),
	
		array(  "name" => "Google Analytics",
				"desc" => "<strong><em>*optional</em></strong><br>Enter the code for your google analytics accound.",
				"id" => $shortname."_google_anal",
				"type" => "textarea",
				"std" => ""),
						 
array( "type" => "close")
 
);


function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=theme_options.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=theme_options.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>

<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
<div class="rm_opts">
<form method="post">
  <?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
  <?php break;
 
case "close":
?>
  </div>
  </div>
  <br />
  <?php break;
 
case "title":
?>
  <p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>
  <?php break;
 
case 'text':
?>
  <div class="rm_input rm_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case 'textarea':
?>
  <div class="rm_input rm_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?>
</textarea>
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case 'select':
?>
  <div class="rm_input rm_select">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
      <?php foreach ($value['options'] as $option) { ?>
      <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
      <?php } ?>
    </select>
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php
break;
 
case "checkbox":
?>
  <div class="rm_input rm_checkbox">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php break; 
case "section":

$i++;

?>
  <div class="rm_section">
  <div class="rm_title">
    <h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt="""><?php echo $value['name']; ?></h3>
    <span class="submit">
    <input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
    </span>
    <div class="clearfix"></div>
  </div>
  <div class="rm_options">
  <?php break;
 
}
}
?>
  <input type="hidden" name="action" value="save" />
</form>
<form method="post">
  <p class="submit">
    <input name="reset" type="submit" value="Reset" />
    <input type="hidden" name="action" value="reset" />
  </p>
</form>
</div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
