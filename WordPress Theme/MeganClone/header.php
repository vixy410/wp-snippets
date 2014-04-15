<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<!-- Main WordPress Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- WYSIWYG CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wysiwyg.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Theme Head Code -->
<link href="<? bloginfo('stylesheet_directory'); ?>/css/index.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/about.css" type="text/css" media="screen" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/contact.css" type="text/css" rel="stylesheet" />
<!-- Portfolio -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/portfolio.css" type="text/css" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jcarousel.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery_1.3.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jcarousel.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#jcarouselMetro').jcarousel({
        scroll: 1,
		wrap: 'both'
    });
	
	
    jQuery('#jcarouselInvites').jcarousel({
        scroll: 1,
		wrap: 'both'
    });
});
</script>
<!-- End Theme Head Code -->
<?php  wp_head(); ?>
</head>
<body>
<div class="topBar"></div>

<!-- Begin container -->
<div id="container">
<!-- Begin contact -->
<div class="contactInfo">
  <ul>
    <li><?php echo get_option('of_address') ?></li>
    <li><?php echo get_option('of_city') ?>, <?php echo get_option('of_state') ?> <?php echo get_option('of_zip') ?> Main <?php echo get_option('of_phone') ?></li>
  </ul>
</div>
<!--/ End contact --> 

<!-- Begin navigation container -->
<div class="navigationContainer"> 
 
  <!-- Begin logo -->
  <div class="logo">
  <a href="<? bloginfo('home'); ?>"><img src="<?php echo get_option('of_logo') ?>" alt="<? bloginfo('name'); ?>" height="75" /></a> </div>
  <!--/ End logo --> 
  
  <!-- Begin navigation -->
  <div class="navigation">
    <!--<ul>
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>-->
    <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
  </div>
  <!--/ End navigation --> 
  
</div>
<!--/ End navigation container --> 

<!-- Begin grey separator -->
<div class="greySeparator"></div>
<!--/ End grey separator --> 