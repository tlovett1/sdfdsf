<?php
    use ATU\Theme\Helpers;

$settings = get_theme_mod('about_stats');
?>
<div class="about-stats">
	<div class="about-stats-container">
		<?php  if (isset($settings[ 'stat1' ][ 'image' ]) && ! empty($settings[ 'stat1' ][ 'image' ])) :  ?>
			<div class="about-stats-item" data-aos="fade-up"  data-aos-duration="3000">
				<div class="about-stats-image">
					<?php echo Helpers\get_image_element($settings[ 'stat1' ][ 'image' ], '', 'about-stat1');?>
				</div>
				<div class="about-stats-content">
					<div class="about-stats-pointer">
					<?php echo Helpers\inline_svg('circle'); ?>
					</div>
					<div class="about-stats-text">
						<span class="about-stats-heading">
							<?php echo esc_html($settings[ 'stat1' ][ 'heading' ]); ?>
						</span>
						<span class="about-stats-number">
							<?php echo esc_html($settings[ 'stat1' ][ 'number' ]); ?>
						</span>
						<span class="about-stats-subheading">
							<?php echo esc_html($settings[ 'stat1' ][ 'label' ]); ?>
						</span>
					</div>
				</div>
			</div>
		<?php endif;
        if (isset($settings[ 'stat2' ][ 'image' ]) && ! empty($settings[ 'stat2' ][ 'image' ])) :
        ?>
		<div class="about-stats-item about-stats-item--second" data-aos="fade-up"  data-aos-duration="3000">
			<div class="about-stats-image">
				<?php echo Helpers\get_image_element($settings[ 'stat2' ][ 'image' ], '', 'about-stat2');?>
			</div>
			<div class="about-stats-content">
				<div class="about-stats-pointer">
					<?php echo Helpers\inline_svg('circle'); ?>
				</div>
				<div class="about-stats-text">
					<span class="about-stats-heading">
						<?php echo esc_html($settings[ 'stat2' ][ 'heading' ]); ?>
					</span>
					<span class="about-stats-number">
						<?php echo esc_html($settings[ 'stat2' ][ 'number' ]); ?>
					</span>
					<span class="about-stats-subheading">
						<?php echo esc_html($settings[ 'stat2' ][ 'label' ]); ?>
					</span>
				</div>
			</div>
		</div>
		<?php endif;
        if (isset($settings[ 'stat3' ][ 'image' ]) && ! empty($settings[ 'stat3' ][ 'image' ])) :
        ?>
		<div class="about-stats-item  about-stats-item--third" data-aos="fade-up"  data-aos-duration="3000" data-aos-delay="300">
			<div class="about-stats-image">
				<?php echo Helpers\get_image_element($settings[ 'stat3' ][ 'image' ], '', 'about-stat3');?>
			</div>
			<div class="about-stats-content">
				<div class="about-stats-pointer">
					<?php echo Helpers\inline_svg('circle'); ?>
				</div>
				<div class="about-stats-text">
					<span class="about-stats-heading">
						<?php echo esc_html($settings[ 'stat3' ][ 'heading' ]); ?>
					</span>
					<span class="about-stats-number">
						<?php echo esc_html($settings[ 'stat3' ][ 'number' ]); ?>
					</span>
					<span class="about-stats-subheading">
						<?php echo esc_html($settings[ 'stat3' ][ 'label' ]); ?>
					</span>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>