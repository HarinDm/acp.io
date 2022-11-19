<?php
/**
 * Турслет
 */
$blockACF = get_field('_tourslet');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$image = $fieldsACF['image']
?>

<section class="tourslet">
	<div class="wrapper">
		<div class="tourslet-block">
			<div class="tourslet-block-img">
				<div class="page__img"><img src="<?php echo $image ?>"></div>
				<!-- <div class="page__img"><img src="assets/img/img-tour.png"></div> -->
			</div>
			<div class="tourslet-block-content">
				<h3 class="page__title-h3"><?php echo $title ?></h3>
				<p class="page__text"><?php echo $subtitle ?></p>
				<!-- <h3 class="page__title-h3">Турслет</h3>
				<p class="page__text">Мы представляем наш спец.проект для любителей природы и душевных компаний.</p> -->
			</div>
		</div>
	</div>
</section>


<?php endif; ?>