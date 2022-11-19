<?php
/**
 * Контакты
 */
$blockACF = get_field('_contacts-block');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$contacts = $fieldsACF['contacts'];
?>

<?php if(!empty($contacts )) : ?>
<div class="contacts-block-items"> 
    <?php 	
        if(!empty($contacts )) :
        foreach($contacts as $contact) : ?>
        <div class="page-item">
            <p class="page__text city"><?php echo $contact['city']; ?></p>
            <p class="page__text name"><?php echo $contact['name']; ?></p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru"><?php echo $contact['email']; ?></a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25"><?php echo $contact['phone']; ?></a><a class="page__link page__text tel" href="tel:+7 (985) 774-32-40"><?php echo $contact['phone2']; ?></a>              
        </div>
    <?php endforeach; 
        endif;
    ?>     
        <!-- <p class="page__text city">Москва</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:+7 (985) 774-32-40">+7 (985) 774-32-40</a> -->
    
    <!-- <div class="page-item">
        <p class="page__text city">Санкт-Петербург</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:undefined"></a>
    </div>
    <div class="page-item">
        <p class="page__text city">Екатеринбург</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:+7 (985) 774-32-40">+7 (985) 774-32-40</a>
    </div>
    <div class="page-item">
        <p class="page__text city">Армения</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:undefined"></a>
    </div>
    <div class="page-item">
        <p class="page__text city">Казахстан</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:undefined"></a>
    </div>
    <div class="page-item">
        <p class="page__text city">Узбекистан</p>
        <p class="page__text name">Мария Жачева</p><a class="page__link page__text eMail" href="mailto:ak@acpaige.ru">ak@acpaige.ru</a><a class="page__link page__text tel" href="tel:8 (495) 941-83-25">8 (495) 941-83-25</a><a class="page__link page__text tel" href="tel:undefined"></a>
    </div> -->
</div>
<?php endif; ?>
<?php endif; ?>


