<?php
/**
 * Видео
 */
$blockACF = get_field('_video');
if (!empty($blockACF) && $blockACF["isShow"]) :

	$fieldsACF = $blockACF['fields'];
	$titleACF = $fieldsACF['title'];
	$subtitleACF = $fieldsACF['subtitle'];
	$videoACF = $fieldsACF['video'];
?>

<section class="video">
				<div class="wrapper">
					<div class="video-block">
						<div class="video-block-content">
							<<h3 class="page__title-h3"><?php echo $titleACF ?></h3>
							<p class="page__text"><?php echo $subtitleACF ?></p>
							<!-- <h3 class="page__title-h3">Смотрите видео</h3>
							<p class="page__text">Сложно передать всю эмоциональную составляющую наших мероприятий, но нам это удалось.</p> -->
							<button class="page__btn page__btn_gray">Смотреть все видео</button>
						</div>
						<div class="video-block-img"><img class="page__video" src="<?php echo $videoACF ?>"></div>
						<!-- <div class="video-block-img"><img class="page__video" src="assets/img/img-video.png"></div> -->
					</div>
				</div>
			</section>

<?php endif; ?>