<?php
/**
 * Модальное меню
 */
$blockACF = get_field('_modal-menu');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$links = $fieldsACF['links'];
	$linksGames = $fieldsACF['links-games'];
	$linksBottom = $fieldsACF['links-bottom'];
	$phone = $fieldsACF['phone'];
	$photosModal = $fieldsACF['photos-modal'];

?>

<section class="modal modal-menu page_hidden" id="modal-menu">
	<div class="modal-container">
		<div class="modal__action">
			<button class="page__btn page__btn_close close-modal" data-modal="modal-menu"></button>
		</div>
		<div class="modal__content">
			<div class="modal__content-nav">
				<div class="page__img"><a href="../"><img src="assets/img/logo-big.png" alt=""></a></div>
				<nav class="page__nav">
				<?php 	
					if(!empty($links )) :
					foreach($links as $link) : ?>
					<a class="page__link" href="<?php echo $link ['link']; ?>"><?php echo $link ['name-link']; ?></a>
					<?php endforeach; 
						endif;
					?>
					<ul class="page__lists">
						<?php 	
							if(!empty($linksGames )) :
							foreach($linksGames as $linksGame) : ?>
						<li class="page__list"> <a class="page__link" href="<?php echo $linksGame ['link']; ?>"><?php echo $linksGame ['name-link']; ?></a></li>
						<?php endforeach; 
							endif;
						?>
					</ul>
					<?php 	
					if(!empty($linksBottom )) :
					foreach($linksBottom as $linksBottom) : ?>
					<a class="page__link" href="<?php echo $linksBottom ['link']; ?>"><?php echo $linksBottom ['name-link']; ?></a>
					<?php endforeach; 
						endif;
					?>
				</nav>
				<div class="page__links">
				<?php 	
					if(!empty($phone )) :
					foreach($phone as $phone) : ?>
					<a class="page__link" href="tel:+7 (495) 941-83-25"><?php echo $phone ['number-phone']; ?></a>
					<?php endforeach; 
						endif;
					?>
				</div>
				<div class="social">
					<button class="page__btn page__icon page__icon_facebook_white"></button>
					<button class="page__btn page__icon page__icon_instagram_white"></button>
				</div>
			</div>
			<div class="modal__content-info">
				<?php 	
					if(!empty($photosModal )) :
					foreach($photosModal as $photosModal) : ?>
				<div class="page__img"><img src="<?php echo $photosModal ['photo']; ?>" alt=""></div>
				<?php endforeach; 
					endif;
				?>
			</div>
		</div>
	</div>
</section>

<?php else: ?>

	<section class="modal modal-menu page_hidden" id="modal-menu">
	<div class="modal-container">
		<div class="modal__action">
			<button class="page__btn page__btn_close close-modal" data-modal="modal-menu"></button>
		</div>
		<div class="modal__content">
			<div class="modal__content-nav">
				<div class="page__img"><a href="../"><img src="assets/img/logo-big.png" alt=""></a></div>
				<nav class="page__nav">
					<!--wp_menu-->
							
				</nav>
				<nav class="page__nav">
					<a class="page__link" href="/о-нас/">О нас</a>
					<a class="page__link" href="/команда/">Команда</a>
					<a class="page__link" href="/корпоративные-игры/">Корпоративные игры</a>
					<a class="page__link" href="/формат-игр/">Формат игр</a>
							<ul class="page__lists">
								<li class="page__list"> <a class="page__link" href="/формат-игр/">Угадать за 60 секунд</a></li>
								<li class="page__list"> <a class="page__link" href="/формат-игр/">Читай.Слушай.Смотри.</a></li>
								<li class="page__list"> <a class="page__link" href="/формат-игр/">Детские игры</a></li>
							</ul>
							<a class="page__link" href="/битва-корпораций/">Битва корпораций</a>
							<a class="page__link" href="/photos/">Фотоотчеты</a>
							<a class="page__link" href="/видео/">Видео</a>
							<a class="page__link" href="/сми/">СМИ о нас</a>
							<a class="page__link" href="/контакты/">Контакты</a>
						</nav>
					<div class="page__links">
						<a class="page__link" href="tel:+7 (495) 941-83-25">8 (495) 941-83-25</a>
						<a class="page__link" href="tel:+7 (985) 774-32-40">8 (985) 774-32-40</a>
					</div>					
				<div class="social">
					<button class="page__btn page__icon page__icon_facebook_white"></button>
					<button class="page__btn page__icon page__icon_instagram_white"></button>
				</div>
			</div>
			<div class="modal__content-info">
				<div class="page__img"><img src="assets/img/img-modalmenu-1.png" alt=""></div>
				<div class="page__img"><img src="assets/img/img-modalmenu-2.png" alt=""></div>
				<div class="page__img"><img src="assets/img/img-modalmenu-3.png" alt=""></div>
				<div class="page__img"><img src="assets/img/img-modalmenu-4.png" alt=""></div> 
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
