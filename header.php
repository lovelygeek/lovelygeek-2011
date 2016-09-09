<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php wp_title('', true, 'right'); ?></title>

<meta name="google-site-verification" content="X91aMQsMwxEbthQ-o02dTlNe9cpiWueJ0buroNgjjOg" />

<meta name="viewport" content="width=device-width,initial-scale=1">


<?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>

<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php the_excerpt_rss(); ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>

<meta http-equiv="imagetoolbar" content="false" />

<meta name="application-name" content="<?php bloginfo('name'); ?>" />

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<link rel="author" href="<?php echo home_url(); ?>/humans.txt">

<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr-2.0.min.js"></script>

<?php wp_enqueue_script("jquery"); // Properly includes the jQuery library already built into WordPress ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/jquery.fancybox.css?v=2.0.1" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
	<div id="topcolors">&nbsp;</div>
	<div id="container">
		<header>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Lovely Geek Design" /></a>
		</header>
	
		<nav><?php wp_nav_menu(); ?></nav>