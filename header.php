<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bitcoin_broker
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55DTD2S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<div class="container-fluid">


	<!-- Header - User Navbar -->
	<?php // get_template_part( 'header-parts/header', 'user-navbar' ); ?>

	<!-- Header - Navbar -->
	<?php get_template_part( 'header-parts/header', 'navbar' ); ?>
	<div class="header-dropdown-menu-container container padding-0">
	    <div class="header-dropdown-menu-fixed-row row">
	      <!-- Header - Dropdown -->
	      <?php get_template_part( 'header-parts/header', 'dropdown' ); ?>
	    </div>
	</div><!-- end of <div class="container"> -->