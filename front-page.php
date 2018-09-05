<?php
/**
 * The front page template file
 *
 * @package atu-theme
 */
use ATU\Theme\Helpers;


get_header()?>
<?php if ( have_posts() ) : ?>
	<main class="page-wrapper">
		<div id="home" class="hero">
			<img src="https://via.placeholder.com/1436x960?text=Hello+World">
		</div>
		<!-- ABOUT SECTION -->
		<div id="about" class="section about-container">
			<!-- <div class="triangle"></div> -->
			<?php
			echo get_template_part( 'partials/about', 'intro' );
			?>
			<div class="about-list-section section"  style="background-image:url(https://placeimg.com/343/537/arch)">
				<div class="about-lists-container container">
					<?php echo get_template_part( 'partials/about', 'lists' ); ?>
				</div>

			</div>
		</div>
		<!-- ABOUT SECTION -->
		
	</main>
<?php endif; ?>
<?php get_footer(); ?>
