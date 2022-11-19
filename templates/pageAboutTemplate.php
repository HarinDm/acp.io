<?php
/*
	Template Name: О нас
*/
get_header();?>
<div>
    <main class="page sample-page about-page info-page">
		<div class="wrapper">
			<a class="page__on-main" href="http://acpgame.io/">На главную </a>

			<!--_block-title-paragraphs-->
			<?php include(TEMPLATEPATH . "/components/_block-paragraphs/_block-paragraphs.php");?>
			<!--_block-title-paragraphs-->

			<?php include(TEMPLATEPATH . "/components/_sliderSmi/_sliderSmi.php");?>
			<!---page-block-->
			<?php include(TEMPLATEPATH . "/components/_about-page-block/_about-page-block.php");?>
			<!---page-block-->
			<!--blockquote-->
			<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
			<!--blockquote-->
		</div>
		<!--TODO: include next-section-l-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>	
	</main>
</div>
<?php get_footer(''); ?>