<?php
/**
 * Страница блока о нас
 */
$blockACF = get_field('_about-page-block');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $slider = $fieldsACF['slider'];
    $experiences = $fieldsACF['experiences'];
?>

<div class="page-block">
    <div class="block-infoSlider">
        <?php if(!empty($slider )) : ?>
        <div class="block-infoSlider__slider block-infoSlider__left">
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
        <?php if(!empty($slider )) : ?>
        <div class="block-infoSlider__info block-infoSlider__rigth">
            <?php 
			if(!empty($experiences)) :
			foreach($experiences as $experience) : ?>
				<div class="block-infoSlider__item">
					<span class="page__number"><?php echo $experience['number']; ?></span>
					<p class="page__text"> <?php echo $experience['meaning']; ?></p>
				</div>
			<?php endforeach; 
				endif;
			?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>


