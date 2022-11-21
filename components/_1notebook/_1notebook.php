


	<!-- <h2 class="page__title-h2"> <?= $titleACF; ?></h2>  -->
    <h2 class="page__title-h2"> <?php echo $titleACF; ?></h2> 
			<p></p>
			<!--foreach-->
			<!--<div class="page__text hide">
				<div class="page_yellow">25 Октября</div>
				<div class="city">Ереван</div>
				<div class="game-name">Угадать за 60 секунд</div>
			</div>-->
			<!--foreach-->

<!-- 
slides[повторитель]
    -slides[повторитель]
        -slide[поля]
    -slide
        -item
    -slide -->


     <!-- if(!empty($slide2['link'])){
                                    $src = $slide2['link']; 
                                }else{
                                    $src = $slide2['video']; 
                                }*/ 
                                // $src = (!empty($slide2['link'])) ? $slide2['link'] : $slide2['video']; -->


    



<?php/* if(!empty($titleGray)) :?>
            <h1 class="page__title-h1 page__title-h1_text-shadow_gray"><?php echo $titleGray ?></h1>
            <?php else:?>
            <h1 class="page__title-h1 page__title-h1_text-shadow_gray page__title-h1_text-shadow_gray-yellow"><?php echo $titleYellow ?></h1>
            <?php endif;*/?>


  
     <!-- $titleGray = '<h1 class="page__title-h1 page__title-h1_text-shadow_gray"></h1>';
     $titleYellow = '<h1 class="page__title-h1 page__title-h1_text-shadow_gray page__title-h1_text-shadow_gray-yellow"></h1>';

    $title = (!empty($titleGray)) ? $titleGray : $titleYellow;
    
    
    ?> -->

    <?php/* echo $title */?>

<!-- 
    
$fieldsACF = $blockACF['fields'];
$titleGray = $fieldsACF['title-gray'];
$titleYellow = $fieldsACF['title-yellow'];
?>
-->