<?php
/*
	Template Name: Корпоративные игры
*/
get_header();?>
<div>
	<main class="page sample-page games-of-corparations info-page">
		<div class="wrapper"><a class="page__on-main" href="http://acpgame.io/">На главную </a>
			
			<!--Блок абзацы-->
			<?php include(TEMPLATEPATH . "/components/_block-paragraphs/_block-paragraphs.php");?>
			<!--Блок  абзацы-->

			<!--infoSlider_img-left-->
			<?php include(TEMPLATEPATH . "/components/_infoSlider_img-left/_infoSlider_img-left.php");?>
			<!--infoSlider-->

			<!--blockquote-->
			<!-- Тим-билдинги, клиентские мероприятия в нестандартном формате. -->
			<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
			<!--blockquote-->
		</div>
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-callback -->
	<!-- <h3 class="page__title-h3">Корпоративная игра</h3> -->
	<?php include(TEMPLATEPATH . "/components/_modal-callback/_modal-callback.php");?>
	<!-- modal-callback -->
</div>

<?php get_footer(''); ?>