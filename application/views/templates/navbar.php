<!-- Header -->
<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
	<div class="header-inner">
		<div class="row nav-bar">
			<div class="column width-12 nav-bar-inner">
				<div class="logo">
					<div class="logo-inner">
						<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>public/images/logo-dark.png" alt="Polityvox Logo" /></a>
						<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>public/images/logo.png" alt="Warhol Logo" /></a>
					</div>
				</div>
				
				<nav class="navigation nav-block primary-navigation nav-right">
					<ul>
						<li class="current"><a href="<?= base_url(); ?>">Home</a></li>
						<li class="<?php echo show_current_class('about'); ?>"><a href="<?= base_url(); ?>about/">About</a></li>
						<li><a href="<?= base_url(); ?>app/">The App</a></li>
						<li><a href="<?= base_url(); ?>news/">News</a></li>
						<li><a href="<?= base_url(); ?>election/">2019 Elections</a></li>
						<li><a href="<?= base_url(); ?>work/">Work With Us</a></li>
						<li><a href="<?= base_url(); ?>contact/">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- Header End -->