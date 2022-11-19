<?php get_header(); ?>
<!--single-->

<main class="page sample-page gallery">
		<div class="wrapper">
            <a class="page__on-main page__on-main_yellow" href="../">На главную </a>
            <!-- make block title for pages -->
			<h1 class="page__title-h1 page__title-h1_text-shadow_white">
                <span>Фотоальбом <br></span><span>наших игр</span>
            </h1>
			<!-- _img-gallery-single -->
			<?php include(TEMPLATEPATH . "/components/_block-single-phostos/_block-single-phostos.php");?>
			<!-- _img-gallery-single -->
		</div>
		<!--_next-section-->
		<?php include(TEMPLATEPATH . "/components/_next-section/_next-section.php");?>
		<!--_next-section-->
</main>
<!-- modal-gallery  -->
<?php include(TEMPLATEPATH . "/components/_modal-gallery/_modal-gallery.php");?>
<!-- modal-gallery  -->

<!--single-->
<?php get_footer(); ?>