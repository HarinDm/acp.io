<?php
/**
 * Шаблон
 */
$blockACF = get_field('_template');
if (!empty($blockACF) && $blockACF["isShow"]) :
?>

<div>content </div>


<?php endif; ?>


