<?php foreach ($contacts as $contact) { ?> 
<p>NOM: <span class="border border-primary" <?= dynamicInputAttributes("nameContact", $contact, 'string'); ?>><?=htmlentities($contact->getNameContact())?></span></p>
<p>NUMERO: <span class="border border-primary" <?= dynamicInputAttributes("numberTel", $contact, 'number'); ?>>&#9742; <?=htmlentities($contact->getNumberTel())?></span></p>
<p>CHANCE DE DECROCHER: <span class="border border-primary" <?= dynamicInputAttributes("chance", $contact, 'number'); ?>><?=htmlentities($contact->getChance())?> %</span></p>
<?php } ?>

<?php require('../Backend/create-contact.php'); ?>