<?php foreach ($inventaires as $inventaire) {  ?> 
     <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $inventaire); ?>><?=htmlentities($inventaire->getNom())?></span></p>
     <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $inventaire); ?>><?=htmlentities($inventaire->getDescription())?></span></p>
     <p>Nombre: <span class="border border-primary" <?= dynamicInputAttributes("nombre", $inventaire, 'number'); ?>><?=htmlentities($inventaire->getNombre())?></span></p>
 <?php } ?>