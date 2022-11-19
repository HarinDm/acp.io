<?php
/**
 * Команда
 */
$blockACF = get_field('_team-block-items');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$teams = $fieldsACF['teams'];
?>
<?php if(!empty($teams )) : ?>
<div class="team-block-items">
<?php 
    if(!empty($teams )) :
    foreach($teams as $team) : ?>
    <div class="team-block__item">
        <div class="page__img"><img src="<?php echo $team['image']; ?>"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5"><?php echo $team['name']; ?></h5>
            <div class="page__text position"><?php echo $team['position']; ?></div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <?php endforeach; 
        endif;
    ?>
    <!-- <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-1.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">Юлиана константинова</h5>
            <div class="page__text position">Управляющий партнер</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div> -->
    <!-- <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-2.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">МАРИЯ ЖАЧЕВА</h5>
            <div class="page__text position">Руководитель проекта ACP GAME</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-3.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">ВИКА ЛЕБЕНСОН</h5>
            <div class="page__text position">PR-Директор</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-4.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">ТАТЬЯНА БУДАЕВА</h5>
            <div class="page__text position">Партнер ACP GAME Казахстан</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-5.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">ЗУЛЬФИЯ ХАЙБУЛЛИНА</h5>
            <div class="page__text position">Партнер ACP GAME Узбекистан</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-6.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">НАНА МАРТИРОСЯН</h5>
            <div class="page__text position">Партнер ACP GAME Армения</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-7.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">ЕКАТЕРИНА ЛОГИНОВА</h5>
            <div class="page__text position">Партнер ACP GAME г. Екатеринбург</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <div class="team-block__item">
        <div class="page__img"><img src="assets/img/img-team-8.png"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5">ОЛЬГА КУЗНЕЦОВА</h5>
            <div class="page__text position">Партнер ACP GAME г. Астана</div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div> -->
</div>

<?php endif; ?>
<?php endif; ?>