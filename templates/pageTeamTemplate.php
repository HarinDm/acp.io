<?php
/*
	Template Name: Команда
*/
get_header();?>
<div>
	<main class="page sample-page team">
		<div class="wrapper">
			<a class="page__on-main" href="/">На главную </a>
			
			<div class="team-block">
			<!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
			<!--_block-titles-->
			<!--team-block-items-->
			<?php include(TEMPLATEPATH . "/components/_team-block-items/_team-block-items.php");?>
			<!--team-block-items-->
			</div>
		</div>
		<!-- blockquote -->
		<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
		<!-- blockquote -->		
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-team -->
	<?php include(TEMPLATEPATH . "/components/_modal-team/_modal-team.php");?>
	<!-- modal-team -->
	
	<script src="js/team-append-content.js"></script>
</div>	
<?php get_footer(''); ?>