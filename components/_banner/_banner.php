
<?php
// DRY - don't reapet your self Pattren 
// если код повторяется больше двух раз, выносим это в одно место - в один экземляр 
/**
 * Баннер
 */
$blockACF = get_field('_banner');
if (!empty($blockACF) && $blockACF["isShow"]) :

$fieldsACF = $blockACF['fields'];
$title = $fieldsACF['title'];
$description = $fieldsACF['description'];
$slider = $fieldsACF['slider']; // array - массив /  если массив пустой то нужно делать проверку функция  empty cтавит логический оператор НЕ -> ! итого !empty($array) если он(массив) не пустой тогда выполняй код 
// echo '<pre>';
// var_dump($slider);
// echo '</pre>';

?>
<section class="banner">
	<div class="wrapper">
		<div class="banner-block">
			<div class="banner-block-content">
				<div class="banner-block-content__description">
					<p class="page__text"><?php echo $fieldsACF['subtitle']; ?></p>
				</div>
				<div class="banner-block-content__slogan">
					<h1 class="page__title-h1 page__title-h1_text-shadow_white">
						<?php echo $title; ?>
					</h1>
					<button class="page__btn page__btn_yellow">принять участие</button>
				</div>
				<div class="banner-block-content__description">
					<p class="page__text page__text_arrow"><?php echo $description;?></p>
				</div>
			</div>
			<?php if(!empty($slider )) : ?>
			<div class="banner-block-img">
				<div class="banner-block-img__big">
					<div class="banner-block-img__big_bg"></div>
					<div class="btn-play page_hidden"></div>
					<div id="sliderBanner">
						<?php 
						if(!empty($slider )) :
						foreach($slider as $slide) : ?>
							<div class="page__img">
								<img class="tns-lazy-img" data-src="<?php echo $slide['image']; ?>">
							</div>
						<?php endforeach; 
							endif;
						?>
						<!-- <div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-1.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-2.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-3.png"></div>
						<div class="page__img"><img class="tns-lazy-img" data-src="assets/img/img-banner-4.png"></div> -->
					</div>
				</div>
				<div class="banner-block-img__preview">
					<div class="slider-thumbnails" id="customizeThumbnails">
						<?php 
						if(!empty($slider )) :
						foreach($slider as $slide) : ?>
							<div class="page__img_small">
								<img src="<?php echo $slide['image']; ?>">
							</div>
						<?php endforeach; 
						endif;
						?>
						<!-- <div class="page__img_small"><img src="assets/img/img-banner-1.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-1.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-2.png"></div>
						<div class="page__img_small"><img src="assets/img/img-banner-small-3.png"></div> -->
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>