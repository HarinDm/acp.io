<?php
// Для общего шаблона pageTemp
global $fieldsACF;
$fieldsACF =  [
	'_banner',
	'_template',
	'_banner-info',
	'_about',
	'_emotions',
	'_video',
	'_games',
	'_kids',
	'_corporate-games',
	'_battle-of-corporations',
	'_tourslet',
	'_trust',
	'_next-section',
	'_sliderSmi',
	'_modal-callback',
];
?>
<!DOCTYPE html>
<html lang="ru"> 
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Gromov Ilia">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
		<base href="<?php echo get_template_directory_uri(); ?>/">
		<title>Acpgame</title>
		<link rel="stylesheet" href="libs/css/tiny-slider.css" type="text/css">
		<link rel="stylesheet" href="css/styles.css" type="text/css">
    <!---->
    <?php wp_head(); ?>
  </head>
	<body>
		<section class="bg">
			<div class="wrapper">
				<div class="bg-grid">
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
					<div class="bg-grid__line"></div>
				</div>
			</div>
		</section>
		<header class="header">
			<div class="wrapper">
				<div class="header-block">
					<div class="header-block__logo"><a href="/"><img class="page_desktop" src="assets/img/logo-desktop.png"><img class="page_mobile" src="assets/img/logo-mobile.png"></a></div>
					<div class="header-block__links"><a class="page__link page_desktop" href="tel:+7 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page_desktop" href="tel:+7 (985) 774-32-40">8 (985) 774-32-40</a><a class="page__link page_mobile" href="tel:+7 (985) 774-32-40">
							<div class="page__icon page__icon_phone"></div></a></div>
					<div class="header-block__social">
						<button class="page__btn page__icon page__icon_facebook"></button>
						<button class="page__btn page__icon page__icon_instagram"></button>
					</div>
					<div class="header-block__menu">
						<button class="page__btn open-modal" data-modal="modal-menu"><span class="page__icon page__icon_menu"></span><span class="page_mobile page__text">Меню</span></button>
					</div>
					<div class="header-block_bg"></div>
				</div>
			</div>
		</header>