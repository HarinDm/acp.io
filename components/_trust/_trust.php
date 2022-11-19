<?php
/**
 * Нам доверяют
 */
$blockACF = get_field('_trust');
if (!empty($blockACF) && $blockACF["isShow"]) :
	$fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$slider1 = $fieldsACF['slider1'];
	$slider2 = $fieldsACF['slider2'];
	$slider3 = $fieldsACF['slider3'];
?>

<section class="trust">
				<div class="wrapper">
					<div class="trust-block">
						<h3 class="page__title-h3"><?php echo $title ?></h3>
						<!-- <h3 class="page__title-h3">НАМ ДОВЕРЯЮТ</h3> -->
						<?php if(!empty($slider1 )) : ?>
						<div class="trust-block__img">
							<div id="sliderTrust">
								<div class="page__img-container">
								<?php 	
									if(!empty($slider1 )) :
									foreach($slider1 as $slide) : ?>
										<div class="page__img">
											<img src="<?php echo $slide['image']; ?>">
										</div>
								<?php endforeach; 
										endif;
								?>
								</div>
								<div class="page__img-container">
								<?php 	
									if(!empty($slider2 )) :
									foreach($slider2 as $slide) : ?>
										<div class="page__img">
											<img src="<?php echo $slide['image']; ?>">
										</div>
								<?php endforeach; 
										endif;
								?>
								</div>
								<div class="page__img-container">
								<?php 	
									if(!empty($slider3 )) :
									foreach($slider3 as $slide) : ?>
										<div class="page__img">
											<img src="<?php echo $slide['image']; ?>">
										</div>
								<?php endforeach; 
										endif;
								?>
								</div>
								<!-- <div class="page__img-container">
									<div class="page__img"><img src="assets/img/img-logo-sibur.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-qiwi.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-capital.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-domodel.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-alfa.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-post-office.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-leroymerlin.png"></div>
									<div class="page__img"><img src="assets/img/img-logo-rt.png"></div>
								</div> -->
							</div>
							<div class="slider-thumbnails" id="customizeThumbnailsTrust">
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
								<div class="page__img_small"></div>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>


<?php endif; ?>