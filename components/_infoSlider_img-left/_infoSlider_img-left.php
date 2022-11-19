<?php
/**
 * Инфослайдер изображение слева
 */
$blockACF = get_field('_infoSlider_img-left');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$slider = $fieldsACF['slider'];
    $title2 = $fieldsACF['title2'];
    $subtitle = $fieldsACF['subtitle'];
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
        <div class="block-infoSlider__info block-infoSlider__rigth">
            <h3 class="page__title-h3"><?php echo $title2 ?></h3>
            <p class="page__text"><?php echo $subtitle ?></p>
            <!-- <h3 class="page__title-h3">В прямом эфире</h3>
            <p class="page__text">В сложившейся ситуации в мире, мы с удовольствием организуем онлайн игру, в не менее увлекательном формате.</p> -->
            <button class="page__btn open-modal" data-modal="modal-callback">Принять участие </button>
        </div>
        
    </div>
</div>

<?php endif; ?>


