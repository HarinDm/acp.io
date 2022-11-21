<?php
/*
	Template Name: Фотоальбом наших игр
*/
get_header();?>
<div>
    <main class="page sample-page gallery">
		<div class="wrapper"><a class="page__on-main page__on-main_yellow" href="/">На главную </a>
			<h1 class="page__title-h1 page__title-h1_text-shadow_white"><span>Фотоальбом <br></span><span>наших игр</span></h1>
			<!-- _img-gallery-single -->
			<?php include(TEMPLATEPATH . "/components/_img-gallery-single/_img-gallery-single.php");?>
			<!-- _img-gallery-single -->
		</div>
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
	</main>
	<!-- modal-gallery  -->
	<?php include(TEMPLATEPATH . "/components/_modal-gallery/_modal-gallery.php");?>
	<!-- modal-gallery  -->
</div>
<?php get_footer(''); ?>