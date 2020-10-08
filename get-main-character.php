<?php foreach ($characters as $character) { ?> 
    <p>Nom: <span class="border border-primary" <?= dynamicInputAttributes("nom", $character); ?>><?=htmlentities($character->getNom())?> </span></p>
    <p>Prenom: <span class="border border-primary" <?= dynamicInputAttributes("prenom", $character); ?>><?=htmlentities($character->getPrenom())?></span></p>
    <p>Age: <span class="border border-primary" <?= dynamicInputAttributes("age", $character, 'number'); ?>><?=htmlentities($character->getAge())?> ans</span></p>
    <p>Race: <span class="border border-primary" <?= dynamicInputAttributes("race", $character); ?>><?=htmlentities($character->getRace())?></span></p>
    <p>Sexe: <span class="border border-primary" <?= dynamicInputAttributes("sexe", $character); ?>><?=htmlentities($character->getSexe())?></span></p>
    <p>Taille: <span class="border border-primary" <?= dynamicInputAttributes("taille", $character, 'number'); ?>><?=htmlentities($character->getTaille())?> CM</span></p>
    <p>Poids: <span class="border border-primary" <?= dynamicInputAttributes("poids", $character, 'number'); ?>><?=htmlentities($character->getPoids())?> KG</span></p>
    <p>Yeux: <span class="border border-primary" <?= dynamicInputAttributes("yeux", $character); ?>><?=htmlentities($character->getYeux())?></span></p>
    <p>Cheveux: <span class="border border-primary" <?= dynamicInputAttributes("cheveux", $character); ?>><?=htmlentities($character->getCheveux())?></span></p>
    <p>Rang: <span class="border border-primary" <?= dynamicInputAttributes("rang", $character); ?>><?=htmlentities($character->getRang())?></span></p>
<?php } ?>

