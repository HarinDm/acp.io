<?php
/**
 * Цитата
 */
$blockACF = get_field('_blockquote');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$title = $fieldsACF['title'];
?>

<section class="blockquote">
    <p class="page__text"><?php echo $title; ?></p>
</section>

<?php endif; ?>


