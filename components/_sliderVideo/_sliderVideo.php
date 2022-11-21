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
    // echo '<pre>';
    // var_dump($slider);
    // echo '</pre>';
?>


<!-- 
slides[повторитель]
    -slides[повторитель]
        -slide[поля]
    -slide
        -item
    -slide -->

<div class="page-items" id="sliderVideo">
    <?php if(!empty($slider )) : ?> 
        <?php if(!empty($slider )) :
            foreach($slider as $slide) : ?>
                <div class="video-item">
                    <div class="video-item-container">
                        <?php if(!empty($slide['slider2'] )) : 
                            foreach($slide['slider2'] as $slide2) : 

                               /* if(!empty($slide2['link'])){
                                    $src = $slide2['link']; 
                                }else{
                                    $src = $slide2['video']; 
                                }*/ 
                                // $src = (!empty($slide2['link'])) ? $slide2['link'] : $slide2['video'];
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

    <!-- <div class="video-item">
        <div class="video-item-container">
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
            <div class="page__img">
                <video poster="assets/img/img-video-page.png" src=""></video>
            </div>
        </div>
    </div> -->
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


            <!-- <div class="page__img">
                <video poster="<?php echo $slide['poster2']; ?>" src="<?php echo $slide['video2']; ?>"></video>
            </div>
            <div class="page__img">
                <video poster="<?php echo $slide['poster3']; ?>" src="<?php echo $slide['video3']; ?>"></video>
            </div>
            <div class="page__img">
                <video poster="<?php echo $slide['poster4']; ?>" src="<?php echo $slide['video4']; ?>"></video>
            </div> -->