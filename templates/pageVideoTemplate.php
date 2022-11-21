<?php
/*
	Template Name: Страница с видео
*/
get_header();?>
<main class="page sample-page video-page">
	<div class="wrapper"><a class="page__on-main page__on-main_yellow" href="/">На главную </a>
		<!--_block-titles-->
		<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
			<!--_block-titles-->
		<div class="page-nav">
			<div class="page-btn">
				<button class="page__btn page__btn_gray-yellow">Все видео</button>
			</div>
			<div class="page-btn">
				<button class="page__btn page__btn_gray-yellow">Интервью</button>
			</div>
			<div class="page-btn">
				<button class="page__btn page__btn_gray-yellow">Промо-ролики</button>
			</div>
			<div class="page-btn">
				<button class="page__btn page__btn_gray-yellow">Турслет</button>
			</div>
		</div>
		<!-- sliderVideo -->
		<?php include(TEMPLATEPATH . "/components/_sliderVideo/_sliderVideo.php");?>
		<!-- sliderVideo -->
	</div>	
	<!--_next-section-->
	<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
	<!--_next-section-->
</main>
<?php get_footer(''); ?>