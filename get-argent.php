<?php foreach ($argents as $argent) { ?>   
            <p>Or: <span class="border border-primary" <?= dynamicInputAttributes("gold", $argent, 'number'); ?>><?=htmlentities($argent->getGold())?></span></p>
            <p>Platine: <span class="border border-primary" <?= dynamicInputAttributes("platine", $argent, 'number'); ?>><?=htmlentities($argent->getPlatine())?></span></p>
            <p>Mithril: <span class="border border-primary" <?= dynamicInputAttributes("mithril", $argent, 'number'); ?>><?=htmlentities($argent->getMithril())?></span></p>
            <p>Dragon: <span class="border border-primary" <?= dynamicInputAttributes("dragon", $argent, 'number'); ?>><?=htmlentities($argent->getDragon())?></span></p>
            <p>Throne: <span class="border border-primary" <?= dynamicInputAttributes("throne", $argent, 'number'); ?>><?=htmlentities($argent->getThrone())?></span></p>
            <p>Placement: <span class="border border-primary" <?= dynamicInputAttributes("placement", $argent, 'number'); ?>><?=htmlentities($argent->getPlacement())?></span></p>
<?php } ?>