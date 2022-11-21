<?php
/**
 * Команда
 */
$blockACF = get_field('_team-block-items');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$teams = $fieldsACF['teams'];
    $paragraph = $fieldsACF['paragraph'];

?>

<div class="team-block__description">
    <p class="page__text"><?php echo $paragraph; ?></p>
</div>
<div class="team-block-items">
<?php 
    if(!empty($teams )) :
    foreach($teams as $team) : ?>
    <div class="team-block__item">
        <div class="page__img"><img src="<?php echo $team['image']; ?>"></div>
        <div class="team-block__item-name">
            <h5 class="page__title-h5"><?php echo $team['name']; ?></h5>
            <div class="page__text position"><?php echo $team['position']; ?></div>
            <div class="description" style="display:none"><?php echo $team['description']; ?></div>
        </div>
        <div class="team-block__item_bg open-modal" data-modal="modal-team"></div>
    </div>
    <?php endforeach; 
        endif;
    ?>
</div>

<?php endif; ?>