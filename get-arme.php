<?php foreach ($armes as $arme) { ?> 
      <p>Qualite: <span class="border border-primary" <?= dynamicInputAttributes("qualite", $arme); ?>><?=htmlentities($arme->getQualite())?></span></p>
      <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $arme); ?>><?=htmlentities($arme->getNom())?></span></p>
      <p>Dégâts: <span class="border border-primary" <?= dynamicInputAttributes("degats", $arme, 'number'); ?>><?=htmlentities($arme->getDegats())?></span></p>
      <p>Critique: <span class="border border-primary" <?= dynamicInputAttributes("critique", $arme, 'number'); ?>><?=htmlentities($arme->getCritique())?> %</span></p>
      <p>Resistance: <span class="border border-primary" <?= dynamicInputAttributes("resistance", $arme, 'number'); ?>><?=htmlentities($arme->getResistance())?></span></p>
      <p>Bonus de Parade: <span class="border border-primary" <?= dynamicInputAttributes("bonusParade", $arme, 'number'); ?>><?=htmlentities($arme->getBonusParade())?> %</span></p>
      <p>Dégâts sur Resistance: <span class="border border-primary" <?= dynamicInputAttributes("degatSurRes", $arme, 'number'); ?>><?=htmlentities($arme->getDegatSurRes())?></span></p>
      <p>Taux de Destruction: <span class="border border-primary" <?= dynamicInputAttributes("tauxDestruction", $arme, 'number'); ?>><?=htmlentities($arme->getTauxDestruction())?> %</span></p>
      <p>Amélioration: <span class="border border-primary" <?= dynamicInputAttributes("amelioration", $arme); ?>><?=htmlentities($arme->getAmelioration())?></span></p>
      <div class="separator"></div>
<?php } ?>  