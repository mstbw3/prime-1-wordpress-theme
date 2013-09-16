<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--[endif]-->
<head>
	<title><?php echo get_bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>
<body>
	<header class="master-header">
		<a href="<?php bloginfo('url') ?>"><img class="master-header-logo" title="Prime 1 Computer Services" src="<?php bloginfo('stylesheet_directory') ?>/images/prime-1-logo.png"></a>
		<nav class="master-navigation"><?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?></nav>
	</header>

