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
                <!-- <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div>
                <div class="page__img"><img src="assets/img/img-about-page.png" alt=""></div> -->
            </div>
            <div class="slider-thumbnails" id="customizeThumbnailsInfoSlider">
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
                <div class="page__img_small"></div>
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
            <!-- <div class="block-infoSlider__item"><span class="page__number">7</span>
                <p class="page__text">лет — приличный опыт</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">5</span>
                <p class="page__text">стран</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">500+</span>
                <p class="page__text">игр</p>
            </div>
            <div class="block-infoSlider__item"><span class="page__number">200+</span>
                <p class="page__text">корпоративов</p>
            </div> -->
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>


