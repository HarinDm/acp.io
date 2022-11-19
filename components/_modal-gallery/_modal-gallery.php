<?php
/**
 * Модальная галерея
 */
$blockACF = get_field('_modal-gallery');
if (!empty($blockACF) && $blockACF["isShow"]) :
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
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="modal__content-img-preview">
                <div class="slider-thumbnails" id="customizeThumbnailsModalGallery">
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
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-1.png" alt=""></div>
                    <div class="page__img_small"><img src="assets/img/img-modal-gallery-2.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endif; ?>


