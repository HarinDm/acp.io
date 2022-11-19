<?php
/**
 * Блок Превью для Галереи
 */
$blockACF = get_field('_gallery-preview');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $imagePreview = $fieldsACF['image-preview'];
    $date = $fieldsACF['date'];
    $Description = $fieldsACF['Description'];
?>

<div class="page-item">
    <?php echo $post->post_title;?>
    <div class="page__img"><img src="<?php echo $imagePreview ?>" alt="">
        <div class="nav">
            <a class="page__link" href="http://acpgame.io/photos/test1/">Смотреть фотоальбом</a>
            <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
        </div>
    </div>
    <div class="page__text date"><?php echo $date ?></div>
    <div class="page__text value"><?php echo $Description ?></div>
    <div class="page-item_bg"></div>
</div>


<?php endif; ?>


