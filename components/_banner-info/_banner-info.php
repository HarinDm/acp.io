<style>
body{
	color: #fff;
}
</style>
<?php
/**
 * Баннер-Инфо
 */
// echo '<pre>';
// var_dump(get_field('_banner-info'));
// echo '</pre>';

$blockACF = get_field('_banner-info');
if (!empty($blockACF) && $blockACF["isShow"]) :

	$eventsACF = $blockACF['fields']['events'];
	$titleACF = $blockACF['fields']['title']
?>


<div class="banner-info">
	<div class="wrapper">
		<div class="banner-info-content">
			<!-- <h2 class="page__title-h2"> <?= $titleACF; ?></h2>  -->
			<h2 class="page__title-h2"> <?php echo $titleACF; ?></h2> 
			<p></p>
			<!--foreach-->
			<!--<div class="page__text hide">
				<div class="page_yellow">25 Октября</div>
				<div class="city">Ереван</div>
				<div class="game-name">Угадать за 60 секунд</div>
			</div>-->
			<!--foreach-->

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
			<!-- <div class="page__text hide">
				<div class="page_yellow">25 Октября</div>
				<div class="city">Ереван</div>
				<div class="game-name">Угадать за 60 секунд</div>
			</div>
			<div class="page__text hide">
				<div class="page_yellow">28 Октября</div>
				<div class="city">Екатеринбург</div>
				<div class="game-name">Угадать за 60 секунд</div>
			</div>
			<div class="page__text hide">
				<div class="page_yellow">8 Декабря</div>
				<div class="city">Екатеринбург</div>
				<div class="game-name">Угадать за 60 секунд</div>
			</div>
			<div class="page__text hide">
				<div class="page_yellow">17 Декабря</div>
				<div class="city">Москва</div>
				<div class="game-name">Битва корпораций</div>
			</div>
			<div class="page__text hide">
				<div class="page_yellow">23 Декабря</div>
				<div class="city">Екатеринбург</div>
				<div class="game-name">Читай.Слушай.Смотри.</div>
			</div> -->
		</div>
		<div class="page__link-toggle page__text page_mobile">еще даты</div>
	</div>
</div>

<?php endif; ?>


