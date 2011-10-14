<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head id="www-ssekodesigns-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Sseko Designs">
	<meta name="Copyright" content="Copyright Sseko Designs 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Sseko Designs">
	<meta name="DC.subject" content="Every Sandal has a story">
	<meta name="DC.creator" content="WeCreativeAgency.com">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/js/blueberry.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<script> 
// Edit to suit your needs.
var ADAPT_CONFIG = {
  // Where is your CSS?
  path: '<?php bloginfo('template_directory'); ?>/_/js/css/',
 
  // false = Only run once, when page first loads.
  // true = Change on window resize and page tilt.
  dynamic: true,
 
  // First range entry is the minimum.
  // Last range entry is the maximum.
  // Separate ranges by "to" keyword.
  range: [
    '0px    to 760px  = mobile.min.css',
    '760px  to 960px  = 720.min.css',
    '960px  to 5000px = 960.min.css',
  ]
};
</script> 

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(page-id); ?>>
	
	<div class="container_12 wrapper page-<?php the_ID(); ?>">
		<header>
			<div id="logo" class="grid_3">
				<a href="<?php echo get_option('home'); ?>/">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
				</a>
			</div>
			<div id="description" class="grid_5">
				<span style="display:none;">Every Sandal has a story</span>
				<img src="<?php bloginfo('template_directory'); ?>/images/description.png"/>
			</div>
			<div class="grid_9 nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu' ) ); ?>
			</div>
			
			<?php 
				if ( is_page_template('women.php') || is_page_template('meet.php')) {
								echo("<div class='grid_9 nav'>");
								wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu' , 'menu' => 'Women' )); 
								echo("</div>");
				} 
				else {
					
				}
			?>
			<div class="clear"></div> 
		</header>
