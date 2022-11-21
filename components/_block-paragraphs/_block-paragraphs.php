<?php
/*
	Template Name: Абзацы
*/
$blockACF = get_field('_block-paragraphs');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $paragraph1 = $fieldsACF['paragraph1'];
	$paragraph2 = $fieldsACF['paragraph2'];
?>
<div class="page-block">
    <!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
	<!--_block-titles-->
    <div class="page-block__description">
        <p class="page__text"><?php echo $paragraph1; ?></p>
        <p class="page__text page__text_bottom"><?php echo $paragraph2; ?></p>
    </div>
</div>
<?php endif; ?>

