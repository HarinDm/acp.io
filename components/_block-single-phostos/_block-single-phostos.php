<?php
/**
 * Блок фотоальбома для Галереи
 */
$blockACF = get_field('_block-single-phostos');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $images = $fieldsACF['images'];
    
?>
<div class="page-items">
    <?php 	
    if(!empty($images )) :
    foreach($images as $image) : ?>
    <div class="page-item">
        <div class="page__img"  data-slug="cat" data-fancybox="gallery" href="<?php echo $image['photo']; ?>">
            <img src="<?php echo $image['photo']; ?>">
        </div>
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




