<?php
/**
 * Слайдер СМИ
 */
$blockACF = get_field('_sliderSmi');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$slider = $fieldsACF['slider'];
?>
<div class="wrapper">
    <div class="page-items" id="sliderSmi">
            <?php 	
            if(!empty($slider )) :
            foreach($slider as $slide) : 
            
            ?>
                <div class="smi-block-container">
                    <div class="smi-block-container-item">
                        <?php/*TODO: IF ELSE video OR article & add link*/?>
                        
                        <?php 	
                                if(!empty($slide['smiItems'] )) :
                                foreach($slide['smiItems'] as $smiItem) : ?>
                        
                        <?php if(!empty($smiItem['link-article'])) : ?>
                            <div class="smi-block-container__article">
                                <a href="<?php echo $smiItem['link-article']?>" class="page__link">
                                    <img class="page__img" src="<?php echo $smiItem['media']; ?>">
                                    <p class="page__text"><?php echo $smiItem['date']; ?></p>
                                    <p class="page__text"><?php echo $smiItem['title']; ?></p>
                                    <p class="page__text"><?php echo $smiItem['subtitle']; ?></p> 
                                </a>
                                                             
                            </div>
                        <?php else: ?>
                            <div class="smi-block-container__video">
                                <video class="page__img" poster="" src="<?php echo $smiItem['link-video']; ?>"></video>
                                <div class="smi-block-container__video-description">
                                    <p class="page__text page__text_yellow date"><?php echo $smiItem['date']; ?></p>
                                    <p class="page__text page__text_white name"><?php echo $smiItem['title']; ?></p>
                                    <p class="page__text page__text_white name"><?php echo $smiItem['subtitle']; ?></p>
                                </div>
                            </div>    
                        <?php endif;?>

                        <?php endforeach;
                    endif; ?> 


                                    <!-- ---Work Version--- -->
                        <!-- <div class="smi-block-container__video">
                            <video class="page__img" poster="<?php /*echo $slide['media']; ?>" src=""></video>
                            <div class="smi-block-container__video-description">
                                <p class="page__text page__text_yellow date"><?php echo $slide ['date']; ?></p>
                                <p class="page__text page__text_white name"><?php echo $slide['title']; ?></p>
                                <p class="page__text page__text_white name"><?php echo $slide['subtitle']; ?></p>
                            </div>
                        </div>
                        
                        <div class="smi-block-container__article">
                            <img class="page__img" src="<?php echo $slide['media2']; ?>">
                            <p class="page__text"><?php echo $slide['date2']; ?></p>
                            <p class="page__text"><?php echo $slide['title2']; ?></p>
                            <p class="page__text"><?php echo $slide['subtitle2']; */?></p>
                        </div> -->
                                    <!-- ---Work Version--- -->

                    </div>
                </div>
            <?php endforeach; 
                endif;
            ?> 
        </div>
    </div>
    <div class="slider sliderSmi page-nav">
        <div class="slider__actions">
            <button class="page__btn_prev" data-controls="prev"></button>
            <button class="page__btn_next" data-controls="next"></button>
        </div>
        <div class="page-nav">
            <div class="page-nav__number active">01</div>
            <div class="page-nav__number">02</div>  
        </div> 
    </div>
</div>

<?php endif; ?>


