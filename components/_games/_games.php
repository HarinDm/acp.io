<?php
/**
 * Игры
 */
$blockACF = get_field('_games');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$slider = $fieldsACF['slider'];
	$image = $fieldsACF['image']
?>

<section class="games">
	<div class="wrapper">
		<div class="games-block">
			<div class="games-block-img"><img class="page__img" src="<?php echo $image ?>"></div>
			<!-- <div class="games-block-img"><img class="page__img" src="assets/img/img-games.png"></div> -->
			<div class="games-block-content">
				<div class="games-block-content-format">
					<h3 class="page__title-h3"><?php echo $title ?></h3>
					<p class="page__text"><?php echo $subtitle ?></p>
					<!-- <h3 class="page__title-h3">Формат игр</h3>
					<p class="page__text">Мы представляем пять видов  эксклюзивных игр, которые не оставят вас равнодушными.</p> -->
				</div>
				<?php if(!empty($slider )) : ?>
				<div class="games-block-content-format-slider">
					<div class="btn-play page_hidden"></div>
					<div id="sliderGames">
						<?php 	
						if(!empty($slider )) :
						foreach($slider as $slide) : ?>
							<div class="page__img">
								<img class="page__img" src="<?php echo $slide['image']; ?>">
							</div>
							<?php endforeach; 
								endif;
							?>
						<!-- <div class="page__img"><img class="page__img" src="assets/img/img-games-1.png"></div>
						<div class="page__img"><img class="page__img" src="assets/img/img-games-2.png"></div>
						<div class="page__img"><img class="page__img" src="assets/img/img-games-3.png"></div>
						<div class="page__img"><img class="page__img" src="assets/img/img-games-4.png"></div> -->
					</div>
					<div class="slider-thumbnails" id="customizeThumbnailsGames">
						<div class="page__img_small"></div>
						<div class="page__img_small"></div>
						<div class="page__img_small"></div>
						<div class="page__img_small"></div>
					</div>
					<button class="page__btn page__btn_gray">Подробнее</button>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<?php endif; ?>