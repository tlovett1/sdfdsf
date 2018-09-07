<?php
/**
 * The front page template file
 *
 * @package atu-theme
 */
use ATU\Theme\Helpers;
use ATU\Theme\Views;


get_header()?>
<?php if ( have_posts() ) : ?>
	<main class="page-wrapper">
		<div id="home" class="hero">
			<img src="https://via.placeholder.com/1436x960?text=Hello+World">
		</div>
		<!-- ABOUT SECTION -->
		<div id="about" class="about-container">
			<!-- <div class="triangle"></div> -->
			<div class="section">
				<?php
					echo get_template_part( 'partials/about', 'intro' );
				?>
			</div>
			<div class="about-list-section section"  style="background-image:url(https://placeimg.com/343/537/arch)">
				<div class="about-lists-container container">
					<?php echo get_template_part( 'partials/about', 'lists' ); ?>
				</div>

			</div>
		</div>
		<!-- ABOUT SECTION -->
		<!-- EVENT SECTION -->
		<div id="events" class="events-container">
			<div class="section">
				<?php
					echo get_template_part( 'partials/events', 'intro' );
					echo Views\build_events_intro_list();
					echo Helpers\button( 'Apply', '', 'test');
				?>
			</div>
			<?php
				// echo Views\build_events_slider();
				echo get_template_part( 'partials/testimonials', 'slider' );
			?>
			<div class="events-schedule section"></div></div>
		</div>
		<!-- EVENT SECTION -->
		<!-- MEDIA SECTION -->
		<div id="media" class="section media-section">
			<?php echo get_template_part( 'partials/media', 'media' ); ?>
			<div class="container">
				<?php
					echo Views\build_videos();
					echo Helpers\button( 'Load More', 'white', 'loadmore');
				?>
			</div>

		</div>
		<!-- MEDIA SECTION -->
		<!-- CONTACT SECTION -->
		<div id="contact" class="contact-section section">
			<div class="contact-container">
				<?php
					echo get_template_part( 'partials/contact', 'intro' );
					echo Views\build_contact_row();
				?>
			</div>
		</div>
		<!-- CONTACT SECTION -->
		<?php
			echo get_template_part( 'partials/modal', 'modal' );
		?>

	</main>
<?php endif; ?>
<?php get_footer(); ?>
