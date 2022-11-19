<?php
/**
 * Блок фотоальбома для Галереи
 */
$blockACF = get_field('_block-single-phostos');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $album = $fieldsACF['album'];
    
?>
<?php if(!empty($album )) : ?>
<div class="page-items">
    <?php 	
    if(!empty($album )) :
    foreach($album as $album) : ?>
    <div class="page-item">
        <div class="page__img"><img src="<?php echo $album ['photo'] ?>"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <?php endforeach; 
        endif;
    ?>

    <!-- <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-1.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div>
    <div class="page-item">
        <div class="page__img"><img src="assets/img/img-modal-gallery-2.png"></div>
        <div class="page-item_bg open-modal" data-modal="modal-gallery"></div>
    </div> -->
</div>
<?php endif; ?>

<?php endif; ?>


