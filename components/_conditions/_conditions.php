<?php
/**
 * Битва корпораций условия
 */
$blockACF = get_field('_conditions');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$conditions = $fieldsACF['conditions'];
	$slider = $fieldsACF['slider'];
?>

<section class="conditions">
    <div class="wrapper">
        <h3 class="page__title-h3"><?php echo $title ?></h3>
        <div class="block-infoSlider">
            <div class="block-infoSlider__info block-infoSlider__left">
                <?php 
                if(!empty($conditions)) :
                foreach($conditions as $condition) : ?>
                    <div class="block-infoSlider__item"><span class="page__number"><?php echo $condition['number']; ?></span>
                        <p class="page__text"><?php echo $condition['meaning']; ?></p>
                    </div>
                <?php endforeach; 
				endif;
			    ?>
                <button class="page__btn page__btn_yellow open-modal" data-modal="modal-callback">принять участие</button>
            </div>
            <?php if(!empty($slider )) : ?>
            <div class="block-infoSlider__slider block-infoSlider__rigth">
                <div class="btn-play page_hidden"></div>
                <div id="sliderInfoSlider">
                    <?php 	
					if(!empty($slider )) :
					foreach($slider as $slide) : ?>
						<div class="page__img">
							<img src="<?php echo $slide['image']; ?>" alt="">
						</div>
					<?php endforeach; 
						endif;
					?>
                </div>
                <div class="slider-thumbnails" id="customizeThumbnailsInfoSlider">
                    <?php 	
                        if(!empty($slider )) :
                        foreach($slider as $slide) : ?>
                    <div class="page__img_small"></div>
                    <?php endforeach; 
						endif;
					?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php endif; ?>


