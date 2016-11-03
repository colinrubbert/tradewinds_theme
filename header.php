<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tradewinds_Interactive
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Lato:400,300,700' rel='stylesheet' type='text/css'>
<!-- Font Awesome Icons -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'tradewinds_interactive' ); ?></a>


	<?php
		wp_nav_menu( array(
			'theme_location'			=> 'mobile',
			'container'						=> 'nav',
			'container_class'			=> 'mobile-menu'
		) );
	?>

	<header>
		<div class="container">
			<div class="header-container">
				<nav class="branding">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo/cloud-logo.svg" alt="Tradewinds Interactive Logo" class="tradewinds-logo">
					<div class="branding-title">Tradewinds</div>
				</nav>
				<?php
					wp_nav_menu( array(
						'theme_location'			=> 'primary',
						'container'						=> 'nav',
						'container_class'			=> 'desktop-menu'
					) );
				?>
				<div class="mobile-nav-toggle">
					<span></span>
				</div>
			</div>
		</div>
	</header>


	<div id="content" class="site-content">
