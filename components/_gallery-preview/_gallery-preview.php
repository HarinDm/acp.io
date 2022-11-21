<?php
/**
 * Блок Превью для Галереи
 */
$blockACF = get_field('_gallery-preview');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $id = get_the_ID();
    $the_post = get_post($id);
    $link = get_permalink($id);
    $fieldsACF = $blockACF['fields'];
    $imagePreview = $fieldsACF['image-preview'];
    $date = $fieldsACF['date'];
    $Description = $fieldsACF['Description'];
?>

<div class="page-item">
    <div class="page__img">
        <img src="<?php echo $imagePreview; ?>" alt="">
        <div class="nav">
            <a class="page__link" href="<?php echo $link; ?>">Смотреть фотоальбом</a>
            <div class="page__link open-modal" data-modal="modal-gallery">Быстрый просмотр</div>
        </div>
    </div>
    <div class="page__text date"><?php echo $date; ?></div>
    <div class="page__text value"><?php echo $Description; ?></div>
    <a class="page-item_bg" href="<?php echo $link; ?>"></a>
</div>


<?php endif; ?>


