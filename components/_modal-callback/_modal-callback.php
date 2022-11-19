<?php
/**
 * Обратная связь
 */
$blockACF = get_field('_modal-callback');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
?>

<section class="modal modal-callback page_hidden" id="modal-callback">
<div class="modal-container">
    <div class="modal__action">
        <button class="page__btn page__btn_close close-modal" data-modal="modal-callback"></button>
    </div>
    <div class="modal__content">
        <div class="modal__content-block">
            <div class="modal__content-text">
                <h3 class="page__title-h3"><?php echo $title ?></h3>
                <p class="page__text"><?php echo $subtitle ?></p>
                <!-- <h3 class="page__title-h3">Битва Копрораций</h3>
                <p class="page__text">Желаете заказать игру для сотрудников или их детей, мы с удовольствием организуем для вас интеллектуальное мероприятие с уникальным сценарием.</p> -->
            </div>
            <form class="page-form">
                <label class="page-label page-input_user">
                    <input class="page-input" type="text" required placeholder="Имя">
                </label>
                <label class="page-label page-input_phone">
                    <input class="page-input" type="phone" required placeholder="Телефон">
                </label>
                <div class="page-label checkbox">
                    <input class="page-input-checkbox" id="checkbox" type="checkbox" required>
                    <label class="page-label" for="checkbox">Согласен на обработку персональных данных</label>
                </div>
                <button class="page__btn page__btn_gray">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>
</section>


<?php endif; ?>


