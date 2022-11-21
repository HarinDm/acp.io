<?php
/**
 * Контакты
 */
$blockACF = get_field('_contacts-block');
if (!empty($blockACF) && $blockACF["isShow"]) :
    $fieldsACF = $blockACF['fields'];
	$contacts = $fieldsACF['contacts'];
?>
<div class="contacts-block-items"> 
    <?php 	
        if(!empty($contacts )) :
        foreach($contacts as $contact) : ?>
        <div class="page-item">
            <p class="page__text city"><?php echo $contact['city']; ?></p>
            <p class="page__text name"><?php echo $contact['name']; ?></p>
            <a class="page__link page__text eMail" href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
            <a class="page__link page__text tel" href="tel:<?php echo $contact['phone']; ?>"><?php echo $contact['phone']; ?></a>
            <a class="page__link page__text tel" href="tel:<?php echo $contact['phone2']; ?>"><?php echo $contact['phone2']; ?></a>              
        </div>
    <?php endforeach; 
        endif;
    ?>     
</div>
<?php endif; ?>


