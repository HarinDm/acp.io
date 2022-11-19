<?php
/*
	Template Name: Команда
*/
get_header();?>
<div>
	<main class="page sample-page team">
		<div class="wrapper">
			<a class="page__on-main" href="http://acpgame.io/">На главную </a>
			
			<div class="team-block">
			<!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
			<!--_block-titles-->
				<div class="team-block__description">
					<p class="page__text"><?php the_content(); ?></p>
				</div>
				<!--team-block-items-->
				<?php include(TEMPLATEPATH . "/components/_team-block-items/_team-block-items.php");?>
				<!--team-block-items-->
			</div>
		</div>
		<!-- blockquote -->
		<!-- Тим-билдинги, клиентские мероприятия в нестандартном формате. -->
		<?php include(TEMPLATEPATH . "/components/_blockquote/_blockquote.php");?>
		<!-- blockquote -->		
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-team -->
	<?php include(TEMPLATEPATH . "/components/_modal-team/_modal-team.php");?>
	<!-- modal-team -->
</div>	
<?php get_footer(''); ?>