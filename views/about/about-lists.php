<?php

namespace ATU\Theme\Views;
use ATU\Theme\Helpers;


function build_about_list() {

	$lists = get_customizer_values( 'about_lists_settings_repeater' );

    if ( empty( $lists ) ) {
        return false;
    }

	ob_start(); ?>
	<ul class="about-lists">
		<?php foreach ( $lists as $listItem ): ?>
			<li class="about-list-item">

				<?php if (Helpers\value_exists( $listItem, 'heading' )): ?>
					<span class="about-list-heading">
						<?php echo esc_html( $listItem[ 'heading' ] ); ?>
					</span>
				<?php endif;
					if (Helpers\value_exists( $listItem, 'text' ) ): 
				?>
					<p class="about-list-text">
						<?php echo esc_html( $listItem[ 'text' ] ); ?>
					</p>
				<?php endif; ?>
			</li>
		<?php
		endforeach;
		?>
	</ul>
<?php
    return ob_get_clean();
}