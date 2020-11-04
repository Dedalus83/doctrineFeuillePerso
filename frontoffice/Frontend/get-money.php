<p>Or: <span class="border border-primary" <?= dynamicInputAttributes("gold", $argents, 'number'); ?>><?=htmlentities($argents->getGold())?></span></p>
<p>Platine: <span class="border border-primary" <?= dynamicInputAttributes("platine", $argents, 'number'); ?>><?=htmlentities($argents->getPlatine())?></span></p>
<p>Mithril: <span class="border border-primary" <?= dynamicInputAttributes("mithril", $argents, 'number'); ?>><?=htmlentities($argents->getMithril())?></span></p>
<p>Dragon: <span class="border border-primary" <?= dynamicInputAttributes("dragon", $argents, 'number'); ?>><?=htmlentities($argents->getDragon())?></span></p>
<p>Throne: <span class="border border-primary" <?= dynamicInputAttributes("throne", $argents, 'number'); ?>><?=htmlentities($argents->getThrone())?></span></p>
<p>Placement: <span class="border border-primary" <?= dynamicInputAttributes("placement", $argents, 'number'); ?>><?=htmlentities($argents->getPlacement())?></span></p>
