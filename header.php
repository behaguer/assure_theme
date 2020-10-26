<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes();?>>

	<head>

		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?=get_template_directory_uri() . '/css/bootstrap.css';?>" />

		<script  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
		<script src="<?=get_template_directory_uri() . '/js/assure.js';?> "></script>
		<link rel="stylesheet" href="<?=get_template_directory_uri() . '/css/assure.css';?>" />
		<link rel="stylesheet" href="<?=get_template_directory_uri() . '/css/responsive.css';?>" />

		<?php wp_head();?>

	</head>

	<body <?php body_class();?>>

	<?php
wp_body_open();
?>

<div class="bg-lines container">

<div class="row">
		<div class="col line-1"></div>
		<div class="col line-2"></div>
		<div class="col line-3"></div>
		<div class="col line-4"></div>
		<div class="col line-5"></div>
		<div class="col line-6"></div>
		<div class="col line-7"></div>
</div>

</div>

<header id="header" class="header">
	<nav class="header" id="navbar-main">
			<div class="container">
					<div class="brand-logo">
							<a href="/" title="Assure Digital" rel="home" class="navbar-brand">
									<img src="<?=get_template_directory_uri() . '/images/assure_digital.png';?>" alt="Assure Digital" class="img-fluid d-inline-block align-top">
							</a>
					</div>


			<div class="header-menu">
					<div class="menu-icon">
							<span class="menu-global menu-top"></span>
							<span class="menu-global menu-middle"></span>
							<span class="menu-global menu-bottom"></span>
					</div>
			</div>

			</div>
	</nav>
</header>


