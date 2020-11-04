<?php 
foreach ($magies as $magie) { ?> 
    
      <p id='<?= $magie->getId() ?>'>Type:</p>
      <div class="rowCustom">
            <form method="post" class="col-1">
                  <input type="hidden" name="fieldEntity" value="<?= get_class($magie); ?>"/>
                  <input type="hidden" name="entityId" value="<?= $magie->getId(); ?>"/> 
                  <button class="btn btn-danger remove" name="remove" value="remove">X</button>
            </form> 
            <div class="col-11">
                  <p><span class="border border-primary custom" <?= dynamicInputAttributes("type", $magie); ?>><?=htmlentities($magie->getType())?></span></p>
            </div>
      </div>
      <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $magie); ?>><?=htmlentities($magie->getNom())?></span></p>
      <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $magie); ?>><?=htmlentities($magie->getDescription())?></span></p>
      <p>Dégâts: <span class="border border-primary" <?= dynamicInputAttributes("degats", $magie, 'number'); ?>><?=htmlentities($magie->getDegats())?></span></p>
      <p>Critique: <span class="border border-primary" <?= dynamicInputAttributes("critique", $magie, 'number'); ?>><?=htmlentities($magie->getCritique())?> %</span></p>
      <p>Malus: <span class="border border-primary" <?= dynamicInputAttributes("malus", $magie, 'number'); ?>><?=htmlentities($magie->getMalus())?> %</span></p>
      <p>Mana: <span class="border border-primary" <?= dynamicInputAttributes("mana", $magie, 'number'); ?>><?=htmlentities($magie->getMana())?></span></p>
      <p>Nombre: <span class="border border-primary" <?= dynamicInputAttributes("nombre", $magie, 'number'); ?>><?=htmlentities($magie->getNombre())?></span></p>
      <p>Effet: <span class="border border-primary" <?= dynamicInputAttributes("effet", $magie); ?>><?=htmlentities($magie->getEffet())?></span></p>
      <div class="divider div-transparent div-dot"></div>
<?php } ?>

<div class="btn-group fixed-topCustom dropup navbar-toggler navbar-toggler-icon">
  <input class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Magie index">
  <div class="dropdown-menu">
      <?php foreach ($magies as $magie) { ?> 
            <a class="list-group-item fixed-left" href="#<?= $magie->getId()?>" ><?= $magie->getNom() ?></a>
      <?php } ?>
  </div>
</div>
