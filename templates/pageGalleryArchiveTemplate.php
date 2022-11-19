<?php
/*
	Template Name: Галерея архив(каталог)
*/
get_header();?>
<div>
    <main class="page sample-page gallery-page info-page">
		<div class="wrapper">
			<a class="page__on-main page__on-main_yellow" href="http://acpgame.io/">На главную </a>
			<h1 class="page__title-h1 page__title-h1_text-shadow_white"><span>смотрите <br></span><span>как ЭМОЦИОНАЛЬНО</span></h1>
			<div class="page-nav">
				<button class="page__btn page__btn_gray-yellow is-active">Наши игры</button>
				<button class="page__btn page__btn_gray-yellow">Битва Корпораций</button>
			</div>
			<div class="page-nav">
				<button class="page__btn page__btn_gray-yellow">Москва</button>
				<button class="page__btn page__btn_gray-yellow">Санкт-Петербург</button>
				<button class="page__btn page__btn_gray-yellow">Екатеринбург</button>
				<button class="page__btn page__btn_gray-yellow">Алматы</button>
				<button class="page__btn page__btn_gray-yellow">Нур-Султан</button>
				<button class="page__btn page__btn_gray-yellow is-active">Ереван</button>
				<button class="page__btn page__btn_gray-yellow">Ташкент</button>
			</div>
			<!-- sliderGallery -->
			<?php include(TEMPLATEPATH . "/components/_sliderGallery/_sliderGallery.php");?>
			<!-- sliderGallery -->
		</div>
		<!--_next-section-->
			<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!--_modal-gallery-->
	<?php include(TEMPLATEPATH . "/components/_modal-gallery/_modal-gallery.php");?>
	<!--_modal-gallery-->
</div>
<?php get_footer(''); ?>