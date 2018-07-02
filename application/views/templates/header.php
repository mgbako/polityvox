<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
		<meta name="twitter:widgets:theme" content="light">
		<meta property="og:title" content="Your-Title-Here" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="Your-Image-Url" />
		<meta property="og:description" content="Your-Page-Description" />
		<title>Polityvox <?= isset($title) ? "| ".$title : ''; ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="images/theme-mountain-favicon.ico">
		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400italic' rel='stylesheet' type='text/css'>
		
		<!-- Css -->
		<link rel="stylesheet" href="<?= base_url(); ?>public/css/core.min.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>public/css/skin.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>public/css/styles.css" />
		<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="shop home-page">
		<!-- Side Navigation Menu -->
		<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
			<div class="side-navigation-scroll-pane">
				<div class="side-navigation-inner">
					<div class="side-navigation-header">
						<div class="navigation-hide side-nav-hide">
							<a href="#">
								<span class="icon-cancel medium"></span>
							</a>
						</div>
					</div>
					<nav class="side-navigation">
						<ul>
							<li><a href="<?= base_url(); ?>" class="current">Home</a></li>
							<li><a href="<?= base_url(); ?>about">About</a></li>
							<li><a href="<?= base_url(); ?>app">The App</a></li>
							<li><a href="<?= base_url(); ?>news">News</a></li>
							<li><a href="<?= base_url(); ?>election">2019 Elections</a></li>
							<li><a href="<?= base_url(); ?>work">Work with Us</a></li>
							<li><a href="<?= base_url(); ?>contact">Contact</a></li>
						</ul>
					</nav>
					
					<div class="side-navigation-footer">
						<p class="copyright no-margin-bottom">&copy; <?= date('Y');?> Polityvox.</p>
					</div>
				</div>
			</div>
		</aside>
		<!-- Side Navigation Menu End -->
		<div class="wrapper">
			<div class="wrapper-inner">
				<!-- Header -->

        <!-- NavBar -->
        <?php require_once('navbar.php'); ?>
