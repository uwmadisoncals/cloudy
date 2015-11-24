<?php 

automatic_feed_links();

add_filter('widget_text', 'do_shortcode');

global $wp_cats, $wp_pages;

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category...");

$pages = get_pages();
$wp_pages = array();
foreach ($pages as $page_list ) {
       $wp_pages[$page_list->ID] = $page_list->post_title;
}
array_unshift($wp_pages, "Choose a page...");

// Navigation Menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(array(
'header-nav' => __( 'Header Navigation' )
));
}

require_once (TEMPLATEPATH."/includes/theme-js.php");

include (TEMPLATEPATH."/includes/shortcodes.php");

include (TEMPLATEPATH."/includes/theme_options.php");

/*******************************************************
**********        ADD CUSTOM PAGE OPTIONS       ********
*******************************************************/

$new_meta_boxes = 
array(
"tagline" => array(
"name" => "pagetitle",
"std" => "",
"type" => "text",
"title" => "Page Title",
"description" => "Enter the main title for this page."),

"subtagline" => array(
"name" => "pagesubtitle",
"std" => "",
"type" => "text",
"title" => "Page Sub Title",
"description" => "Enter the sub title for this page."),

"sidebar" => array(
"name" => "sidebar",
"std" => "Default-Sidebar",
"type" => "select",
"title" => "Select Sidebar",
"options" => array("Default-Sidebar", "Custom-Sidebar"),
"description" => "Select what sidebar you want this page to use.<br> <strong><em>(Not functional in the full-width, portfolio and contact pages).</em></strong>"),

"portfolio" => array(
"name" => "portfolio",
"std" => "",
"type" => "select",
"title" => "Portfolio Page Category",
"options" => $wp_cats,
"description" => "<strong>Only if this is a portfolio page,</strong> Please choose the posts category for this portfolio page.")
);

function new_meta_boxes() {
global $post, $new_meta_boxes;

foreach($new_meta_boxes as $meta_box) {
$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

if($meta_box_value == "") {
$meta_box_value = $meta_box['std'];
}

echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

echo'<h4>'.$meta_box['title'].'</h4>';

switch ($meta_box['type']) {
    case "text":
        echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';
        break;
    case "select": 
    
        echo '<select name="'.$meta_box['name'].'_value">';
		foreach ($meta_box['options'] as $option) { 
        echo '<option ';
		if ($meta_box_value == htmlspecialchars_decode($option)) { echo ' selected="selected"'; }
		echo '>';
		echo htmlspecialchars_decode($option);
        echo '</option>';
        } 
        echo '</select>';
        
        
        break;
}

echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
}
}

function create_meta_box() {
global $theme_name;
if ( function_exists('add_meta_box') ) {
add_meta_box( 'new-meta-boxes', 'Custom Write Panel - Page', 'new_meta_boxes', 'page', 'normal', 'high' );
}
}

function save_postdata( $post_id ) {
global $post, $new_meta_boxes;

foreach($new_meta_boxes as $meta_box) {
// Verify
if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
return $post_id;
}

if ( 'page' == $_POST['post_type'] ) {
if ( !current_user_can( 'edit_page', $post_id ))
return $post_id;
} else {
if ( !current_user_can( 'edit_post', $post_id ))
return $post_id;
}

$data = $_POST[$meta_box['name'].'_value'];

if(get_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value')) == "")
add_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value'), $data, true);
elseif($data != get_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value'), true))
update_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value'), $data);
elseif($data == "")
delete_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value'), get_post_meta($post_id, htmlspecialchars_decode($meta_box['name'].'_value'), true));
}
}

   add_action('admin_menu', 'create_meta_box');  
   add_action('save_post', 'save_postdata');  

/*******************************************************
**********     END ADD CUSTOM PAGE OPTIONS     *********
*******************************************************/

/*******************************************************
**********        ADD CUSTOM POST OPTIONS       ********
*******************************************************/

$new_meta_boxes_posts = 
array(
"post_image" => array(
"name" => "post_image",
"std" => "",
"title" => "Post Image",
"description" => "Enter the path to the post image.<br /> The image size should be 620px wide and 150px high or bigger. "),

"full_image" => array(
"name" => "full_image",
"std" => "",
"title" => "Full Size Image",
"description" => "Enter the path to the full size image/video for the portfolio post.<br /> <u>If this is a post-image that's meant for the home-page slider</u> - these should be 940px wide and 270px high.<br />
<strong><em>Only for Portfolio/Slider posts!</em></strong><br />"),

);

function new_meta_boxes_posts() {
global $post, $new_meta_boxes_posts;

foreach($new_meta_boxes_posts as $meta_box) {
$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

if($meta_box_value == "")
$meta_box_value = $meta_box['std'];

echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

echo'<h4>'.$meta_box['title'].'</h4>';

echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';

echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
}
}

function create_meta_box_posts() {
global $theme_name;
if ( function_exists('add_meta_box') ) {
add_meta_box( 'new-meta-boxes-posts', 'Custom Write Panel - Post', 'new_meta_boxes_posts', 'post', 'normal', 'high' );
}
}

function save_postdata_posts( $post_id ) {
global $post, $new_meta_boxes_posts;

foreach($new_meta_boxes_posts as $meta_box) {
// Verify
if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
return $post_id;
}

if ( 'page' == $_POST['post_type'] ) {
if ( !current_user_can( 'edit_page', $post_id ))
return $post_id;
} else {
if ( !current_user_can( 'edit_post', $post_id ))
return $post_id;
}

$data = $_POST[$meta_box['name'].'_value'];

if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
update_post_meta($post_id, $meta_box['name'].'_value', $data);
elseif($data == "")
delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
}
}

   add_action('admin_menu', 'create_meta_box_posts');  
   add_action('save_post', 'save_postdata_posts');  

/*******************************************************
**********     END ADD CUSTOM POST OPTIONS     *********
*******************************************************/

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Default-Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Custom-Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
?>