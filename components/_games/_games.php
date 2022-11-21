<?php
/**
 * Блок Игры (Главная)
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
			<div class="games-block-content">
				<div class="games-block-content-format">
					<h3 class="page__title-h3"><?php echo $title ?></h3>
					<p class="page__text"><?php echo $subtitle ?></p>
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
					</div>
					<div class="slider-thumbnails" id="customizeThumbnailsGames">
					<?php 	
						if(!empty($slider )) :
						foreach($slider as $slide) : ?>
						<div class="page__img_small"></div>
						<?php endforeach; 
								endif;
							?>
					</div>
					<button class="page__btn page__btn_gray">Подробнее</button>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<?php endif; ?>