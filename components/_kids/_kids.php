<?php
/**
 * Дети
 */
$blockACF = get_field('_kids');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$imageRight = $fieldsACF['image-right'];
	$imageLeft = $fieldsACF['image-left']
?>

<section class="kids">
	<div class="wrapper">
		<div class="kids-block">
			<div class="kids-block__content">
				<div class="page__img"><img src="<?php echo $imageLeft ?>"></div>
				<h3 class="page__title-h3"><?php echo $title ?></h3>
				<p class="page__text"><?php echo $subtitle ?></p>
				<!-- <h3 class="page__title-h3">Для детей</h3>
				<p class="page__text">Не знаете чем удивить детей сотрудников компании? <br> Какой формат выбрать для празднования <br> Дня Рождения своего ребенка? <br> Мы представляем эксклюзив.</p> -->
				<div class="page__btn">Подробнее</div>
			</div>
			<div class="kids-block__content-img"><img src="<?php echo $imageRight ?>"></div>
		</div>
	</div>
</section>

<?php endif; ?>
