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
                    <div class="page__lists">
                <!-- <ul class="page__lists"> -->
                        <div class="page__text"><?php echo $game['description']; ?></div>
                        <!-- <div class="page__text">1 капитан и 5 интеллектуалов.</div> -->
                        <div class="page__list"><?php echo $game['regulations']; ?></div>
                        
                        <!-- <div class="page__text">Каждая команда состоит из 6 человек: </div>
                        <div class="page__text">1 капитан и 5 интеллектуалов.</div>
                        <li class="page__list">Ведущий задает оригинальные вопросы, которые охватывают все области знаний, требуют эрудиции, логики мышления.</li>
                        <li class="page__list">На каждый вопрос команде дается 1 минута на обсуждение, после чего ведущий собирает бланки с ответами.</li>
                        <li class="page__list">Если команда предложила правильный ответ на вопрос ведущего, она получает 1 балл, если нет – 0.</li>
                        <li class="page__list">Победителем по итогам игры становится команда, набравшая максимальное количество баллов.</li>
                        <li class="page__list">В случае равенства баллов, задается «контрольный вопрос».</li> -->
                    </div>
                <!-- </ul> -->
            </details>
        </div>
    </section>
    <?php endforeach; 
				endif;
			?>
    <!-- <section class="games-format-item">
        <div class="games-format-item-img"><img class="page__img" src="assets/img/img-games-1.png"></div>
        <div class="games-format-item-details">
            <details class="page__details">
                <summary class="page__details-summary"> <span class="page__text">Правла игры </span><span class="games-format-name"> Читай. Слушай. Смотри</span></summary>
                <ul class="page__lists">
                    <div class="page__text">Игра подразумевает собой три категории заданий.</div>
                    <li class="page__text_light">Читай:  назвать автора известного литературного произведения или афоризма.</li>
                    <li class="page__text_light">Слушай:  определить исполнителя песни.</li>
                    <li class="page__text_light">Смотри:  угадать название фильма.</li>
                    <li class="page__text_light">На каждом столе атрибут игры-кнопка. Именно она дает возможность ответить первым. Жюри фиксирует, кто в какой последовательности нажал, так и отвечает. За неправильный ответ – минус один балл, за правильный – плюс один балл.</li>
                    <li class="page__text_light">Всего 60 заданий. В конце вечера побеждает команда с наибольшим количеством ответов.</li>
                </ul>
            </details>
        </div>
    </section>
    <section class="games-format-item">
        <div class="games-format-item-img"><img class="page__img" src="assets/img/img-games-3.png"></div>
        <div class="games-format-item-details">
            <details class="page__details">
                <summary class="page__details-summary"> <span class="page__text">Правла игры </span><span class="games-format-name"> Большая игра</span></summary>
                <ul class="page__lists">
                    <div class="page__text">Игра состоит из пяти категорий:</div>
                    <li class="page__text">Верю — не верю</li>
                    <li class="page__text">История</li>
                    <li class="page__text">Проза</li>
                    <li class="page__text">Короли и Королевы</li>
                    <li class="page__text">Да ну</li>
                    <div class="page__text_light">В каждой категории по 5 вопросов. Команды состоят из 6 человек. Ведущий дает право выбрать категорию первому столу. Первый стол имеет право первого ответа. На ответ дается минута. Если первый стол отвечает правильно — команда получает 1 балл, ход переходит ко второму столу. Если команда ответила не правильно, в игру вступают остальные команды. В течении минуты команды сдают бланки с ответами ведущему. Ход переходит к третьему столу и т.д.</div>
                    <div class="page__text_light">Жюри фиксирует баллы. Победителем становится команда, набравшая наибольшее количество правильных вопросов. В случае равенства баллов, задается контрольный вопрос.</div>
                </ul>
            </details>
        </div>
    </section>
    <section class="games-format-item">
        <div class="games-format-item-img"><img class="page__img" src="assets/img/img-games-4.png"></div>
        <div class="games-format-item-details">
            <details class="page__details">
                <summary class="page__details-summary"> <span class="page__text">Правла игры </span><span class="games-format-name"> Что?Где?Почему?</span></summary>
                <ul class="page__lists">
                    <div class="page__text">Общие положения</div>
                    <li class="page__list">В игре принимают участие 5-7 команд по 6-8 человек (далее знатоки).</li>
                    <li class="page__list">Каждая команда должна ответить на 5 вопросов.</li>
                    <li class="page__list">Ведущий по очереди задает вопросы каждой команде, а знатоки за 1 минуту должны найти ответ на поставленный вопрос.</li>
                    <li class="page__list">Если знатоки правильно отвечают на вопрос, они зарабатывают балл.</li>
                    <li class="page__list">Правильность ответа определяет ведущий игры.</li>
                    <li class="page__list">Победителем игры становится команда, набравшая большее количество баллов.</li>
                    <li class="page__list">Если несколько команд набрали одинаковое количество баллов, они встречаются в дополнительном поединке, где им будет задан один вопрос на скорость ответа.</li>
                </ul>
            </details>
        </div>
    </section> -->
</section>

<?php endif; ?>


