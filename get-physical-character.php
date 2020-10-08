<?php foreach ($characters as $character) { ?> 
            <p>Vie: <span class="border border-primary" <?= dynamicInputAttributes("vie", $character, 'number'); ?>><?=htmlentities($character->getVie())?></span></p>
            <p>Force: <span class="border border-primary" <?= dynamicInputAttributes("force", $character, 'number'); ?>><?=htmlentities($character->getForce())?></span></p>
            <p>Mana: <span class="border border-primary" <?= dynamicInputAttributes("mana", $character, 'number'); ?>><?=htmlentities($character->getMana())?></span></p>
            <p>Puissance: <span class="border border-primary" <?= dynamicInputAttributes("puissance", $character, 'number'); ?>><?=htmlentities($character->getPuissance())?></span></p>
            <p>Precision: <span class="border border-primary" <?= dynamicInputAttributes("precis", $character, 'number'); ?>><?=htmlentities($character->getPrecis())?></span></p>
            <p>Initiative: <span class="border border-primary" <?= dynamicInputAttributes("initiative", $character, 'number'); ?>><?=htmlentities($character->getInitiative())?> %</span></p>
            <p>Agilite: <span class="border border-primary" <?= dynamicInputAttributes("agilite", $character, 'number'); ?>><?=htmlentities($character->getAgilite())?> %</span> </p>
            <p>Mental: <span class="border border-primary" <?= dynamicInputAttributes("mental", $character, 'number'); ?>><?=htmlentities($character->getMental())?> %</span></p>
            <p>Intelligence: <span class="border border-primary" <?= dynamicInputAttributes("intelligence", $character, 'number'); ?>><?=htmlentities($character->getIntelligence())?> %</span></p>
            <p>Volonte: <span class="border border-primary" <?= dynamicInputAttributes("volonte", $character, 'number'); ?>><?=htmlentities($character->getVolonte())?> %</span></p>
            <p>Perception: <span class="border border-primary" <?= dynamicInputAttributes("perception", $character, 'number'); ?>><?=htmlentities($character->getPerception())?> %</span></p>
            <p>Maitrise: <span class="border border-primary" <?= dynamicInputAttributes("maitrise", $character, 'number'); ?>><?=htmlentities($character->getMaitrise())?> %</span></p>
            <p>Parade: <span class="border border-primary" <?= dynamicInputAttributes("parade", $character, 'number'); ?>><?=htmlentities($character->getParade())?> %</span></p>
            <p>Esquive: <span class="border border-primary" <?= dynamicInputAttributes("esquive", $character, 'number'); ?>><?=htmlentities($character->getEsquive())?> %</span></p>
            <p>Bloque: <span class="border border-primary" <?= dynamicInputAttributes("bloque", $character, 'number'); ?>><?=htmlentities($character->getBloque())?> %</span></p>
            <p>Encaissement: <span class="border border-primary" <?= dynamicInputAttributes("encaissement", $character, 'number'); ?>><?=htmlentities($character->getEncaissement())?> %</span></p>
            <p>Resilience: <span class="border border-primary" <?= dynamicInputAttributes("resilience", $character, 'number'); ?>><?=htmlentities($character->getResilience())?> %</span></p>
            <p>Critique: <span class="border border-primary" <?= dynamicInputAttributes("critique", $character, 'number'); ?>><?=htmlentities($character->getCritique())?> %</span></p>
<?php } ?>