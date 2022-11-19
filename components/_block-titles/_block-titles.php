<?php
/**
 * Заголовок страницы
 */
$blockACF = get_field('_block-titles');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
	
?>
   
    <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><?php echo $title; ?></h1>
    
<?php endif; ?>




