<?php
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="description" content="<?php bloginfo('description') ?>" />
<?php if(is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php }?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/<?php echo get_option('cloudy_skin'); ?>.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/superfish.css" />
<?php 
$theme_skin = get_option('cloudy_skin');
if( $theme_skin == "Night" ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/superfish-night.css" />
<?php } ?>


<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7.css">
<![endif]-->
        
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<link rel="shortcut icon" href="<?php echo get_option('cloudy_favicon'); ?>" />

<?php wp_head(); ?>

<!-- js -->
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/quicksand.font.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ui.core.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ui.tabs.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jqFancyTransitions.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.js"></script>
<script type="text/javascript"> 
   jQuery(document).ready(function() { 
   	    jQuery('ul.sf-menu').superfish({ 
            delay:       150                          // one second delay on mouseout 
		}); 
    });  
</script>

<?php 
$cufon = get_option('cloudy_cufon');
if ( $cufon == "Enable") { ?>    
<!-- Cufon -->
<script type="text/javascript">
	jQuery(document).ready(function() {
		Cufon.replace('h1, h2, h3, h4, h5, h6, p.tagline');
	});
</script>
<?php } ?>

<!-- Home-page Slider -->
<?php 
$slider_type = get_option('cloudy_slider_type');
if ( $slider_type == "Curtain-Slider" ) { ?> 

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/curtain-slider.js"></script>
    
<?php } else if ( $slider_type == "Fading-Slider" ) { ?>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fading-slider.js"></script>
    
<?php } else if ( $slider_type == "Carousel-Slider" ) { ?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/carousel-slider.js"></script>
    
<?php } ?>

<?php if(get_option('cloudy_custom_css') != "") { ?>
<!-- Custom CSS -->
    <style type="text/css">
	<?php echo get_option('cloudy_custom_css'); ?>
	</style>
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
</head>
<body id="home-page">
<!-- site-wrapper START here -->
<div id="site-wrapper">
  <!-- header START here -->
  <div id="header">
    <!-- container START here -->
    <div class="container">
      <!-- logo START here -->
      <div id="logo">
        <h1><a href="<?php bloginfo('url');?>" title="Home"><img src="<?php echo get_option('cloudy_logo_path'); ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
      </div>
      <!-- logo END here -->
      <!-- Search START here -->
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <!-- Search END here -->
      <!-- navigation START here -->
      <?php wp_nav_menu('sort_column=menu_order&container=ul&theme_location=header-nav&menu_class=sf-menu&container_class=sf-menu'); ?>
      <!-- navigation END here -->
      
