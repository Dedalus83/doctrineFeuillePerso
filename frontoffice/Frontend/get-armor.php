<?php foreach ($armures as $armure) { ?> 
      <p id='<?= $armure->getId() ?>'>Qualite:</p> 
      <div class="rowCustom"> 
            <form method="post" class="col-1">
                  <input type="hidden" name="fieldEntity" value="<?= get_class($armure); ?>"/>
                  <input type="hidden" name="entityId" value="<?= $armure->getId(); ?>"/>
                  <button class="btn btn-danger remove" name="remove" value="remove">X</button>
            </form> 
            <div class="col-11">
                  <p><span class="border border-primary custom" <?= dynamicInputAttributes("qualite", $armure); ?>><?=htmlentities($armure->getQualite())?></span></p>
            </div>
      </div>
      <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $armure); ?>><?=htmlentities($armure->getNom())?></span></p>
      <p>Vie: <span class="border border-primary" <?= dynamicInputAttributes("vie", $armure, 'number'); ?>><?=htmlentities($armure->getVie())?></span></p>
      <p>Resilience: <span class="border border-primary" <?= dynamicInputAttributes("resilience", $armure, 'number'); ?>><?=htmlentities($armure->getResilience())?>%</span> </p>
      <p>Resistance: <span class="border border-primary" <?= dynamicInputAttributes("resistance", $armure, 'number'); ?>><?=htmlentities($armure->getResistance())?></span></p>
      <p>Malus à l'Esquive: <span class="border border-primary" <?= dynamicInputAttributes("malusEsquive", $armure, 'number'); ?>><?=htmlentities($armure->getMalusEsquive())?>%</span></p>
      <p>Amélioration: <span class="border border-primary" <?= dynamicInputAttributes("amelioration1", $armure); ?>><?=htmlentities($armure->getAmelioration1())?></span></p>
      <p>Amélioration: <span class="border border-primary" <?= dynamicInputAttributes("amelioration2", $armure); ?>><?=htmlentities($armure->getAmelioration2())?></span></p>
      <p>Amélioration: <span class="border border-primary" <?= dynamicInputAttributes("amelioration3", $armure); ?>><?=htmlentities($armure->getAmelioration3())?></span></p>
      <div class="divider div-transparent div-dot"></div>
<?php } ?>

<div class="btn-group fixed-topCustom dropup navbar-toggler navbar-toggler-icon">
  <input class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Armure index">
  <div class="dropdown-menu">
      <?php foreach ($armures as $armure) { ?> 
            <a class="list-group-item fixed-left" href="#<?= $armure->getId()?>" ><?= $armure->getNom() ?></a>
      <?php } ?>
  </div>
</div>