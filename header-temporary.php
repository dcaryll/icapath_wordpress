<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,400&family=Tinos:ital,wght@1,700&display=swap" rel="stylesheet">


	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="header-full">
			<div class="header-full--logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo-on-dark.svg"></a>
			</div>
			<div class="header-full--nav">
			</div>
			<div class="header-full--cta">
				<p>Full site coming soon!</p>
				<a href="#">Contact us</a>
			</div>
		</header>

		<main id="primary" class="site-main" role="main">
