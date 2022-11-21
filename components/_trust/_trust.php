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
	// TODO: slider on reapter
?>

<section class="trust">
				<div class="wrapper">
					<div class="trust-block">
						<h3 class="page__title-h3"><?php echo $title; ?></h3>
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