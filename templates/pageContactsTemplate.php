<?php
/*
	Template Name: Контакты
*/
get_header();?>
<div>
	<main class="page sample-page contacts">
		<div class="wrapper">
			<a class="page__on-main" href="/">На главную </a>
			
			<!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
			<!--_block-titles-->

			<!--_contacts-block-->
			<?php include(TEMPLATEPATH . "/components/_contacts-block/_contacts-block.php");?>
			<!--_contacts-block-->
		</div>
	</main>
</div>
<?php get_footer(''); ?>