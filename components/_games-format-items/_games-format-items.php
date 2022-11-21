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
    <!-- <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Формат <br>  </span><span>Наших игр</span></h1> -->
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
                <!-- <summary class="page__details-summary"> <span class="page__text">Правла игры </span><span class="games-format-name"> Угадать за 60 секунд</span></summary> -->
                    <ul class="page__lists">
                        <div class="page__text"><?php echo $game['description']; ?></div>
                        <!-- <div class="page__text">1 капитан и 5 интеллектуалов.</div> -->
                        <?php echo $game['regulations']; ?>
                        <!--foreach-->
                        <!--if  <div class="page__text"> -->
                        <!--elseif  <page__text_light> -->
                        <!-- <li class="page__list"></li> -->
                        <!--endforeach;-->

                        <!-- <div class="page__text">Каждая команда состоит из 6 человек: </div>
                        <div class="page__text">1 капитан и 5 интеллектуалов.</div>
                        <li class="page__list">Ведущий задает оригинальные вопросы, которые охватывают все области знаний, требуют эрудиции, логики мышления.</li>
                        <li class="page__list">На каждый вопрос команде дается 1 минута на обсуждение, после чего ведущий собирает бланки с ответами.</li>
                        <li class="page__list">Если команда предложила правильный ответ на вопрос ведущего, она получает 1 балл, если нет – 0.</li>
                        <li class="page__list">Победителем по итогам игры становится команда, набравшая максимальное количество баллов.</li>
                        <li class="page__list">В случае равенства баллов, задается «контрольный вопрос».</li> -->
                    </ul>
            </details>
        </div>
    </section>
    <?php endforeach; 
				endif;
			?>
</section>

<?php endif; ?>


