<?php
/**
 * Битва корпораций
 */
$blockACF = get_field('_battle-of-corporations');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$image = $fieldsACF['image'];
?>

<section class="battle-of-corporations">
	<div class="wrapper">
		<div class="battle-of-corporations-block">
			<div class="battle-of-corporations-block-content">
				<h3 class="page__title-h3"><?php echo $title; ?></h3>
				<p class="page__text"><?php echo $subtitle; ?></p>
				<div class="page__btn">Подробнее</div>
			</div>
			<div class="battle-of-corporations-block-img">
				<div class="page__img"><img src="<?php echo $image; ?>"></div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>