<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php if(is_front_page()){ ?>
			<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<?php }else{ ?>
			<title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
		<?php } ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>


  <header id="header">
		<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; bottom: #transparent-sticky-navbar">
			<nav class="uk-navbar-container" style="position: relative; z-index: 980;">

          <div uk-navbar>
						<div class="uk-navbar-left nav-overlay">
							<div class="uk-navbar-item uk-logo">
								<a href="<?php echo get_site_url(); ?>" title="<?php the_title(); ?>">
									<?php echo pintar_logo(); ?>
									<div class="light-logo"><?php echo pintar_logo(); ?></div>
								</a>
							</div>
						</div>
						<div class="uk-navbar-right nav-overlay">
							<div class="uk-navbar-item menu-menu-1-container menu uk-visible@m">
								<!-- Base menu -->
								<?php wp_nav_menu( array( 'theme_location' => 'menu-principal',  'menu_class' => 'nav-menu uk-navbar-nav', 'container' => 'ul' ) ); ?>
								<?php get_search_form(); ?>
							</div>
						</div>
				</div>

			</nav>
		</div>
	</header>

	<body <?php body_class(isset($class) ? $class : ''); ?>>
		<div>
