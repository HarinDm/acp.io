<?php
/**
 * Битва корпораций баннер
 */
$blockACF = get_field('_banner-block-content');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$description = $fieldsACF['description'];
	$imageRight = $fieldsACF['image-right'];
	$imageLeft = $fieldsACF['image-left'];
	$subtitle = $fieldsACF['subtitle'];
	$descriptionSubtitle = $fieldsACF['description-subtitle'];

?>

<section class="banner">
	<div class="wrapper">   
		<a class="page__on-main" href="http://acpgame.io/">На главную </a>
		<div class="banner-block">
			<div class="banner-block__content">
				<!--_block-titles-->
				<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
				<!--_block-titles-->
				<!-- <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Битва <br>  </span><span>корпораций</span></h1> -->
				<div class="banner-block__content-imgText">
					<div class="page__img"><img src="<?php echo $imageLeft ?>" alt=""></div>
					<!-- <div class="page__img"><img src="assets/img/img-battle-of-corporations-logo.png" alt=""></div> -->
					<p class="page__text page__text_arrow"><?php echo $description ?></p>
					<!-- <p class="page__text page__text_arrow">Неформальная площадка для интеллектуального батла и общения между компаниями.</p> -->
				</div>
			</div>
			<div class="banner-block__img"><img src="<?php echo $imageRight ?>" alt="">
				<h4 class="page__title-h4"><?php echo $subtitle ?></h4>
				<!-- <h4 class="page__title-h4">Сплоченность команды</h4> -->
				<p class="page__text"><?php echo $descriptionSubtitle ?></p>
				<!-- <p class="page__text">Укрепление эмоциональной связи между сотрудниками, командообразование.</p> -->
			</div>
		</div>
	</div>
</section>


<?php endif; ?>


