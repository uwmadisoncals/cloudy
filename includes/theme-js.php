<?php
if (!is_admin()) add_action( 'wp_print_scripts', 'bluz_add_javascript' );
function bluz_add_javascript( ) {
	wp_enqueue_script('jquery');    
	$my_prettyphoto = get_bloginfo('template_directory')."/js/jquery.prettyPhoto.js";
	wp_enqueue_script('prettyphoto',$my_prettyphoto,array('jquery'));
	$bluz_custom = get_bloginfo('template_directory')."/js/custom.js";
	wp_enqueue_script('bluz_custom',$bluz_custom,array('jquery'));
}

?>