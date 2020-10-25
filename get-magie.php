<?php 
foreach ($magies as $magie) { ?> 
      <p>Type: <span class="border border-primary" <?= dynamicInputAttributes("type", $magie); ?>><?=htmlentities($magie->getType())?></span></p>
      <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $magie); ?>><?=htmlentities($magie->getNom())?></span></p>
      <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $magie); ?>><?=htmlentities($magie->getDescription())?></span></p>
      <p>Dégâts: <span class="border border-primary" <?= dynamicInputAttributes("degats", $magie, 'number'); ?>><?=htmlentities($magie->getDegats())?></span></p>
      <p>Critique: <span class="border border-primary" <?= dynamicInputAttributes("critique", $magie, 'number'); ?>><?=htmlentities($magie->getCritique())?> %</span></p>
      <p>Malus: <span class="border border-primary" <?= dynamicInputAttributes("malus", $magie, 'number'); ?>><?=htmlentities($magie->getMalus())?> %</span></p>
      <p>Mana: <span class="border border-primary" <?= dynamicInputAttributes("mana", $magie, 'number'); ?>><?=htmlentities($magie->getMana())?></span></p>
      <p>Nombre: <span class="border border-primary" <?= dynamicInputAttributes("nombre", $magie, 'number'); ?>><?=htmlentities($magie->getNombre())?></span></p>
      <p>Effet: <span class="border border-primary" <?= dynamicInputAttributes("effet", $magie); ?>><?=htmlentities($magie->getEffet())?></span></p>
      <div class="separator"></div> 
<?php } ?>