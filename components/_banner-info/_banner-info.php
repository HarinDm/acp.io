<?php
/**
 * Баннер-Инфо
 */


$blockACF = get_field('_banner-info');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$eventsACF = $blockACF['fields']['events'];
	$titleACF = $blockACF['fields']['title'];
?>

<div class="banner-info">
	<div class="wrapper">
		<div class="banner-info-content">
			<h2 class="page__title-h2"> <?php echo $titleACF; ?></h2> 
			<?php 
			if(!empty($eventsACF)) :
			foreach($eventsACF as $event) : ?>
			<div class="page__text hide">
				<div class="page_yellow"><?php echo $event['date']; ?></div>
				<div class="city"><?php echo $event['city']; ?></div>
				<div class="game-name"><?php echo $event['name']; ?></div>
			</div>
			<?php endforeach; 
				endif;
			?>
		</div>
		<div class="page__link-toggle page__text page_mobile">еще даты</div>
	</div>
</div>

<?php endif; ?>


