<?php
/*
	Template Name: СМИ
*/
get_header();?>
<div>
	<main class="page sample-page smi">
		<div class="wrapper">
			<a class="page__on-main page__on-main_yellow" href="http://acpgame.io/">На главную </a>
			<!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
			<!--_block-titles-->
			<div class="page-nav">
				<div class="page-btn">
					<button class="page__btn page__btn_gray-yellow">Все </button>
				</div>
				<div class="page-btn">
					<button class="page__btn page__btn_gray-yellow">Видео</button>
				</div>
				<div class="page-btn">
					<button class="page__btn page__btn_gray-yellow">Статья</button>
				</div>
				<div class="page-btn">
					<button class="page__btn page__btn_gray-yellow">Интервью</button>
				</div>
			</div>
			<!--_sliderSmi-->
			<?php include(TEMPLATEPATH . "/components/_sliderSmi/_sliderSmi.php");?>
			<!--_sliderSmi-->		
		</div>			
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
</div>
<?php get_footer(''); ?>