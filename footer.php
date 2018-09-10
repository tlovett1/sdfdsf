<?php

use ATU\Theme\Views;
use ATU\Theme\Helpers;

$footer = get_theme_mod('footer_settings');
//
?>
	<footer class="footer">
		<div data-aos="fade-up"  data-aos-duration="3000"> 
		<div class="footer-top">
			<div class="section-intro section">
				<div class="footer-background-image"  style="background-image:url(<?php echo esc_url(wp_get_attachment_url($footer['image']));?>)"></div>
				<div class="container">
					<div class="heading-container">
						<?php
                            if (Helpers\value_exists($footer, 'subheading')) :
                        ?>
							<span id="footerSubheading" class="subheading">
								<?php echo esc_html($footer['subheading']); ?>
							</span>
						<?php endif;
                            if (Helpers\value_exists($footer, 'heading')) :
                        ?>
							<h3 id="footerHeading" class="heading">
								<?php echo esc_html($footer['heading']); ?>
							</h3>
						<?php endif; ?>
					</div>
					<?php
                    echo Views\build_footer_slider();
                    ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-wrapper">
					<div class="footer-bottom-text-wrapper">
						<span class="footer-copyright">© <?php echo date('Y'); ?> Athlete Transition U</span>
						<?php
                        echo Views\my_social_icons_output();
                        ?>
					</div>
					<a href="http://www.crossfield.com" class="footer-crossfield-link">Site By Crossfield</a>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>