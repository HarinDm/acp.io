<?php
/**
 * Блок Битва корпораций контент
 */
$blockACF = get_field('_content');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle1 = $fieldsACF['subtitle1'];
	$description1 = $fieldsACF['description1'];
	$image1 = $fieldsACF['image1'];
	$subtitle2 = $fieldsACF['subtitle2'];
	$description2 = $fieldsACF['description2'];
	$image2 = $fieldsACF['image2'];
	$subtitle3 = $fieldsACF['subtitle3'];
	$description3 = $fieldsACF['description3'];
	$image3 = $fieldsACF['image3'];
	$subtitle4 = $fieldsACF['subtitle4'];
	$description4 = $fieldsACF['description4'];
	$image4 = $fieldsACF['image4'];
	
?>

<section class="content">
	<div class="wrapper">
		<h3 class="page__title-h3"><?php echo $title ?></h3>
		<!-- <h3 class="page__title-h3">Какие задачи решает «Битва Корпораций»</h3> -->
		<div class="content-items">
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="<?php echo $image1 ?>" alt=""></div>
					<!-- <div class="page__img"><img src="assets/img/img-battle-of-corporations-2.png" alt=""></div> -->
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4"><?php echo $subtitle1 ?></h4>
					<p class="page__text"><?php echo $description1 ?></p>
					<!-- <h4 class="page__title-h4">HR-Брендинг</h4> -->
					<!-- <p class="page__text">Укрепление имиджа компании, которая заботится о корпоративной культуре своих сотрудников.</p> -->
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="<?php echo $image2 ?>" alt=""></div>
					<!-- <div class="page__img"><img src="assets/img/img-battle-of-corporations-3.png" alt=""></div> -->
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4"><?php echo $subtitle2 ?></h4>
					<p class="page__text"><?php echo $description2 ?></p>
					<!-- <h4 class="page__title-h4">Оптимизация бюджета</h4>
					<p class="page__text">Стоимость участия в проекте существенно ниже бюджета отдельного корпоративного мероприятия</p> -->
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="<?php echo $image3 ?>" alt=""></div>
					<!-- <div class="page__img"><img src="assets/img/img-battle-of-corporations-4.png" alt=""></div> -->
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4"><?php echo $subtitle3 ?></h4>
					<p class="page__text"><?php echo $description3 ?></p>
					<!-- <h4 class="page__title-h4">Система премирования</h4>
					<p class="page__text">Поощрение особо отличившихся сотрудников участием в проекте, с возможностью вести внутренний счет баллов и дополнительным вознаграждением команды-победителя в общем зачете компании.</p> -->
				</div>
			</div>
			<div class="content-item">
				<div class="content-item__img">
					<div class="page__img"><img src="<?php echo $image4 ?>" alt=""></div>
					<!-- <div class="page__img"><img src="assets/img/img-battle-of-corporations-5.png" alt=""></div> -->
				</div>
				<div class="content-item__text">
					<h4 class="page__title-h4"><?php echo $subtitle4 ?></h4>
					<p class="page__text"><?php echo $description4 ?></p>
					<!-- <h4 class="page__title-h4">Новые бизнес-возможности</h4>
					<p class="page__text">Новые возможности для развития бизнеса через укрепление связей с коллегами из других компаний и отраслей.</p> -->
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


