<?php
/**
 * Следующая секция 
 */
$blockACF = get_field('_next-section');
if (!empty($blockACF) && $blockACF["isShow"]) :
$fieldsACF = $blockACF['fields'];

if(!empty($fieldsACF['link']['url'])) :
?>

<a class="next-section-link" href="<?php echo $fieldsACF['link']['url']; ?>">
    <section class="next-section next-section_red">
        <div class="wrapper">
            <h2 class="page__title-h2">Следующий раздел</h2>
            <h3 class="page__title-h3"><?php echo $fieldsACF['link']['title']; ?></h3>
            <div class="page__btn">
                <div class="page__icon page__icon_arrow-long-black_next"></div>
            </div>
        </div>
    </section>
</a>

<?php 
endif; 
endif; 
?>




