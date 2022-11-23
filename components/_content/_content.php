<?php
/**
 * Блок Битва корпораций контент
 */
$blockACF = get_field('_content');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$items = $fieldsACF['items'];
	
?>

<section class="content">
	<div class="wrapper">
		<h3 class="page__title-h3"><?php echo $title; ?></h3>
		<div class="content-items">
		<?php	
			if(!empty($items)) :
			foreach($items as $item) : ?>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="<?php echo $item['image']; ?>" alt=""></div>
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4"><?php echo $item['subtitle']; ?></h4>
					<p class="page__text"><?php echo $item['description'];?></p>
				</div>
			</div>
		<?php endforeach;
			endif; ?>
		</div>
	</div>
</section>

<?php endif; ?>


