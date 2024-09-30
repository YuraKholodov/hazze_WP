<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section Begin -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="logo">
						<a href="/">
							<img src="<?php echo get_field('header-logo', 'options')['url'] ?>" alt="<?php echo get_field('header-logo', 'options')['alt'] ?>">
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-md-10">
					<?php wp_nav_menu([
						'theme_location'  => 'header_menu',
						'container'       => 'nav',
						'container_class' => 'main-menu mobile-menu',
						'depth'           => 0,
					]); ?>
				</div>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>
	</header>
	<!-- Header End -->