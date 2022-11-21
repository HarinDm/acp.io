<style>
    body{
        color: #fff !important;
    }
</style>
<?php
/**
 * Слайдер Видео
 */
$blockACF = get_field('_sliderVideo');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$slider = $fieldsACF['slider'];
?>

<div class="page-items" id="sliderVideo">
    <?php if(!empty($slider )) : ?> 
        <?php if(!empty($slider )) :
            foreach($slider as $slide) : ?>
                <div class="video-item">
                    <div class="video-item-container">
                        <?php if(!empty($slide['slider2'] )) : 
                            foreach($slide['slider2'] as $slide2) : 

                                $iframe = 'code';                                
                            ?>
                            <?php if(!empty($slide2['link'])): ?>
                                    <iframe class="page__img" src="<?php echo $slide2['link']; ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                            <?php else: ?>
                                <a class="page__img" href="<?php echo $slide2['video']; ?>" target="_blank"> 
                                    <video auloplay poster="<?php echo $slide2['poster']; ?>" src="<?php echo $slide2['video']; ?>"></video>
                                </a>
                            <?php endif;?>
                              
                            <?php endforeach; 
                        endif; ?>  
                    </div>
                </div>
        <?php endforeach; 
        endif; ?>  
    <?php endif; ?>
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
<?php endif; ?>