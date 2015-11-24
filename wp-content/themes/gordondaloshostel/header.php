<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gordondaloshostel
 */
?>
<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="format-detection" content="telephone=no"/>
	<link rel="icon" href="<?php bloginfo('template_directory')?>/img/favicon.ico" type="image/x-icon">
	<title>Home</title>

	<!-- Bootstrap -->
	<link href="<?php bloginfo('template_directory')?>/css/bootstrap.css" rel="stylesheet">


	<!-- Links -->
	<link rel="<?php bloginfo('template_directory')?>/stylesheet" href="css/camera.css">
	<link rel="<?php bloginfo('template_directory')?>/stylesheet" href="css/google-map.css">


	<!--JS-->
	<script src="<?php bloginfo('template_directory')?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery-migrate-1.2.1.min.js"></script>





	<!--[if lt IE 9]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/..">
			<img src="img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
				 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
		</a>
	</div>

	<script src='<?php bloginfo("template_directory")?>/js/html5shiv.js'></script>
	<![endif]-->
	<script src='<?php bloginfo('template_directory')?>/js/device.min.js'></script>

	<?php wp_head(); ?>
</head>





















<!--		-->
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--			--><?php //else : ?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--			--><?php //endif;
//
//			$description = get_bloginfo( 'description', 'display' );
//			if ( $description || is_customize_preview() ) : ?>
<!--				<p class="site-description">--><?php //echo $description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php //endif; ?>
