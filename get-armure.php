<?php foreach ($armures as $armure) { ?> 
      <p>Qualite: <span class="border border-primary" <?= dynamicInputAttributes("qualite", $armure); ?>><?=htmlentities($armure->getQualite())?></span></p>
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