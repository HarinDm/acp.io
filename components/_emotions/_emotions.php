<?php
/**
 * Эмоции
 */
$blockACF = get_field('_emotions');
if (!empty($blockACF) && $blockACF["isShow"]) :
	
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$slider = $fieldsACF['slider']
?>

<section class="emotions">
	<div class="wrapper">
		<div class="emotions-block">
			<div class="emotions-block-content">
				<div class="emotions-block-content__text">
					<h3 class="page__title-h3"><?php echo $title ?></h3>
					<p class="page__text"><?php echo $subtitle ?></p>
					<!-- <h3 class="page__title-h3">Свежие эмоции</h3>
					<p class="page__text">Мы стараемся фотоотчетами передать атмосферу наших мероприятий. Удается нам это или нет, вы сможете решить сами.</p> -->
				</div>
				<button class="page__btn page__btn_yellow">Смотреть все фото</button>
			</div>
			<?php if(!empty($slider )) : ?>
			<div class="emotions-block-img">
				<div class="emotions-block-img__big">
					<div id="emotionsBanner">
						<?php 
							if(!empty($slider )) :
							foreach($slider as $slide) : ?>
								<div class="page__img">
								<img src="<?php echo $slide['image']; ?>"></div>
							<?php endforeach; 
								endif;
							?>
						<!-- <div class="page__img"><img src="assets/img/img-emotions-big.png"></div>
						<div class="page__img"><img src="assets/img/img-emotions-2.jpg"></div>
						<div class="page__img"><img src="assets/img/img-emotions-3.jpg"></div> -->
					</div>
				</div>
				<div class="emotions-block-img__preview">
					<div class="slider-thumbnails" id="customizeThumbnailsEmotions">
						<?php 
							if(!empty($slider )) :
							foreach($slider as $slide) : ?>
								<div class="page__img_small">
								<img src="<?php echo $slide['image']; ?>"></div>
							<?php endforeach; 
								endif;
						?>

						<!-- <div class="page__img_small"><img src="assets/img/img-emotions-big.png"></div>
						<div class="page__img_small"><img src="assets/img/img-emotions-2.jpg"></div>
						<div class="page__img_small"><img src="assets/img/img-emotions-3.jpg"></div> -->
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php endif; ?>