<?php
/**
 * _block-single-phostos
 * TODO: foreach
 */
$blockACF = get_field('_sliderGallery');
if (!empty($blockACF) && $blockACF["isShow"]) :

?>

<?php endif; ?>

<div class="page-content">

    <div class="page-items" id="sliderGallery">
    
        <?php $args = array(
                'posts_per_page' => -1, 
                'post_type'     => 'photos', 
                'key' => 'views',
                'orderby' => 'meta_value_num', 
                'order'    => 'ASC',
                'post_status' => 'publish',
                );
						
				$posts = new WP_Query($args);
                $posts = $posts->get_posts();
						 
				foreach ($posts  as $post ) : 

                ?> 
                    <!-- Блок Превью для Галереи -->
                   
                    <!-- Блок Превью для Галереи -->
				<?php endforeach; ?>
    </div>
    <div class="slider page-nav">
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



