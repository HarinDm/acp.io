<?php
/**
 * Битва корпораций Подарок
 */
$blockACF = get_field('_present');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	$subtitle = $fieldsACF['subtitle'];
	$image = $fieldsACF['image'];
?>

<section class="present">
    <div class="wrapper">
        <div class="present-block">
            <div class="present-block__img"><img src="<?php echo $image; ?>" alt=""></div>
            <div class="present-block__content">
                <h3 class="page__title-h3"><?php echo $title; ?></h3>
                <p class="page__text"><?php echo $subtitle; ?></p>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


