<?php foreach ($characters as $character) { ?> 
            <p>Resilience magie Rouge: <span class="border border-primary" <?= dynamicInputAttributes("magRedRes", $character, 'number'); ?>><?=htmlentities($character->getMagRedRes())?> %</span></p>
            <p>Resilience magie Blanche: <span class="border border-primary" <?= dynamicInputAttributes("magWhiteRes", $character, 'number'); ?>><?=htmlentities($character->getMagWhiteRes())?> %</span></p>
            <p>Resilience magie Bleue: <span class="border border-primary" <?= dynamicInputAttributes("magBlueRes", $character, 'number'); ?>><?=htmlentities($character->getMagBlueRes())?> %</span></p>
            <p>Resilience magie Verte: <span class="border border-primary" <?= dynamicInputAttributes("magGreenRes", $character, 'number'); ?>><?=htmlentities($character->getMagGreenRes())?> %</span></p>
            <p>Resilience magie Noire: <span class="border border-primary" <?= dynamicInputAttributes("magBlackRes", $character, 'number'); ?>><?=htmlentities($character->getMagBlackRes())?> %</span></p>
            <p>Resilience magie Prismatique :<span class="border border-primary" <?= dynamicInputAttributes("magPrismRes", $character, 'number'); ?>><?=htmlentities($character->getMagPrismRes())?> %</span></p>
            <p>Critique magie Rouge: <span class="border border-primary" <?= dynamicInputAttributes("magRedCrit", $character, 'number'); ?>><?=htmlentities($character->getMagRedCrit())?> %</span></p>
            <p>Critique magie Blanche: <span class="border border-primary" <?= dynamicInputAttributes("magWhiteCrit", $character, 'number'); ?>><?=htmlentities($character->getMagWhiteCrit())?> %</span></p>
            <p>Critique magie Bleue: <span class="border border-primary" <?= dynamicInputAttributes("magBlueCrit", $character, 'number'); ?>><?=htmlentities($character->getMagBlueCrit())?> %</span></p>
            <p>Critique magie Verte: <span class="border border-primary" <?= dynamicInputAttributes("magGreenCrit", $character, 'number'); ?>><?=htmlentities($character->getMagGreenCrit())?> %</span></p>
            <p>Critique magie Noire: <span class="border border-primary" <?= dynamicInputAttributes("magBlackCrit", $character, 'number'); ?>><?=htmlentities($character->getMagBlackCrit())?> %</span></p>
            <p>Critique magie Prismatique: <span class="border border-primary" <?= dynamicInputAttributes("magPrismCrit", $character, 'number'); ?>><?=htmlentities($character->getMagPrismCrit())?> %</span></p>
<?php } ?>  