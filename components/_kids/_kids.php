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
	$imageLeft = $fieldsACF['image-left'];
?>

<section class="kids">
	<div class="wrapper">
		<div class="kids-block">
			<div class="kids-block__content">
				<div class="page__img"><img src="<?php echo $imageLeft; ?>"></div>
				<h3 class="page__title-h3"><?php echo $title; ?></h3>
				<p class="page__text"><?php echo $subtitle; ?></p>
				<div class="page__btn">Подробнее</div>
			</div>
			<div class="kids-block__content-img"><img src="<?php echo $imageRight; ?>"></div>
		</div>
	</div>
</section>

<?php endif; ?>
