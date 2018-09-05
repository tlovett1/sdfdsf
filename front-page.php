<?php
/**
 * The front page template file
 *
 * @package atu-theme
 */



get_header()?>
<?php if ( have_posts() ) : ?>
	<main class="page-wrapper">
		<div id="home" class="hero">
			<img src="https://via.placeholder.com/1436x960?text=Hello+World">
		</div>
		<!-- ABOUT SECTION -->
		<div id="about" class="section about-container">
			<div class="triangle"></div>
			<div class="container">
				<div class="section-intro">
					<div class="heading-container-border">
						<span class="subheading">
							WHAT WE DO
						</span>
						<h3 class="heading">
							STRONGER TOGETHER
						</h3>
					</div>
					<p class="text">
						The Pro Athlete Business Combine is a one week event taking place in a select U.S. City that will maximize our professional athletes business and network portfolio. With efforts of making the experience a best-in-class, only 30 elite NFL players paired with top elite organizations are invited to develop new business interest and off-the-field networks. 
					</p>
				</div>
				<button class="button about-button">
					<span class="button-corner button-corner--top-right"></span>
					<span class="button-corner button-corner--top-left"></span>
					<span class="button-text">Apply</span>
					<span class="button-corner button-corner--bottom-left"></span>
					<span class="button-corner button-corner--bottom-right"></span>
				</button>
			</div>
		</div>
		<!-- ABOUT SECTION -->
		
	</main>
<?php endif; ?>
<?php get_footer(); ?>
