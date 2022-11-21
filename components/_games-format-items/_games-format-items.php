<?php
/**
 * Элементы формата игр
 */
$blockACF = get_field('_games-format-items');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$games = $fieldsACF['games'];
	
?>

<section class="games-format-title">
    <!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
	<!--_block-titles-->
</section>
<section class="games-format-items">
    <?php 
    if(!empty($games)) :
    foreach($games as $game) : ?>
    <section class="games-format-item">
        <div class="games-format-item-img"><img class="page__img" src="<?php echo $game['image']; ?>"></div>
        <div class="games-format-item-details">
            <details class="page__details">
                <summary class="page__details-summary"> <span class="page__text">Правла игры </span><span class="games-format-name"> <?php echo $game['name']; ?></span></summary>
                    <ul class="page__lists">
                        <div class="page__text"><?php echo $game['description']; ?></div>
                        <?php echo $game['regulations']; ?>
                        <?/*<!--foreach-->
                        <!--if  <div class="page__text"> -->
                        <!--elseif  <page__text_light> -->
                        <!-- <li class="page__list"></li> -->
                        <!--endforeach;-->*/?>
                    </ul>
            </details>
        </div>
    </section>
    <?php endforeach; 
        endif;
    ?>
</section>

<?php endif; ?>


