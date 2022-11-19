<?php
/*
	Template Name: Абзацы
*/
$blockACF = get_field('_block-paragraphs');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
    $paragraph1 = $fieldsACF['paragraph1'];
	$paragraph2 = $fieldsACF['paragraph2'];
	// $slider = $fieldsACF['slider'];
?>

<div class="page-block">
    <!--_block-titles-->
			<?php include(TEMPLATEPATH . "/components/_block-titles/_block-titles.php");?>
	<!--_block-titles-->
    <!-- <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>немного <br>  </span><span>О нас</span></h1> -->
    <!-- <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><span>Корпоративные <br>  </span><span>Игры</span></h1> -->
    <div class="page-block__description">
        <p class="page__text"><?php echo $paragraph1 ?></p>
        <p class="page__text page__text_bottom"><?php echo $paragraph2 ?></p>
        <!-- <p class="page__text">ACP GAME — это не просто игры с вопросами и ответами, это прежде всего, комьюнити с общими интересами, желающее проводить свой досуг с пользой. Это объединение успешных людей, которые знают цену своему времени и ценят качество его организации. Все гости к нам приходят по рекомендациям. Мы уделяем большое внимание рассадке, учитывая пол, возраст и семейный статус.</p>
		<p class="page__text page__text_bottom">Комфорт, интересные знакомства и атмосфера — вот, что нас отличает от других. Мероприятия проходят в закрытом формате в лучших ресторанах Москвы.</p> -->
        <!-- <p class="page__text">Досуг успешных людей должен быть достойным, особенно, если это корпоративный досуг. Задавая планку времяпрепровождению своих сотрудников или клиентов, вы задаете планку развитию бизнеса, становления коллектива и партнёрских отношений.</p>
        <p class="page__text page__text_bottom">Уникальный сценарий, полный азарта, эмоций и здоровой конкуренции, поможет наладить контакт между гостями вечера и надолго запомнится всем собравшимся. Игры могут быть разной механики, адаптированы под любое количество гостей и тематику мероприятия, а сама концепция вечера выстроена под любые задачи.</p> -->
    </div>
</div>

<?php endif; ?>

