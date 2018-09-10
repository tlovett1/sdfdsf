<?php
/**
 * Partial file for the video modal.
 *
 * @package atu-theme
 */

use ATU\Theme\Helpers;
?>

<div id="modalVideo" class="modal video">
	<div class="modal-wrapper">
		<div class="modal-content-wrapper">
			<div class="modal-container">
				<div id="modalContent" class="modal-content">
				</div>
				<button id="modalClose" class="modal-close">
					<?php echo Helpers\inline_svg( 'close' ); ?>
				</button>
			</div>
		</div>
	</div>
</div>