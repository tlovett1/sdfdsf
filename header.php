<?php
/**
 * The header template file.
 *
 * @package atu theme
 */

use ATU\Theme\Helpers;
use ATU\Theme\Views;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title>
	<?php
	wp_title( '' );
	if ( wp_title( '', false ) ) {
		echo ' | ';
	}
	bloginfo( 'name' );
	?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<header id="siteHeader" class="site-header">
		<div class="container">
			<div id="siteMenu" class="site-header-menu">
				<button id="menuButton" class="menu-button">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-left',
							'depth'          => 1,
						)
					);
					?>
				<h1 class="logo">
	<?php
	echo Helpers\get_image_element( get_theme_mod( 'atu_logo_setting' ), 'siteLogo', 'site-logo' );
	?>
				</h1>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-right',
							'depth'          => 1,
						)
					);
					?>
			</div>
		</div>
	</header>
