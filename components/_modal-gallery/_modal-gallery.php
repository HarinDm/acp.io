<?php
/**
 * Модальная галерея
 * TODO: инструкция Важно добавить блок на страницу Блок будет отображаться только после того, как добавится на страницу в wp 
 */
$blockACF = get_field('_modal-gallery');
/* если блок не будет добавлен в wp ИИ НЕ проставлена галочка "отоброжать на странице" то код ниже не будет исполняться  */
if (!empty($blockACF) && $blockACF["isShow"]) :
    // HOTFIX:!!! get_field
    $blockACF = get_field('_block-single-phostos');

    $fieldsACF = $blockACF['fields'];
    $images = $fieldsACF['images'];  // array
?>



<section class="modal modal-gallery page_hidden" id="modal-gallery">
    <div class="modal-container">
        <div class="modal__action">
            <button class="page__btn page__btn_close close-modal" data-modal="modal-gallery"></button>
        </div>
        <div class="modal__content">
            <div class="modal__content-text">
                <h2 class="page__title-h2">ЕРЕВАН</h2>
                <div class="page__text date">25 ОКТ 2020</div>
                <div class="page__text">Угадать за 60 секунд</div>
            </div>
            <div class="modal__content-img">
                <div class="slider__actions">
                    <button class="page__btn_prev" data-controls="prev"></button>
                    <button class="page__btn_next" data-controls="next"></button>
                </div>
                <div class="modal__content-img-big">
                    <div class="btn-play page_hidden"></div>
                    <div id="sliderModalGallery">
                        <?php 	
                            if(!empty($images )) :
                            foreach($images as $image) : ?>
                            <div class="page__img"><img src="<?php echo $image['photo']; ?>" alt=""></div>
                            <?php endforeach; 
                                endif;
                            ?>
                    </div>
                </div>
            </div>
            <div class="modal__content-img-preview">
                <div class="slider-thumbnails" id="customizeThumbnailsModalGallery">
                    <?php 	
                    if(!empty($images )) :
                    foreach($images as $image) : ?>
                    <div class="page__img_small"><img src="<?php echo $image['photo']; ?>" alt=""></div>
                    <!-- <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div> -->
                <?php endforeach; 
                                endif;
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endif; ?>


