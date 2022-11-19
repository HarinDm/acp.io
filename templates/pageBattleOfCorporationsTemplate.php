<?php
/*
	Template Name: Битва корпораций
*/
get_header();?>
<div>
	<main class="page sample-page battle-of-corporations">
		<!--banner-->
		<?php include(TEMPLATEPATH . "/components/_banner-block-content/_banner-block-content.php");?>
		<!--banner-->
		<!--content-->
		<?php include(TEMPLATEPATH . "/components/_content/_content.php");?>
		<!--content-->
		<!--conditions-->
		<?php include(TEMPLATEPATH . "/components/_conditions/_conditions.php");?>
		<!--conditions-->
		<!--present-->
		<?php include(TEMPLATEPATH . "/components/_present/_present.php");?>
		<!--present-->
		<!--trust-->
		<?php include(TEMPLATEPATH . "/components/_trust/_trust.php");?>
		<!--trust-->
		<!--TODO: include next-section-l-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--TODO: include next-section-l-->
	</main>
	<!-- modal-callback -->
	<?php include(TEMPLATEPATH . "/components/_modal-callback/_modal-callback.php");?>
	<!-- modal-callback -->
</div>
<?php get_footer(''); ?>