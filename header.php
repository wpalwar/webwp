<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="max-image-preview:large, max-video-preview:0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="site-header" id="header" itemscope itemtype="https://schema.org/WPHeader">
		<div class="container-fluid d-flex">
			<div class="header-logo d-flex" itemscope itemtype="https://schema.org/Organization">
				<a class="logo" href="<?php echo home_url("/"); ?>" rel="logo" aria-label="Web WP" itemprop="url">
					<img src="<?php echo WEBWP_BASE; ?>images/logo.png" alt="Web WP" class="site-logo" loading="eager" width="66" height="66" itemprop="logo">
				</a>
			</div>
			<nav class="header-nav" aria-label="Primary Navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" style="padding-top: 3px;">%3$s</ul>',
						'fallback_cb'    => false,
						'menu_class'     => 'primary-navlist',
						'menu_id'        => 'primary-nav',
						'container'      => false,
					)
				);
				?>
			</nav>
		</div>
	</header>