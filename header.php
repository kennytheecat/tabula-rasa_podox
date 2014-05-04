<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->

		<?php if ( in_category('gallery') ) { ?>
			<!-- Portfolio Slideshow-->
			
			<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/css/portfolio-slideshow.min.css">
			<!--
			<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/js/fancybox/jquery.fancybox-1.3.4.css">			
			<noscript><link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/plugins/portfolio-slideshow-pro/css/portfolio-slideshow-noscript.css?ver=1.8.7" /></noscript><style type="text/css">.centered .ps-next {} .scrollable {height:50px;} .ps-prev {top:30px} .ps-next {top:-35px} .slideshow-wrapper .pscarousel img {margin-right:8px !important; margin-bottom:8px !important;}</style><script type="text/javascript">/* <![CDATA[ */var psTimeout = new Array(); psAudio = new Array(); var psAutoplay = new Array(); var psDelay = new Array(); var psFluid = new Array(); var psTrans = new Array(); var psRandom = new Array(); var psCarouselSize = new Array(); var touchWipe = new Array(); var psPagerStyle = new Array(); psCarousel = new Array(); var psSpeed = new Array(); var psLoop = new Array(); var psClickOpens = new Array(); /* ]]> */</script>
			-->
			<!--//Portfolio Slideshow-->
		<?php } ?>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="inner-header">
			<div class="site-branding">
				<a href="#my-menu" class="mobile-menu"><img src="<?php echo bloginfo('template_url'); ?>/images/navicon_20.png" /></a>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!--<h1 class="logo"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="" /></h1> -->
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<nav id="my-menu" class="main-navigation" role="navigation">
				<?php tr_main_nav(); ?>
			</nav><!-- #site-navigation -->

			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">