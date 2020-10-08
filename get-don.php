<?php foreach ($dons as $don) { ?> 
     <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $don); ?>><?=htmlentities($don->getNom())?></span></p>
     <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $don); ?>><?=htmlentities($don->getDescription())?></span></p>
<?php } ?>  