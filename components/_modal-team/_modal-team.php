<?php
/**
 * Подробнее о команде
 */
$blockACF = get_field('_modal-team');
if (!empty($blockACF) && $blockACF["isShow"]) :
	
?>

<section class="modal modal-team page_hidden" id="modal-team">
	<div class="modal-container">
		<div class="modal__action">
			<button class="page__btn page__btn_close close-modal" data-modal="modal-team"></button>
		</div>
		
		<div class="modal__content">
			<div class="modal__content-img">
				<div class="page__img"><img src="" alt=""></div>
				
			</div>
			<div class="modal__content-text">
				<h2 class="page__title-h2"></h2>
				<div class="page__text position"></div>
				<p class="page__text description"></p>
			</div>
		</div>
		
	</div>
</section>

<?php endif; ?>



