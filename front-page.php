<?php
/**
 * The front page template file
 *
 * @package atu-theme
 */
use ATU\Theme\Helpers;
use ATU\Theme\Views;

get_header()?>
<?php if (have_posts()) : ?>
	<main class="page-wrapper">
		<div id="home" class="hero-wrapper">
			<?php echo get_template_part('partials/hero', 'hero'); ?>
		</div>

		<div id="about" class="about-container">
			<?php
                echo get_template_part('partials/about', 'intro');
                echo get_template_part('partials/about', 'stats');
                echo get_template_part('partials/about', 'lists');
            ?>
		</div>

		<div id="events" class="events-container">
			<div class="section" data-aos="fade-up"  data-aos-duration="3000">
				<div class="container">
					<?php
                        echo get_template_part('partials/events', 'intro');
                        echo Views\build_events_intro_list();
                        echo Helpers\button('Apply', 'form-button');
                    ?>
				</div>
			</div>
			<?php
                echo Views\build_events_slider();
                echo get_template_part('partials/testimonials', 'slider');
            ?>
			<div class="events-schedule section">
				<div class="events-list-container" data-aos="fade-up"  data-aos-duration="3000">
					<?php
                        echo get_template_part('partials/events', 'list');
                        echo Views\build_events_list();
                    ?>
				</div>
			</div>
		</div>

		<div id="media" class="section media-section">
			<?php echo get_template_part('partials/media', 'media'); ?>
			<div class="container" data-aos="fade-up"  data-aos-duration="3000">
				<?php
                    echo Views\build_videos();
                    echo Helpers\button('Load More', 'white', 'loadmore');
                ?>
			</div>
		</div>

		<div id="contact" class="contact-section section">
			<div class="contact-container" data-aos="fade-up" data-aos-duration="4000">
				<?php
                    echo get_template_part('partials/contact', 'intro');
                    echo Views\build_contact_row();
                ?>
			</div>
		</div>

		<?php
            echo get_template_part('partials/modal', 'video');
            echo get_template_part('partials/modal', 'form');
        ?>
	</main>
<?php endif; ?>
<?php get_footer(); ?>
